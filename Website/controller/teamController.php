<?php

require_once(dirname(__FILE__).'/../utils/database.php');

class TeamController {

    public static function getTeamNameByIds($ids) {
        $sql = "SELECT name FROM " . CONFIG_TABLE_PREFIX . "teams WHERE ids = '" . $ids . "'";
        $result = DB::query($sql, FALSE);
        $result = mysql_fetch_object($result);
        if (!$result) {
            //TODO:: Error log
        }

        return $result->name;
    }

}
