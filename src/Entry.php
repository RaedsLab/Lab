<?php

namespace portfolio;

/**
 * Class representing an entry in the portfolio project
 *
 * @author Raed CHAMMAM
 */
class Entry {
    /*
     * $id : string 
     * used in the URL
     */

    public $id;

    /*
     * $title : string
     * Displayed title & used in meta
     */
    public $title;

    /*
     * $description : string
     * Displayed description
     */
    public $description;

    /*
     * $description_short : string
     * Short version of $description
     * Used in meta
     */
    public $description_short;

    /*
     * $link_demo : string
     * Link for a working demo 
     */
    public $link_demo;

    /*
     * $link_github : string
     * Link for github project 
     */
    public $link_github;

    /*
     * $image_main : string
     * URL of the main image
     */
    public $image_main;

    /*
     * $image_alt : string
     * ALT text for main image
     */
    public $image_alt;

    public function objectToEntry($object) {
        $this->id = $object->id;
        $this->title = $object->title;
        $this->description = $object->description;
        $this->description_short = $object->description_short;
        $this->link_demo = $object->link_demo;
        $this->link_github = $object->link_github;
        $this->image_main = $object->image_main;
        $this->image_alt = $object->image_alt;
    }

    /*
     * fetches JSON from gist and returns string $json
     * return string $json or False
     */

    private static function getJson() {
        //  $gistURL = 'https://gist.githubusercontent.com/RaedsLab/e373550c98e730f810d3/raw/';
        return file_get_contents('./lab_portfolio.json');
        //return file_get_contents($gistURL);
    }

    /*
     * returns Array of entries  or null
     */

    public static function getAllEntries() {
        $entries = array();

        $json = Entry::getJson();

        if ($json == FALSE) {
            return NULL;
        }
        $tmp_array = json_decode($json);

        for ($index = 0; $index < count($tmp_array); $index++) {
            $tmp_entry = new Entry();
            $tmp_entry->objectToEntry($tmp_array[$index]);
            array_push($entries, $tmp_entry);
        }

        return $entries;
    }

    /*
     * $entires : Array of Entry
     * $id : string
     * 
     * return : Entry or NULL 
     */

    public static function getEntryById($entries, $id) {

        foreach ($entries as $entry) {

            if ($entry->id == $id) {
                return $entry;
            }
        }
        return NULL;
    }

}
