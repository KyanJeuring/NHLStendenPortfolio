<?php
    class portfolioButtons
    {
        public $title;
        public $link;
        public $icon;
        public $class;
        public function __construct($title, $link, $icon, $class)
        {
            $this->title = $title;
            $this->link = $link;
            $this->icon = $icon;
            $this->class = $class;
        }
    }
?>