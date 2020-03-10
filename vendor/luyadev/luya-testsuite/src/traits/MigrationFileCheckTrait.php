<?php

namespace luya\testsuite\traits;

use Yii;
use luya\helpers\FileHelper;

/**
 * Migration File Check.
 *
 * This trait allows you to check a given folder or file of migrations whether each create table statement has a drop table statement.
 *
 * Check a single migration file.
 *
 * ```php
 * use MigrationFileCheckTrait;
 *
 * public function testMigrationFiles()
 * {
 *     $this->checkMigrationFile('@estoreadmin/migrations/m170515_115236_basetables.php');
 * }
 * ```
 *
 * Check folder with migration files:
 *
 * ```php
 * $this->checkMigrationFolder('@estoreadmin/migrations');
 * ```
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.1
 */
trait MigrationFileCheckTrait
{
    /**
     * @var string The instance class to compare the migration files.
     */
    public $dbMigrationInstance = 'yii\\db\\Migration';
    
    /**
     * Check a given migration file based on its path.
     *
     * @param string $filePath Path to the migration file.
     */
    public function checkMigrationFile($filePath)
    {
        $filePath = Yii::getAlias($filePath);
        $className = FileHelper::getFileInfo($filePath)->name;
        
        $this->assertInstanceOf($this->dbMigrationInstance, $this->createMigration($filePath, $className));

        $rawClassContent = FileHelper::getFileContent($filePath);
        
        preg_match_all('/createTable\(([\"\'\0%_\{\}\-a-zA-Z0-9]+)/mi', $rawClassContent, $result);
        
        foreach ($result[1] as $create) {
            $tableName = str_replace(["\"", "'"], '', $create);
            
            preg_match_all("/dropTable\((\"|')(".preg_quote($tableName).")(\"|')/mi", $rawClassContent, $r);
            
            $this->assertSame(1, count($r[0]), "Missing dropTable command for table {$tableName}.");
        }
    }
    
    /**
     * Check a folder with migrations files.
     *
     * Each migration will be checked by {{checkMigrationFile()}}.
     *
     * @param string $folder Path to the folder `@estoreadmin/migrations`.
     */
    public function checkMigrationFolder($folder)
    {
        $folder = Yii::getAlias($folder);
        
        foreach (FileHelper::findFiles($folder) as $file) {
            $this->checkMigrationFile($file);
        }
    }
    
    /**
     * Include the file and create the migration object.
     *
     * @param string $file
     * @param string $className
     * @return object
     */
    private function createMigration($file, $className)
    {
        require_once($file);
        
        return new $className();
    }
}
