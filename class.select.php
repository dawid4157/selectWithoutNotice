<?php
	/**
	  * selectWithoutNotice
	  * A class that helps display an error message while attempting to send a denied list item from HTML.
	  * @version 1.0
	  * @author dawid4157
	  */
	class Select {
		private $paramName, $property = null;
		/**
		 * @param string $paramName
	     * @return string
	     */
		public function getListName($paramName) {
	        if (isset($_POST[$paramName])) {
	            $this->property = trim($_POST[$paramName]);
	        }
	        return $this;
	    }
	    /**
	     * @return $this
	     */
	    public function getListProperty() {
	        return $this->property;
	    }
	    # Example validation
	    public function doValid() {
	    	if ($this->property == NULL) {
	    		echo 'You must select fruit.';
	    	}
	    }
	}
