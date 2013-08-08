<?php
    namespace News\Model;

    class News{
        public $id;
        public $title;
        public $content;
        public $posted;

        public function exchangeArray($data){
            $this->id     = (isset($data['id'])) ? $data['id'] : null;
            $this->title  = (isset($data['title'])) ? $data['title'] : null;
            $this->content = (isset($data['content'])) ? $data['content'] : null;
            $this->posted = (isset($data['posted'])) ? $data['posted'] : null;
        }
    }
?>