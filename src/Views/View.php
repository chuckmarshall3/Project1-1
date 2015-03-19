<?php

namespace Views;


abstract class View
{
    /**
     * @var string $content
     * @access protected
     */
    protected $content;
    protected $data;

    /**
     * Function show - displays the content
     *
     * @return mixed
     *
     * @access public
     */
    public function show($data = array())
    {
        echo $this->content;

        //print_r($data);


    }
}
