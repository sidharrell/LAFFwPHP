<?php
class Vector
{
    // property declaration
    private $components;
	private $index;

    // method declaration
    public function __construct( $initial_components ) {
        if ( is_array( $initial_components ) ) {
			$this->index = 0;
			foreach ($initial_components as $initial_component) {
				if ( is_numeric( $initial_component ) ) {
					$this->components[$this->index] = $initial_component;
				}
				$this->index++;
			}
			$this->index = 0;
		}
    }
}