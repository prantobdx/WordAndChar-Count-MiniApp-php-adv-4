<?php

namespace App\classes;

class Word
{
    protected $inputValue;
    protected $type;
    protected $result;

    public function __construct( $post = null )
    {
        // echo '<pre>';
        // print_r( $post );
        // exit();
        if ( $post )
        {
            $this->inputValue = $post['input_value'];
            $this->type = $post['type'];
        }

    }

    public function index()
    {
        // if ( $this->type == 'word' )
        // {
        //     $this->result = str_word_count( $this->inputValue );
        // }
        // else
        // {
        //     $this->result = strlen( $this->inputValue );
        // }

        $this->result = [
            'givenWord'     => 'Given word' . ' :' . $this->inputValue,
            'wordCount'     => 'Total word' . ' :' . str_word_count( $this->inputValue ),
            'charcterCount' => 'Total character' . ' :' . strlen( $this->inputValue ),
        ];

        return $this->result;

    }

}