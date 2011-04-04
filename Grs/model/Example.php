<?php
/**
 * This is an Example model class
 *
 * Its purpose is ilustrate how to implement a service layer.
 * The file name must be the class name (case matters) and .php extension.
 * Whatever method you create, must accept and array of parameters.
 * The parameters will be passed in the same order as the client provides.
 * Your model files do not have to actually be in this folder. You can use
 * the Grs::setModelPath method to inform a new path.
 */
class Example
{
    /**
     * Say Hello to $params[0] as an array
     *
     * Call this method using: http://www.server.com/optionalContext/Example/sayHelloArray/World.txt
     * alternatively, call World.xml or World.json for additional formats
     */
    public function sayHelloArray($params)
    {
        return array('response' => 'Hello ' . $params[0] . '!');
    }
    /**
     * Say Hello to $params[0] as an string
     *
     * Call this method using: http://www.server.com/optionalContext/Example/sayHello/World.txt
     * alternatively, call World.xml or World.json for additional formats
     */
    public function sayHello($params)
    {
        return 'Hello ' . $params[0] . '!';
    }    
}