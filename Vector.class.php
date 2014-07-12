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
					if (is_string( $initial_component )) {
						$int_test = (int) $initial_component;
						if ( $int_test == $initial_component ) {
							$initial_component = (int) $initial_component;
						} else {
							$initial_component = (float) $initial_component;
						}
					}
					$this->components[$this->index] = $initial_component;
				}
				$this->index++;
			}
			$this->index = 0;
		}
    }
	
	/**
	 * 
	 * @param Vector vector to be compared to $this vector
	 * @return boolean returns false if vector's components are not equal and of the same type
	 */
	
	public function testEquality (Vector $other_vector) {
		$other_components = $other_vector->getComponents();
		if ( is_array( $other_components ) && count($other_components) === count($this->components) ) {
			$this->index = 0;
			foreach ($other_components as $other_component) {
				if ( !is_numeric( $other_component ) || $this->components[$this->index] !== $other_component ) {
					return FALSE;
				}
				$this->index++;
			}
			$this->index = 0;
			return TRUE;
		} else {
			return FALSE;
		}
		
	}
	
	public function getComponents() {
		return $this->components;
	}
}