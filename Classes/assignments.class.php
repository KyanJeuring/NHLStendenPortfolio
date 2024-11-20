<?php
        class Assignments
        {
            public $title;
            public $link;
            public $class;
            public function __construct($title, $link, $class)
            {
                $this->title = $title;
                $this->link = $link;
                $this->class = $class;
            }
        }
    ?>