<?php

require_once('Template.php');

class MemeComponent {
	protected $counterRows = array();

	public function __construct($counterRows) {
		$this->counterRows = $counterRows;
    }
	
	public function generate() {
		$tmpl = new Template();
		$tmpl->counterRows = $this->counterRows;
        $tmpl->i = 0;
        
        $counterBoxes = array();
        
        foreach($tmpl->counterRows as $counterRow){
            if ($counterRow['color'] == "gray"){
                $counterBoxes[] = $tmpl->build('grayMeme.tmpl');
                $tmpl->i++;
            } else {
                $counterBoxes[] = $tmpl->build('orangeMeme.tmpl');
                $tmpl->i++;
            }
        }
		return $counterBoxes;
	}

}
?>