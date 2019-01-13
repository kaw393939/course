<?php
/**
 * Created by PhpStorm.
 * User: Monimus
 * Date: 1/12/2019
 * Time: 3:57 PM
 */

Route::group(array('prefix' => 'api/courses', 'namespace' => 'kaw393939/course'), function()
{
    Route::get('/all', function () {

        $course = array(
            'id' => '1',
            'name' => 'Building Websites',
            'number' => '117',
            'department' => 'IS');
        $courses[] = $course;
        $course = array(
            'id' => '2',
            'name' => 'Building Web Applications',
            'number' => '218',
            'department' => 'IS');
        $courses[] = $course;

        return response()->json($courses);
    });
});


