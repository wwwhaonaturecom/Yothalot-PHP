<?php
/**
 *  Script to test
 *
 *  @author    Toon Schoenmakers <toon.schoenmakers@copernica.com>
 *  @copyright 2015 Copernica BV
 *  @documentation private
 */

/**
 *  Dependencies
 */
require_once('Race.php');

// Create an instance of the WordCount algorithm
$test = new MyRace("test");

// create the connection
$master = new Yothalot\Connection();

// create the new job
$job = new Yothalot\Job($master, $test);

// add some data..
$job->add(1);
$job->add("2");
for ($i = 4; $i < 1124; $i++) $job->add($i);
$job->add(3);

// start the job
$job->start();

// start the job and wait for the result
$result = $job->wait();

// simply var_dump the result
var_dump($result->result());

