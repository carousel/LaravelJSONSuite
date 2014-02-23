<?php 

    /*
     *BASIC JSON OPERARATIONS
     */
    class JSONSuite{
        public function encode($data,$response)
        {
            if($response == true){
                return \Response::json($data);
            }elseif($response == false){
                return json_encode($data);
            }
        }
        public function decode($data,$response)
        {
            if($response == true){
                return \Response::json($data);
            }elseif($response == false || gettype($response) == "string"){
                return $data;
            }
        }
        /*
        *FILE HANDLING
         */
        public function get($path,$type,$response)
        {
            if($type == "decoded"){
                return $this->decode(\File::get($path),$response);
                
            }
                return $this->encode(\File::get($path),$response);
        }
    }

