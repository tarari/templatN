<?php
	namespace TemplatN;

	class Templn{
		//tags location in strings
		private $position;
		public $array;
		


		function __construct($tpl){

			$this->translate($tpl);
		}

		function setposition($pos){
			$this->position=$pos;
		}
		function getposition(){
			return $this->position;
		}
		

		function translate($tpl){
			$filename='tpl'.DS.$tpl;
			
			if(is_readable($filename)){
				$str=trim(file_get_contents($filename));
				$this->array=preg_split("/[\s]+/" ,$str);
				
				// searching the '{%'
				$this->tag_replace();
				$str="";
					foreach ($this->array as $word) {
						$str=$str.$word;
					}
					echo $str;
					print_r($this->array);
			}
		}
		/**
		 *  tag_replace(): Looks for tags and replace them
		 * 
		 * */
		 function tag_replace(){
		 	foreach ($this->array as $key=>$word) {
					if(($word=='{%')){
						$this->position=$key;
						$target=$this->array[$key+1];
						switch($target){
							case "extends":
								$file=$this->array[$key+2];
								$file=trim($file,"/[\"]");
								$cont=$this->getFileStr($file);
								$this->array[$key]=$cont;
								// resplacing contents and unsetting previous values
								unset($this->array[$key+1],$this->array[$key+2],$this->array[$key+3]);
								break;
							case "block":
								break;
						}
						
					}
				}

		 }

		function stranalize($str){
			$words=array('content',
				'endblock',
				'extends',
				'block',
				'head',
				);
		
			foreach ($words as $word) {
				$search=$word;
				//replace file contents
			}
		}


		function getFileStr($filename){
			$file='tpl'.DS.$filename;

			if (is_readable($file)){
				$str=file_get_contents($file);
				return $str;
			}
			else {
				return null;
			}

		}
	}