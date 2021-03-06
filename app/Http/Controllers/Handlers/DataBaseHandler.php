<?php

namespace App\Http\Controllers\Handlers;

use Illuminate\Database\Eloquent\Model;

class DataBaseHandler
{
    /**
     * Get values in database with pagination.
     */
    public static function pagination(Model $db)
    {
        $pages = $db::paginate();

        return $pages;
    }

    /**
     * Get all values in database.
     */
    public static function getAll(Model $db)
    {
        $tables = $db::all();

        return $tables;
    }

    /**
     * Insert data in database.
     */
    public static function insert(Model $db, array $data = [])
    {
        foreach ($data as $key => $value) {
            $db->{$key} = $value;
        }

        $response = $db->save();

        return $response;
    }

    /**
     * Get datas in databases.
     */
    public static function get(Model $db, array $data = [])
    {
        $tables = $db::where($data)->paginate();

        return  $tables;
    }

    /**
     * Get datas in databases by id.
     */
    public static function getById(Model $db, int $id)
    {
        $table = $db::where('id', $id)->first();

        return  $table;
    }

    /**
     * Update datas in databese.
     */
    public static function update(Model $db, int $id, array $data = [])
    {
        $table = self::getById($db, $id);

        foreach ($data as $key => $value) {
            $table->{$key} = $value;
        }

        $response = $table->save();

        return $response;
    }

    /**
     * Delete data in database.
     */
    public static function delete(Model $db, int $id)
    {
        $response = $db::destroy($id);
        return $response;
    }
}
