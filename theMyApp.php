<?php

abstract class PDFNetPHP {
	static function IsEqual($a,$b) {
		return IsEqual($a,$b);
	}

	const e_downloadedtype_page = 0;

	const e_downloadedtype_thumb = e_downloadedtype_thumb;

	const e_downloadedtype_named_dests = e_downloadedtype_named_dests;

	const e_downloadedtype_outline = e_downloadedtype_outline;

	const e_downloadedtype_finished = e_downloadedtype_finished;

	const e_downloadedtype_failed = e_downloadedtype_failed;

	const e_downloadedtype_opened = e_downloadedtype_opened;
}

/* PHP Proxy Classes */
class VectorDouble {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_double_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorDouble(); break;
		default: $this->_cPtr=new_VectorDouble($n);
		}
	}

	function size() {
		return VectorDouble_size($this->_cPtr);
	}

	function capacity() {
		return VectorDouble_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorDouble_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorDouble_clear($this->_cPtr);
	}

	function push($x) {
		VectorDouble_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorDouble_is_empty($this->_cPtr);
	}

	function pop() {
		return VectorDouble_pop($this->_cPtr);
	}

	function get($i) {
		return VectorDouble_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		VectorDouble_set($this->_cPtr,$i,$val);
	}
}

class VectorObj {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__SDF__Obj_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorObj(); break;
		default: $this->_cPtr=new_VectorObj($n);
		}
	}

	function size() {
		return VectorObj_size($this->_cPtr);
	}

	function capacity() {
		return VectorObj_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorObj_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorObj_clear($this->_cPtr);
	}

	function push($x) {
		VectorObj_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorObj_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorObj_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorObj_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorObj_set($this->_cPtr,$i,$val);
	}
}

class VectorPage {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__Page_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorPage(); break;
		default: $this->_cPtr=new_VectorPage($n);
		}
	}

	function size() {
		return VectorPage_size($this->_cPtr);
	}

	function capacity() {
		return VectorPage_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorPage_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorPage_clear($this->_cPtr);
	}

	function push($x) {
		VectorPage_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorPage_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorPage_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorPage_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorPage_set($this->_cPtr,$i,$val);
	}
}

class VectorUChar {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_unsigned_char_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorUChar(); break;
		default: $this->_cPtr=new_VectorUChar($n);
		}
	}

	function size() {
		return VectorUChar_size($this->_cPtr);
	}

	function capacity() {
		return VectorUChar_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorUChar_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorUChar_clear($this->_cPtr);
	}

	function push($x) {
		VectorUChar_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorUChar_is_empty($this->_cPtr);
	}

	function pop() {
		return VectorUChar_pop($this->_cPtr);
	}

	function get($i) {
		return VectorUChar_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		VectorUChar_set($this->_cPtr,$i,$val);
	}
}

class VectorChar {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_char_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorChar(); break;
		default: $this->_cPtr=new_VectorChar($n);
		}
	}

	function size() {
		return VectorChar_size($this->_cPtr);
	}

	function capacity() {
		return VectorChar_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorChar_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorChar_clear($this->_cPtr);
	}

	function push($x) {
		VectorChar_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorChar_is_empty($this->_cPtr);
	}

	function pop() {
		return VectorChar_pop($this->_cPtr);
	}

	function get($i) {
		return VectorChar_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		VectorChar_set($this->_cPtr,$i,$val);
	}
}

class VectorInt {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_int_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorInt(); break;
		default: $this->_cPtr=new_VectorInt($n);
		}
	}

	function size() {
		return VectorInt_size($this->_cPtr);
	}

	function capacity() {
		return VectorInt_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorInt_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorInt_clear($this->_cPtr);
	}

	function push($x) {
		VectorInt_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorInt_is_empty($this->_cPtr);
	}

	function pop() {
		return VectorInt_pop($this->_cPtr);
	}

	function get($i) {
		return VectorInt_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		VectorInt_set($this->_cPtr,$i,$val);
	}
}

class VectorRedaction {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__Redaction_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorRedaction(); break;
		default: $this->_cPtr=new_VectorRedaction($n);
		}
	}

	function size() {
		return VectorRedaction_size($this->_cPtr);
	}

	function capacity() {
		return VectorRedaction_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorRedaction_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorRedaction_clear($this->_cPtr);
	}

	function push($x) {
		VectorRedaction_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorRedaction_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorRedaction_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Redaction($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorRedaction_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Redaction($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorRedaction_set($this->_cPtr,$i,$val);
	}
}

class VectorQuadPoint {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__QuadPoint_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorQuadPoint(); break;
		default: $this->_cPtr=new_VectorQuadPoint($n);
		}
	}

	function size() {
		return VectorQuadPoint_size($this->_cPtr);
	}

	function capacity() {
		return VectorQuadPoint_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorQuadPoint_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorQuadPoint_clear($this->_cPtr);
	}

	function push($x) {
		VectorQuadPoint_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorQuadPoint_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorQuadPoint_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new QuadPoint($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorQuadPoint_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new QuadPoint($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorQuadPoint_set($this->_cPtr,$i,$val);
	}
}

class VectorSeparation {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__Separation_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorSeparation(); break;
		default: $this->_cPtr=new_VectorSeparation($n);
		}
	}

	function size() {
		return VectorSeparation_size($this->_cPtr);
	}

	function capacity() {
		return VectorSeparation_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorSeparation_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorSeparation_clear($this->_cPtr);
	}

	function push($x) {
		VectorSeparation_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorSeparation_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorSeparation_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Separation($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorSeparation_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Separation($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorSeparation_set($this->_cPtr,$i,$val);
	}
}

class VectorDisallowedChange {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__DisallowedChange_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorDisallowedChange(); break;
		default: $this->_cPtr=new_VectorDisallowedChange($n);
		}
	}

	function size() {
		return VectorDisallowedChange_size($this->_cPtr);
	}

	function capacity() {
		return VectorDisallowedChange_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorDisallowedChange_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorDisallowedChange_clear($this->_cPtr);
	}

	function push($x) {
		VectorDisallowedChange_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorDisallowedChange_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorDisallowedChange_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DisallowedChange($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorDisallowedChange_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DisallowedChange($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorDisallowedChange_set($this->_cPtr,$i,$val);
	}
}

class VectorAnnot {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__Annot_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorAnnot(); break;
		default: $this->_cPtr=new_VectorAnnot($n);
		}
	}

	function size() {
		return VectorAnnot_size($this->_cPtr);
	}

	function capacity() {
		return VectorAnnot_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorAnnot_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorAnnot_clear($this->_cPtr);
	}

	function push($x) {
		VectorAnnot_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorAnnot_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorAnnot_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorAnnot_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorAnnot_set($this->_cPtr,$i,$val);
	}
}

class VectorX509Extension {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__Crypto__X509Extension_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorX509Extension(); break;
		default: $this->_cPtr=new_VectorX509Extension($n);
		}
	}

	function size() {
		return VectorX509Extension_size($this->_cPtr);
	}

	function capacity() {
		return VectorX509Extension_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorX509Extension_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorX509Extension_clear($this->_cPtr);
	}

	function push($x) {
		VectorX509Extension_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorX509Extension_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorX509Extension_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X509Extension($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorX509Extension_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X509Extension($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorX509Extension_set($this->_cPtr,$i,$val);
	}
}

class VectorX501AttributeTypeAndValue {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__Crypto__X501AttributeTypeAndValue_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorX501AttributeTypeAndValue(); break;
		default: $this->_cPtr=new_VectorX501AttributeTypeAndValue($n);
		}
	}

	function size() {
		return VectorX501AttributeTypeAndValue_size($this->_cPtr);
	}

	function capacity() {
		return VectorX501AttributeTypeAndValue_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorX501AttributeTypeAndValue_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorX501AttributeTypeAndValue_clear($this->_cPtr);
	}

	function push($x) {
		VectorX501AttributeTypeAndValue_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorX501AttributeTypeAndValue_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorX501AttributeTypeAndValue_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X501AttributeTypeAndValue($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorX501AttributeTypeAndValue_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X501AttributeTypeAndValue($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorX501AttributeTypeAndValue_set($this->_cPtr,$i,$val);
	}
}

class VectorX509Certificate {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__Crypto__X509Certificate_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorX509Certificate(); break;
		default: $this->_cPtr=new_VectorX509Certificate($n);
		}
	}

	function size() {
		return VectorX509Certificate_size($this->_cPtr);
	}

	function capacity() {
		return VectorX509Certificate_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorX509Certificate_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorX509Certificate_clear($this->_cPtr);
	}

	function push($x) {
		VectorX509Certificate_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorX509Certificate_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorX509Certificate_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X509Certificate($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorX509Certificate_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X509Certificate($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorX509Certificate_set($this->_cPtr,$i,$val);
	}
}

class VectorByteRange {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__Common__ByteRange_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorByteRange(); break;
		default: $this->_cPtr=new_VectorByteRange($n);
		}
	}

	function size() {
		return VectorByteRange_size($this->_cPtr);
	}

	function capacity() {
		return VectorByteRange_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorByteRange_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorByteRange_clear($this->_cPtr);
	}

	function push($x) {
		VectorByteRange_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorByteRange_is_empty($this->_cPtr);
	}

	function pop() {
		return VectorByteRange_pop($this->_cPtr);
	}

	function get($i) {
		return VectorByteRange_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		VectorByteRange_set($this->_cPtr,$i,$val);
	}
}

class VectorVectorX509Certificate {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_std__vectorT_pdftron__Crypto__X509Certificate_t_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VectorVectorX509Certificate(); break;
		default: $this->_cPtr=new_VectorVectorX509Certificate($n);
		}
	}

	function size() {
		return VectorVectorX509Certificate_size($this->_cPtr);
	}

	function capacity() {
		return VectorVectorX509Certificate_capacity($this->_cPtr);
	}

	function reserve($n) {
		VectorVectorX509Certificate_reserve($this->_cPtr,$n);
	}

	function clear() {
		VectorVectorX509Certificate_clear($this->_cPtr);
	}

	function push($x) {
		VectorVectorX509Certificate_push($this->_cPtr,$x);
	}

	function is_empty() {
		return VectorVectorX509Certificate_is_empty($this->_cPtr);
	}

	function pop() {
		$r=VectorVectorX509Certificate_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorX509Certificate($r);
		}
		return $r;
	}

	function get($i) {
		$r=VectorVectorX509Certificate_get($this->_cPtr,$i);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorX509Certificate($r);
		}
		return $r;
	}

	function set($i,$val) {
		VectorVectorX509Certificate_set($this->_cPtr,$i,$val);
	}
}

class Selection {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetPageNum() {
		return Selection_GetPageNum($this->_cPtr);
	}

	function GetQuads() {
		return Selection_GetQuads($this->_cPtr);
	}

	function GetAsUnicode() {
		return Selection_GetAsUnicode($this->_cPtr);
	}

	function GetAsHtml() {
		return Selection_GetAsHtml($this->_cPtr);
	}

	function __construct($impl=null) {
		if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Selection') {
			$this->_cPtr=$impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Selection(); break;
		default: $this->_cPtr=new_Selection($impl);
		}
	}
}

class Callback {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Callback') {
			$this->_cPtr=$res;
			return;
		}
		if (get_class($this) === 'Callback') {
			$_this = null;
		} else {
			$_this = $this;
		}
		$this->_cPtr=new_Callback($_this);
	}

	function RenderBeginEventProc() {
		Callback_RenderBeginEventProc($this->_cPtr);
	}

	static function StaticRenderBeginEventProc($data) {
		Callback_StaticRenderBeginEventProc($data);
	}

	function RenderFinishEventProc($cancelled) {
		Callback_RenderFinishEventProc($this->_cPtr,$cancelled);
	}

	static function StaticRenderFinishEventProc($data,$cancelled) {
		Callback_StaticRenderFinishEventProc($data,$cancelled);
	}

	function ErrorReportProc($message) {
		Callback_ErrorReportProc($this->_cPtr,$message);
	}

	static function StaticErrorReportProc($message,$data) {
		Callback_StaticErrorReportProc($message,$data);
	}

	function CurrentPageProc($current_page,$num_pages) {
		Callback_CurrentPageProc($this->_cPtr,$current_page,$num_pages);
	}

	static function StaticCurrentPageProc($current_page,$num_pages,$data) {
		Callback_StaticCurrentPageProc($current_page,$num_pages,$data);
	}

	function JavaScriptEventProc($event_type,$json) {
		Callback_JavaScriptEventProc($this->_cPtr,$event_type,$json);
	}

	static function StaticJavaScriptEventProc($event_type,$json,$data) {
		Callback_StaticJavaScriptEventProc($event_type,$json,$data);
	}

	function CurrentZoomProc($curr_zoom_proc) {
		Callback_CurrentZoomProc($this->_cPtr,$curr_zoom_proc);
	}

	static function StaticCurrentZoomProc($curr_zoom_proc,$data) {
		Callback_StaticCurrentZoomProc($curr_zoom_proc,$data);
	}

	function ConnectionErrorProc($message,$error_code,$switch_to_demo) {
		Callback_ConnectionErrorProc($this->_cPtr,$message,$error_code,$switch_to_demo);
	}

	static function StaticConnectionErrorProc($message,$error_code,$switch_to_demo,$data) {
		Callback_StaticConnectionErrorProc($message,$error_code,$switch_to_demo,$data);
	}

	function ThumbAsyncHandler($page_num,$was_thumb_found,$thumb_buf,$thumb_width,$thumb_height) {
		Callback_ThumbAsyncHandler($this->_cPtr,$page_num,$was_thumb_found,$thumb_buf,$thumb_width,$thumb_height);
	}

	static function StaticThumbAsyncHandler($page_num,$was_thumb_found,$thumb_buf,$thumb_width,$thumb_height,$custom_data) {
		Callback_StaticThumbAsyncHandler($page_num,$was_thumb_found,$thumb_buf,$thumb_width,$thumb_height,$custom_data);
	}

	function RequestRenderInWorkerThread() {
		Callback_RequestRenderInWorkerThread($this->_cPtr);
	}

	static function StaticRequestRenderInWorkerThread($custom_data) {
		Callback_StaticRequestRenderInWorkerThread($custom_data);
	}

	function FindTextHandler($success,$selection) {
		Callback_FindTextHandler($this->_cPtr,$success,$selection);
	}

	static function StaticFindTextHandler($success,$selection,$custom_data) {
		Callback_StaticFindTextHandler($success,$selection,$custom_data);
	}

	function CreateTileProc($buffer,$originX,$originY,$width,$height,$pagNum,$cellNumber,$finalRender,$predictionRender,$tilesRemaining,$firstTile,$canvasWidth,$canvasHeight,$cellSideLength,$cellPerRow,$cellPerCol,$thumbnailId) {
		Callback_CreateTileProc($this->_cPtr,$buffer,$originX,$originY,$width,$height,$pagNum,$cellNumber,$finalRender,$predictionRender,$tilesRemaining,$firstTile,$canvasWidth,$canvasHeight,$cellSideLength,$cellPerRow,$cellPerCol,$thumbnailId);
	}

	static function StaticCreateTileProc($customData,$buffer,$originX,$originY,$width,$height,$pageNum,$cellNumber,$finalRender,$predictionRender,$tilesRemaining,$firstTile,$canvasWidth,$canvasHeight,$cellSideLength,$cellPerRow,$cellPerCol,$thumbnailId) {
		Callback_StaticCreateTileProc($customData,$buffer,$originX,$originY,$width,$height,$pageNum,$cellNumber,$finalRender,$predictionRender,$tilesRemaining,$firstTile,$canvasWidth,$canvasHeight,$cellSideLength,$cellPerRow,$cellPerCol,$thumbnailId);
	}

	function AnnotBitmapProc($operation_type,$buffer,$width,$height,$stride,$page_num,$annot_index,$annot_key,$x_in_page,$y_in_page,$x_offset,$y_offset,$remaining_tiles,$sequence_number,$x_page_size,$y_page_size) {
		Callback_AnnotBitmapProc($this->_cPtr,$operation_type,$buffer,$width,$height,$stride,$page_num,$annot_index,$annot_key,$x_in_page,$y_in_page,$x_offset,$y_offset,$remaining_tiles,$sequence_number,$x_page_size,$y_page_size);
	}

	static function StaticAnnotBitmapProc($me,$operation_type,$buffer,$width,$height,$stride,$page_num,$annot_index,$annot_key,$x_in_page,$y_in_page,$x_offset,$y_offset,$remaining_tiles,$sequence_number,$x_page_size,$y_page_size) {
		Callback_StaticAnnotBitmapProc($me,$operation_type,$buffer,$width,$height,$stride,$page_num,$annot_index,$annot_key,$x_in_page,$y_in_page,$x_offset,$y_offset,$remaining_tiles,$sequence_number,$x_page_size,$y_page_size);
	}

	function DeluxeCreateTileProc($buffer,$width,$height,$stride,$page_num,$x_page_loc,$y_page_loc,$zoomed_page_width,$zoomed_page_height,$tile_id,$x_in_page,$y_in_page,$canvas_id,$remaining_tiles,$tile_type,$sequence_number) {
		Callback_DeluxeCreateTileProc($this->_cPtr,$buffer,$width,$height,$stride,$page_num,$x_page_loc,$y_page_loc,$zoomed_page_width,$zoomed_page_height,$tile_id,$x_in_page,$y_in_page,$canvas_id,$remaining_tiles,$tile_type,$sequence_number);
	}

	static function StaticDeluxeCreateTileProc($me,$buffer,$width,$height,$stride,$page_num,$x_page_loc,$y_page_loc,$zoomed_page_width,$zoomed_page_height,$tile_id,$x_in_page,$y_in_page,$canvas_id,$remaining_tiles,$tile_type,$sequence_number) {
		Callback_StaticDeluxeCreateTileProc($me,$buffer,$width,$height,$stride,$page_num,$x_page_loc,$y_page_loc,$zoomed_page_width,$zoomed_page_height,$tile_id,$x_in_page,$y_in_page,$canvas_id,$remaining_tiles,$tile_type,$sequence_number);
	}

	function RemoveTileProc($canvasNumber,$cellNumber,$thumbnailId,$sequenceNumber) {
		Callback_RemoveTileProc($this->_cPtr,$canvasNumber,$cellNumber,$thumbnailId,$sequenceNumber);
	}

	static function StaticRemoveTileProc($customData,$canvasNumber,$cellNumber,$thumbnailId,$sequenceNumber) {
		Callback_StaticRemoveTileProc($customData,$canvasNumber,$cellNumber,$thumbnailId,$sequenceNumber);
	}

	function PartDownloadedProc($dlType,$doc,$pageNum,$objNum,$message) {
		Callback_PartDownloadedProc($this->_cPtr,$dlType,$doc,$pageNum,$objNum,$message);
	}

	static function StaticPartDownloadedProc($dlType,$doc,$pageNum,$objNum,$message,$customData) {
		Callback_StaticPartDownloadedProc($dlType,$doc,$pageNum,$objNum,$message,$customData);
	}
}

abstract class SignatureHandler {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetName() {
		return SignatureHandler_GetName($this->_cPtr);
	}

	function AppendData($data) {
		SignatureHandler_AppendData($this->_cPtr,$data);
	}

	function Reset() {
		return SignatureHandler_Reset($this->_cPtr);
	}

	function CreateSignature() {
		$r=SignatureHandler_CreateSignature($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function c_Clone() {
		$r=SignatureHandler_c_Clone($this->_cPtr);
		$this->_cPtr = $r;
		return $this;
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__SDF__SignatureHandler') {
			$this->_cPtr=$res;
			return;
		}
		if (get_class($this) === 'SignatureHandler') {
			$_this = null;
		} else {
			$_this = $this;
		}
		$this->_cPtr=new_SignatureHandler($_this);
	}
}

class TRN_matrix2d {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'TRN_matrix2d_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'TRN_matrix2d_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_matrix2d_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_matrix2d') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_matrix2d();
	}
}

class TRN_byterange {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_offset') return TRN_byterange_m_offset_set($this->_cPtr,$value);
		if ($var === 'm_size') return TRN_byterange_m_size_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_offset') return TRN_byterange_m_offset_get($this->_cPtr);
		if ($var === 'm_size') return TRN_byterange_m_size_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_byterange_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_byterange') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_byterange();
	}
}

class TRN_rect {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'TRN_rect_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'TRN_rect_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_rect_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_rect') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_rect();
	}
}

class TRN_date {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'TRN_date_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'TRN_date_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_date_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_date') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_date();
	}
}

class TRN_chardata {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'TRN_chardata_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'TRN_chardata_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_chardata_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_chardata') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_chardata();
	}
}

class TRN_point {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'x') return TRN_point_x_set($this->_cPtr,$value);
		if ($var === 'y') return TRN_point_y_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'x') return TRN_point_x_get($this->_cPtr);
		if ($var === 'y') return TRN_point_y_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_point_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_point') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_point();
	}
}

class TRN_quadpoint {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'TRN_quadpoint_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'TRN_quadpoint_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TRN_quadpoint_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_TRN_quadpoint') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TRN_quadpoint();
	}
}

class Matrix2D extends TRN_matrix2d {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TRN_matrix2d::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TRN_matrix2d::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TRN_matrix2d::__isset($var);
	}

	function __construct($a_or_m=null,$b=null,$c_=null,$d=null,$h=null,$v=null) {
		if (is_resource($a_or_m) && get_resource_type($a_or_m) === '_p_pdftron__Common__Matrix2D') {
			$this->_cPtr=$a_or_m;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Matrix2D(); break;
		case 1: $this->_cPtr=new_Matrix2D($a_or_m); break;
		case 2: $this->_cPtr=new_Matrix2D($a_or_m,$b); break;
		case 3: $this->_cPtr=new_Matrix2D($a_or_m,$b,$c_); break;
		case 4: $this->_cPtr=new_Matrix2D($a_or_m,$b,$c_,$d); break;
		case 5: $this->_cPtr=new_Matrix2D($a_or_m,$b,$c_,$d,$h); break;
		default: $this->_cPtr=new_Matrix2D($a_or_m,$b,$c_,$d,$h,$v);
		}
	}

	function Set($a,$b,$c_,$d,$h,$v) {
		Matrix2D_Set($this->_cPtr,$a,$b,$c_,$d,$h,$v);
	}

	function Concat($a,$b,$c_,$d,$h,$v) {
		Matrix2D_Concat($this->_cPtr,$a,$b,$c_,$d,$h,$v);
	}

	function Multiply($m) {
		$r=Matrix2D_Multiply($this->_cPtr,$m);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function IsEquals($m) {
		return Matrix2D_IsEquals($this->_cPtr,$m);
	}

	function IsNotEquals($m) {
		return Matrix2D_IsNotEquals($this->_cPtr,$m);
	}

	function Mult($pt) {
		$r=Matrix2D_Mult($this->_cPtr,$pt);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function Inverse() {
		$r=Matrix2D_Inverse($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function Translate($h,$v) {
		Matrix2D_Translate($this->_cPtr,$h,$v);
	}

	function PreTranslate($h,$v) {
		Matrix2D_PreTranslate($this->_cPtr,$h,$v);
	}

	function PostTranslate($h,$v) {
		Matrix2D_PostTranslate($this->_cPtr,$h,$v);
	}

	function Scale($h,$v) {
		Matrix2D_Scale($this->_cPtr,$h,$v);
	}

	static function ZeroMatrix() {
		$r=Matrix2D_ZeroMatrix();
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	static function IdentityMatrix() {
		$r=Matrix2D_IdentityMatrix();
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	static function RotationMatrix($angle) {
		$r=Matrix2D_RotationMatrix($angle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}
}

class GSChangesIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return GSChangesIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return GSChangesIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('GSChangesIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		GSChangesIterator_Destroy($this->_cPtr);
	}

	function Next() {
		GSChangesIterator_Next($this->_cPtr);
	}

	function Current() {
		return GSChangesIterator_Current($this->_cPtr);
	}

	function HasNext() {
		return GSChangesIterator_HasNext($this->_cPtr);
	}

	function __construct($impl_or_c=null) {
		if (is_resource($impl_or_c) && get_resource_type($impl_or_c) === '_p_pdftron__Common__IteratorT_int_t') {
			$this->_cPtr=$impl_or_c;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_GSChangesIterator(); break;
		default: $this->_cPtr=new_GSChangesIterator($impl_or_c);
		}
	}
}

class UInt32Iterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return UInt32Iterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return UInt32Iterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('UInt32Iterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		UInt32Iterator_Destroy($this->_cPtr);
	}

	function Next() {
		UInt32Iterator_Next($this->_cPtr);
	}

	function Current() {
		return UInt32Iterator_Current($this->_cPtr);
	}

	function HasNext() {
		return UInt32Iterator_HasNext($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_unsigned_int_t') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_UInt32Iterator(); break;
		default: $this->_cPtr=new_UInt32Iterator($c_or_impl);
		}
	}
}

class PageIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return PageIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return PageIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PageIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		PageIterator_Destroy($this->_cPtr);
	}

	function Next() {
		PageIterator_Next($this->_cPtr);
	}

	function Current() {
		$r=PageIterator_Current($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function HasNext() {
		return PageIterator_HasNext($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_pdftron__PDF__Page_t') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PageIterator(); break;
		default: $this->_cPtr=new_PageIterator($c_or_impl);
		}
	}
}

class FDFFieldIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return FDFFieldIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return FDFFieldIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('FDFFieldIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		FDFFieldIterator_Destroy($this->_cPtr);
	}

	function Next() {
		FDFFieldIterator_Next($this->_cPtr);
	}

	function Current() {
		$r=FDFFieldIterator_Current($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FDFField($r);
		}
		return $r;
	}

	function HasNext() {
		return FDFFieldIterator_HasNext($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_pdftron__FDF__FDFField_t') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FDFFieldIterator(); break;
		default: $this->_cPtr=new_FDFFieldIterator($c_or_impl);
		}
	}
}

class FieldIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return FieldIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return FieldIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('FieldIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		FieldIterator_Destroy($this->_cPtr);
	}

	function Next() {
		FieldIterator_Next($this->_cPtr);
	}

	function Current() {
		$r=FieldIterator_Current($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Field($r);
		}
		return $r;
	}

	function HasNext() {
		return FieldIterator_HasNext($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_pdftron__PDF__Field_t') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FieldIterator(); break;
		default: $this->_cPtr=new_FieldIterator($c_or_impl);
		}
	}
}

class CharIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return CharIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return CharIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('CharIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		CharIterator_Destroy($this->_cPtr);
	}

	function Next() {
		CharIterator_Next($this->_cPtr);
	}

	function Current() {
		$r=CharIterator_Current($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TRN_chardata($r);
		}
		return $r;
	}

	function HasNext() {
		return CharIterator_HasNext($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_TRN_chardata_t') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_CharIterator(); break;
		default: $this->_cPtr=new_CharIterator($c_or_impl);
		}
	}
}

class DigitalSignatureFieldIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return DigitalSignatureFieldIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return DigitalSignatureFieldIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('DigitalSignatureFieldIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		DigitalSignatureFieldIterator_Destroy($this->_cPtr);
	}

	function Next() {
		DigitalSignatureFieldIterator_Next($this->_cPtr);
	}

	function Current() {
		$r=DigitalSignatureFieldIterator_Current($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DigitalSignatureField($r);
		}
		return $r;
	}

	function HasNext() {
		return DigitalSignatureFieldIterator_HasNext($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_pdftron__PDF__DigitalSignatureField_t') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_DigitalSignatureFieldIterator(); break;
		default: $this->_cPtr=new_DigitalSignatureFieldIterator($c_or_impl);
		}
	}
}

class Filter {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_owner') return Filter_m_owner_set($this->_cPtr,$value);
		if ($var === 'm_impl') return Filter_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_owner') return Filter_m_owner_get($this->_cPtr);
		if ($var === 'm_impl') return Filter_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Filter_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function AttachFilter($attach_filter) {
		Filter_AttachFilter($this->_cPtr,$attach_filter);
	}

	function ReleaseAttachedFilter() {
		$r=Filter_ReleaseAttachedFilter($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetAttachedFilter() {
		$r=Filter_GetAttachedFilter($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetSourceFilter() {
		$r=Filter_GetSourceFilter($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetName() {
		return Filter_GetName($this->_cPtr);
	}

	function GetDecodeName() {
		return Filter_GetDecodeName($this->_cPtr);
	}

	function Size() {
		return Filter_Size($this->_cPtr);
	}

	function Consume($num_bytes) {
		Filter_Consume($this->_cPtr,$num_bytes);
	}

	function Count() {
		return Filter_Count($this->_cPtr);
	}

	function SetCount($new_count) {
		return Filter_SetCount($this->_cPtr,$new_count);
	}

	function SetStreamLength($bytes) {
		Filter_SetStreamLength($this->_cPtr,$bytes);
	}

	function Flush() {
		Filter_Flush($this->_cPtr);
	}

	function FlushAll() {
		Filter_FlushAll($this->_cPtr);
	}

	function IsInputFilter() {
		return Filter_IsInputFilter($this->_cPtr);
	}

	function CanSeek() {
		return Filter_CanSeek($this->_cPtr);
	}

	const e_begin = Filter_e_begin;

	const e_end = Filter_e_end;

	const e_cur = Filter_e_cur;

	function Seek($offset,$origin) {
		Filter_Seek($this->_cPtr,$offset,$origin);
	}

	function Tell() {
		return Filter_Tell($this->_cPtr);
	}

	function CreateInputIterator() {
		$r=Filter_CreateInputIterator($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetFilePath() {
		return Filter_GetFilePath($this->_cPtr);
	}

	function Destroy() {
		Filter_Destroy($this->_cPtr);
	}

	function WriteToFile($path,$append) {
		Filter_WriteToFile($this->_cPtr,$path,$append);
	}

	function __construct($copy_or_impl=null,$is_owner=null) {
		if (is_resource($copy_or_impl) && get_resource_type($copy_or_impl) === '_p_pdftron__Filters__Filter') {
			$this->_cPtr=$copy_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Filter(); break;
		case 1: $this->_cPtr=new_Filter($copy_or_impl); break;
		default: $this->_cPtr=new_Filter($copy_or_impl,$is_owner);
		}
	}
}

class ASCII85Encode extends Filter {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Filter::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Filter::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Filter::__isset($var);
	}

	function __construct($input_filter,$line_width=72,$buf_sz=null) {
		if (is_resource($input_filter) && get_resource_type($input_filter) === '_p_pdftron__Filters__ASCII85Encode') {
			$this->_cPtr=$input_filter;
			return;
		}
		switch (func_num_args()) {
		case 1: case 2: $this->_cPtr=new_ASCII85Encode($input_filter,$line_width); break;
		default: $this->_cPtr=new_ASCII85Encode($input_filter,$line_width,$buf_sz);
		}
	}
}

class FilterReader {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return FilterReader_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return FilterReader_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('FilterReader_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($filter=null) {
		if (is_resource($filter) && get_resource_type($filter) === '_p_pdftron__Filters__FilterReader') {
			$this->_cPtr=$filter;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FilterReader(); break;
		default: $this->_cPtr=new_FilterReader($filter);
		}
	}

	function Get() {
		return FilterReader_Get($this->_cPtr);
	}

	function Peek() {
		return FilterReader_Peek($this->_cPtr);
	}

	function Read($buf_size) {
		$r=FilterReader_Read($this->_cPtr,$buf_size);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function AttachFilter($filter) {
		FilterReader_AttachFilter($this->_cPtr,$filter);
	}

	function GetAttachedFilter() {
		$r=FilterReader_GetAttachedFilter($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function Seek($offset,$origin) {
		FilterReader_Seek($this->_cPtr,$offset,$origin);
	}

	function Tell() {
		return FilterReader_Tell($this->_cPtr);
	}

	function Count() {
		return FilterReader_Count($this->_cPtr);
	}

	function Flush() {
		FilterReader_Flush($this->_cPtr);
	}

	function FlushAll() {
		FilterReader_FlushAll($this->_cPtr);
	}
}

class FilterWriter {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return FilterWriter_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return FilterWriter_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('FilterWriter_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($filter=null) {
		if (is_resource($filter) && get_resource_type($filter) === '_p_pdftron__Filters__FilterWriter') {
			$this->_cPtr=$filter;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FilterWriter(); break;
		default: $this->_cPtr=new_FilterWriter($filter);
		}
	}

	function WriteUChar($ch) {
		FilterWriter_WriteUChar($this->_cPtr,$ch);
	}

	function WriteInt16($num) {
		FilterWriter_WriteInt16($this->_cPtr,$num);
	}

	function WriteUInt16($num) {
		FilterWriter_WriteUInt16($this->_cPtr,$num);
	}

	function WriteInt32($num) {
		FilterWriter_WriteInt32($this->_cPtr,$num);
	}

	function WriteUInt32($num) {
		FilterWriter_WriteUInt32($this->_cPtr,$num);
	}

	function WriteInt64($num) {
		FilterWriter_WriteInt64($this->_cPtr,$num);
	}

	function WriteUInt64($num) {
		FilterWriter_WriteUInt64($this->_cPtr,$num);
	}

	function WriteString($str) {
		FilterWriter_WriteString($this->_cPtr,$str);
	}

	function WriteFilter($reader) {
		FilterWriter_WriteFilter($this->_cPtr,$reader);
	}

	function WriteLine($line,$eol=0x0D) {
		FilterWriter_WriteLine($this->_cPtr,$line,$eol);
	}

	function WriteBuffer($buf) {
		return FilterWriter_WriteBuffer($this->_cPtr,$buf);
	}

	function AttachFilter($filter) {
		FilterWriter_AttachFilter($this->_cPtr,$filter);
	}

	function GetAttachedFilter() {
		$r=FilterWriter_GetAttachedFilter($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function Seek($offset,$origin) {
		FilterWriter_Seek($this->_cPtr,$offset,$origin);
	}

	function Tell() {
		return FilterWriter_Tell($this->_cPtr);
	}

	function Count() {
		return FilterWriter_Count($this->_cPtr);
	}

	function Flush() {
		FilterWriter_Flush($this->_cPtr);
	}

	function FlushAll() {
		FilterWriter_FlushAll($this->_cPtr);
	}
}

class FlateEncode extends Filter {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Filter::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Filter::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Filter::__isset($var);
	}

	function __construct($input_filter,$compression_level=-1,$buf_sz=null) {
		if (is_resource($input_filter) && get_resource_type($input_filter) === '_p_pdftron__Filters__FlateEncode') {
			$this->_cPtr=$input_filter;
			return;
		}
		switch (func_num_args()) {
		case 1: case 2: $this->_cPtr=new_FlateEncode($input_filter,$compression_level); break;
		default: $this->_cPtr=new_FlateEncode($input_filter,$compression_level,$buf_sz);
		}
	}
}

class MappedFile extends Filter {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Filter::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Filter::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Filter::__isset($var);
	}

	function __construct($filename) {
		if (is_resource($filename) && get_resource_type($filename) === '_p_pdftron__Filters__MappedFile') {
			$this->_cPtr=$filename;
			return;
		}
		$this->_cPtr=new_MappedFile($filename);
	}

	function IsEqual($f) {
		return MappedFile_IsEqual($this->_cPtr,$f);
	}

	static function Equivalent($ph1,$ph2) {
		return MappedFile_Equivalent($ph1,$ph2);
	}

	function FileSize() {
		return MappedFile_FileSize($this->_cPtr);
	}
}

class MemoryFilter extends Filter {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Filter::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Filter::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Filter::__isset($var);
	}

	function __construct($buf_sz,$is_input=null) {
		if (is_resource($buf_sz) && get_resource_type($buf_sz) === '_p_pdftron__Filters__MemoryFilter') {
			$this->_cPtr=$buf_sz;
			return;
		}
		$this->_cPtr=new_MemoryFilter($buf_sz,$is_input);
	}

	function GetBuffer() {
		return MemoryFilter_GetBuffer($this->_cPtr);
	}

	function SetAsInputFilter() {
		MemoryFilter_SetAsInputFilter($this->_cPtr);
	}
}

class DictIterator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return DictIterator_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return DictIterator_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('DictIterator_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Next() {
		DictIterator_Next($this->_cPtr);
	}

	function Key() {
		$r=DictIterator_Key($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Value() {
		$r=DictIterator_Value($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function HasNext() {
		return DictIterator_HasNext($this->_cPtr);
	}

	function Destroy() {
		DictIterator_Destroy($this->_cPtr);
	}

	function __construct($c_or_impl) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__SDF__DictIterator') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		$this->_cPtr=new_DictIterator($c_or_impl);
	}
}

class SDFDoc {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_doc') return SDFDoc_mp_doc_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_doc') return SDFDoc_mp_doc_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('SDFDoc_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Close() {
		SDFDoc_Close($this->_cPtr);
	}

	function IsEncrypted() {
		return SDFDoc_IsEncrypted($this->_cPtr);
	}

	function InitSecurityHandler() {
		return SDFDoc_InitSecurityHandler($this->_cPtr);
	}

	function InitStdSecurityHandler($password_or_password_buf,$password_sz=null) {
		switch (func_num_args()) {
		case 1: $r=SDFDoc_InitStdSecurityHandler($this->_cPtr,$password_or_password_buf); break;
		default: $r=SDFDoc_InitStdSecurityHandler($this->_cPtr,$password_or_password_buf,$password_sz);
		}
		return $r;
	}

	function IsModified() {
		return SDFDoc_IsModified($this->_cPtr);
	}

	function HasRepairedXRef() {
		return SDFDoc_HasRepairedXRef($this->_cPtr);
	}

	function IsFullSaveRequired() {
		return SDFDoc_IsFullSaveRequired($this->_cPtr);
	}

	function GetTrailer() {
		$r=SDFDoc_GetTrailer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetObj($obj_num) {
		$r=SDFDoc_GetObj($this->_cPtr,$obj_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function ImportObj($obj,$deep_copy) {
		$r=SDFDoc_ImportObj($this->_cPtr,$obj,$deep_copy);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function ImportObjs($obj_list,$exclude_list=null) {
		switch (func_num_args()) {
		case 1: $r=SDFDoc_ImportObjs($this->_cPtr,$obj_list); break;
		default: $r=SDFDoc_ImportObjs($this->_cPtr,$obj_list,$exclude_list);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorObj($r);
		}
		return $r;
	}

	function XRefSize() {
		return SDFDoc_XRefSize($this->_cPtr);
	}

	function ClearMarks() {
		SDFDoc_ClearMarks($this->_cPtr);
	}

	const e_incremental = SDFDoc_e_incremental;

	const e_remove_unused = SDFDoc_e_remove_unused;

	const e_hex_strings = SDFDoc_e_hex_strings;

	const e_omit_xref = SDFDoc_e_omit_xref;

	const e_linearized = SDFDoc_e_linearized;

	const e_compatibility = SDFDoc_e_compatibility;

	function Save($path_or_flags_or_stream,$flags_or_header,$header=null) {
		switch (func_num_args()) {
		case 2: $r=SDFDoc_Save($this->_cPtr,$path_or_flags_or_stream,$flags_or_header); break;
		default: $r=SDFDoc_Save($this->_cPtr,$path_or_flags_or_stream,$flags_or_header,$header);
		}
		return $r;
	}

	function GetHeader() {
		return SDFDoc_GetHeader($this->_cPtr);
	}

	function GetSecurityHandler() {
		$r=SDFDoc_GetSecurityHandler($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SecurityHandler($r);
		}
		return $r;
	}

	function SetSecurityHandler($handler) {
		SDFDoc_SetSecurityHandler($this->_cPtr,$handler);
	}

	function RemoveSecurity() {
		SDFDoc_RemoveSecurity($this->_cPtr);
	}

	function Swap($obj_num1,$obj_num2) {
		SDFDoc_Swap($this->_cPtr,$obj_num1,$obj_num2);
	}

	function CreateIndirectName($name) {
		$r=SDFDoc_CreateIndirectName($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectArray() {
		$r=SDFDoc_CreateIndirectArray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectBool($value) {
		$r=SDFDoc_CreateIndirectBool($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectDict() {
		$r=SDFDoc_CreateIndirectDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectNull() {
		$r=SDFDoc_CreateIndirectNull($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectNumber($value) {
		$r=SDFDoc_CreateIndirectNumber($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectString($value_or_str,$size=null) {
		switch (func_num_args()) {
		case 1: $r=SDFDoc_CreateIndirectString($this->_cPtr,$value_or_str); break;
		default: $r=SDFDoc_CreateIndirectString($this->_cPtr,$value_or_str,$size);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectStream($data,$filter_chain_or_data_size=null,$filter_chain=null) {
		switch (func_num_args()) {
		case 1: $r=SDFDoc_CreateIndirectStream($this->_cPtr,$data); break;
		case 2: $r=SDFDoc_CreateIndirectStream($this->_cPtr,$data,$filter_chain_or_data_size); break;
		default: $r=SDFDoc_CreateIndirectStream($this->_cPtr,$data,$filter_chain_or_data_size,$filter_chain);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function IsLinearized() {
		return SDFDoc_IsLinearized($this->_cPtr);
	}

	function GetLinearizationDict() {
		$r=SDFDoc_GetLinearizationDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetHintStream() {
		$r=SDFDoc_GetHintStream($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Lock() {
		SDFDoc_Lock($this->_cPtr);
	}

	function Unlock() {
		SDFDoc_Unlock($this->_cPtr);
	}

	function TryLock($milliseconds=0) {
		return SDFDoc_TryLock($this->_cPtr,$milliseconds);
	}

	function LockRead() {
		SDFDoc_LockRead($this->_cPtr);
	}

	function UnlockRead() {
		SDFDoc_UnlockRead($this->_cPtr);
	}

	function TryLockRead($milliseconds=0) {
		return SDFDoc_TryLockRead($this->_cPtr,$milliseconds);
	}

	function GetFileName() {
		return SDFDoc_GetFileName($this->_cPtr);
	}

	function EnableDiskCaching($use_cache_flag) {
		SDFDoc_EnableDiskCaching($this->_cPtr,$use_cache_flag);
	}

	static function CreateInternal($impl) {
		$r=SDFDoc_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SDFDoc($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return SDFDoc_GetHandleInternal($this->_cPtr);
	}

	function __construct($filepath_or_stream_or_buf_or_doc=null,$buf_size=null) {
		if (is_resource($filepath_or_stream_or_buf_or_doc) && get_resource_type($filepath_or_stream_or_buf_or_doc) === '_p_pdftron__SDF__SDFDoc') {
			$this->_cPtr=$filepath_or_stream_or_buf_or_doc;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_SDFDoc(); break;
		case 1: $this->_cPtr=new_SDFDoc($filepath_or_stream_or_buf_or_doc); break;
		default: $this->_cPtr=new_SDFDoc($filepath_or_stream_or_buf_or_doc,$buf_size);
		}
	}
}

class NameTree {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc,$name) {
		$r=NameTree_Create($doc,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new NameTree($r);
		}
		return $r;
	}

	static function Find($doc,$name) {
		$r=NameTree_Find($doc,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new NameTree($r);
		}
		return $r;
	}

	function __construct($name_tree_or_d) {
		if (is_resource($name_tree_or_d) && get_resource_type($name_tree_or_d) === '_p_pdftron__SDF__NameTree') {
			$this->_cPtr=$name_tree_or_d;
			return;
		}
		$this->_cPtr=new_NameTree($name_tree_or_d);
	}

	function IsValid() {
		return NameTree_IsValid($this->_cPtr);
	}

	function GetIterator($key=null,$key_sz=null) {
		switch (func_num_args()) {
		case 0: $r=NameTree_GetIterator($this->_cPtr); break;
		case 1: $r=NameTree_GetIterator($this->_cPtr,$key); break;
		default: $r=NameTree_GetIterator($this->_cPtr,$key,$key_sz);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DictIterator($r);
		}
		return $r;
	}

	function GetValue($key,$key_sz) {
		$r=NameTree_GetValue($this->_cPtr,$key,$key_sz);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Put($key,$key_sz,$value) {
		NameTree_Put($this->_cPtr,$key,$key_sz,$value);
	}

	function Erase($key_or_pos,$key_sz=null) {
		switch (func_num_args()) {
		case 1: NameTree_Erase($this->_cPtr,$key_or_pos); break;
		default: NameTree_Erase($this->_cPtr,$key_or_pos,$key_sz);
		}
	}

	function GetSDFObj() {
		$r=NameTree_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class NumberTree {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($number_tree_or_d) {
		if (is_resource($number_tree_or_d) && get_resource_type($number_tree_or_d) === '_p_pdftron__SDF__NumberTree') {
			$this->_cPtr=$number_tree_or_d;
			return;
		}
		$this->_cPtr=new_NumberTree($number_tree_or_d);
	}

	function IsValid() {
		return NumberTree_IsValid($this->_cPtr);
	}

	function GetIterator($key=null) {
		switch (func_num_args()) {
		case 0: $r=NumberTree_GetIterator($this->_cPtr); break;
		default: $r=NumberTree_GetIterator($this->_cPtr,$key);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DictIterator($r);
		}
		return $r;
	}

	function GetValue($key) {
		$r=NumberTree_GetValue($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Put($key,$value) {
		NumberTree_Put($this->_cPtr,$key,$value);
	}

	function Erase($key_or_pos) {
		NumberTree_Erase($this->_cPtr,$key_or_pos);
	}

	function GetSDFObj() {
		$r=NumberTree_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class Obj {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_obj') return Obj_mp_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_obj') return Obj_mp_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Obj_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_null = 0;

	const e_bool = Obj_e_bool;

	const e_number = Obj_e_number;

	const e_name = Obj_e_name;

	const e_string = Obj_e_string;

	const e_dict = Obj_e_dict;

	const e_array = Obj_e_array;

	const e_stream = Obj_e_stream;

	function GetType() {
		return Obj_GetType($this->_cPtr);
	}

	function IsBool() {
		return Obj_IsBool($this->_cPtr);
	}

	function IsNumber() {
		return Obj_IsNumber($this->_cPtr);
	}

	function IsNull() {
		return Obj_IsNull($this->_cPtr);
	}

	function IsString() {
		return Obj_IsString($this->_cPtr);
	}

	function IsName() {
		return Obj_IsName($this->_cPtr);
	}

	function IsIndirect() {
		return Obj_IsIndirect($this->_cPtr);
	}

	function IsContainer() {
		return Obj_IsContainer($this->_cPtr);
	}

	function IsDict() {
		return Obj_IsDict($this->_cPtr);
	}

	function IsArray() {
		return Obj_IsArray($this->_cPtr);
	}

	function IsStream() {
		return Obj_IsStream($this->_cPtr);
	}

	function GetDoc() {
		$r=Obj_GetDoc($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SDFDoc($r);
		}
		return $r;
	}

	function Write($stream) {
		Obj_Write($this->_cPtr,$stream);
	}

	function Size() {
		return Obj_Size($this->_cPtr);
	}

	function GetObjNum() {
		return Obj_GetObjNum($this->_cPtr);
	}

	function GetGenNum() {
		return Obj_GetGenNum($this->_cPtr);
	}

	function GetOffset() {
		return Obj_GetOffset($this->_cPtr);
	}

	function IsFree() {
		return Obj_IsFree($this->_cPtr);
	}

	function SetMark($mark) {
		Obj_SetMark($this->_cPtr,$mark);
	}

	function IsMarked() {
		return Obj_IsMarked($this->_cPtr);
	}

	function IsLoaded() {
		return Obj_IsLoaded($this->_cPtr);
	}

	function IsValid() {
		return Obj_IsValid($this->_cPtr);
	}

	function GetBool() {
		return Obj_GetBool($this->_cPtr);
	}

	function SetBool($b) {
		Obj_SetBool($this->_cPtr,$b);
	}

	function GetNumber() {
		return Obj_GetNumber($this->_cPtr);
	}

	function SetNumber($n) {
		Obj_SetNumber($this->_cPtr,$n);
	}

	function GetBuffer() {
		$r=Obj_GetBuffer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function GetRawBuffer() {
		$r=Obj_GetRawBuffer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function GetAsPDFText() {
		return Obj_GetAsPDFText($this->_cPtr);
	}

	function SetString($value_or_str,$size=null) {
		switch (func_num_args()) {
		case 1: Obj_SetString($this->_cPtr,$value_or_str); break;
		default: Obj_SetString($this->_cPtr,$value_or_str,$size);
		}
	}

	function GetName() {
		return Obj_GetName($this->_cPtr);
	}

	function SetName($name) {
		Obj_SetName($this->_cPtr,$name);
	}

	function GetDictIterator() {
		$r=Obj_GetDictIterator($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DictIterator($r);
		}
		return $r;
	}

	function Find($key) {
		$r=Obj_Find($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DictIterator($r);
		}
		return $r;
	}

	function FindObj($key) {
		$r=Obj_FindObj($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Get($key) {
		$r=Obj_Get($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DictIterator($r);
		}
		return $r;
	}

	function PutName($key,$name) {
		$r=Obj_PutName($this->_cPtr,$key,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutArray($key) {
		$r=Obj_PutArray($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutBool($key,$value) {
		$r=Obj_PutBool($this->_cPtr,$key,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutDict($key) {
		$r=Obj_PutDict($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutNumber($key,$value) {
		$r=Obj_PutNumber($this->_cPtr,$key,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutString($key,$value,$size=null) {
		switch (func_num_args()) {
		case 2: $r=Obj_PutString($this->_cPtr,$key,$value); break;
		default: $r=Obj_PutString($this->_cPtr,$key,$value,$size);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutText($key,$value) {
		$r=Obj_PutText($this->_cPtr,$key,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutNull($key) {
		Obj_PutNull($this->_cPtr,$key);
	}

	function Put($key,$obj) {
		$r=Obj_Put($this->_cPtr,$key,$obj);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutRect($key,$x1,$y1,$x2,$y2) {
		$r=Obj_PutRect($this->_cPtr,$key,$x1,$y1,$x2,$y2);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PutMatrix($key,$value) {
		$r=Obj_PutMatrix($this->_cPtr,$key,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Erase($key_or_pos) {
		Obj_Erase($this->_cPtr,$key_or_pos);
	}

	function Rename($old_key,$new_key) {
		return Obj_Rename($this->_cPtr,$old_key,$new_key);
	}

	function GetAt($index) {
		$r=Obj_GetAt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertName($pos,$name) {
		$r=Obj_InsertName($this->_cPtr,$pos,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertArray($pos) {
		$r=Obj_InsertArray($this->_cPtr,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertBool($pos,$value) {
		$r=Obj_InsertBool($this->_cPtr,$pos,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertDict($pos) {
		$r=Obj_InsertDict($this->_cPtr,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertNumber($pos,$value) {
		$r=Obj_InsertNumber($this->_cPtr,$pos,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertString($pos,$value,$size=null) {
		switch (func_num_args()) {
		case 2: $r=Obj_InsertString($this->_cPtr,$pos,$value); break;
		default: $r=Obj_InsertString($this->_cPtr,$pos,$value,$size);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertText($pos,$value) {
		$r=Obj_InsertText($this->_cPtr,$pos,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertNull($pos) {
		$r=Obj_InsertNull($this->_cPtr,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Insert($pos,$obj) {
		$r=Obj_Insert($this->_cPtr,$pos,$obj);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertRect($pos,$x1,$y1,$x2,$y2) {
		$r=Obj_InsertRect($this->_cPtr,$pos,$x1,$y1,$x2,$y2);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function InsertMatrix($pos,$value) {
		$r=Obj_InsertMatrix($this->_cPtr,$pos,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackName($name) {
		$r=Obj_PushBackName($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackArray() {
		$r=Obj_PushBackArray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackBool($value) {
		$r=Obj_PushBackBool($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackDict() {
		$r=Obj_PushBackDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackNumber($value) {
		$r=Obj_PushBackNumber($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackString($value,$size=null) {
		switch (func_num_args()) {
		case 1: $r=Obj_PushBackString($this->_cPtr,$value); break;
		default: $r=Obj_PushBackString($this->_cPtr,$value,$size);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackText($value) {
		$r=Obj_PushBackText($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackNull() {
		$r=Obj_PushBackNull($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBack($obj) {
		$r=Obj_PushBack($this->_cPtr,$obj);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackRect($x1,$y1,$x2,$y2) {
		$r=Obj_PushBackRect($this->_cPtr,$x1,$y1,$x2,$y2);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function PushBackMatrix($value) {
		$r=Obj_PushBackMatrix($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function EraseAt($pos) {
		Obj_EraseAt($this->_cPtr,$pos);
	}

	function GetRawStreamLength() {
		return Obj_GetRawStreamLength($this->_cPtr);
	}

	function GetRawStream($decrypt) {
		$r=Obj_GetRawStream($this->_cPtr,$decrypt);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetDecodedStream() {
		$r=Obj_GetDecodedStream($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function SetStreamData($data,$data_size,$filter_chain=null) {
		switch (func_num_args()) {
		case 2: Obj_SetStreamData($this->_cPtr,$data,$data_size); break;
		default: Obj_SetStreamData($this->_cPtr,$data,$data_size,$filter_chain);
		}
	}

	function IsEqual($to) {
		return Obj_IsEqual($this->_cPtr,$to);
	}

	static function CreateInternal($impl) {
		$r=Obj_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return Obj_GetHandleInternal($this->_cPtr);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__SDF__Obj') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Obj(); break;
		default: $this->_cPtr=new_Obj($c_or_impl);
		}
	}
}

class ObjSet {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__SDF__ObjSet') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ObjSet();
	}

	function CreateName($name) {
		$r=ObjSet_CreateName($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateArray() {
		$r=ObjSet_CreateArray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateBool($value) {
		$r=ObjSet_CreateBool($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateDict() {
		$r=ObjSet_CreateDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateNull() {
		$r=ObjSet_CreateNull($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateNumber($value) {
		$r=ObjSet_CreateNumber($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateString($value) {
		$r=ObjSet_CreateString($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateFromJson($value) {
		$r=ObjSet_CreateFromJson($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Destroy() {
		ObjSet_Destroy($this->_cPtr);
	}
}

class DocSnapshot {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return DocSnapshot_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return DocSnapshot_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('DocSnapshot_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		DocSnapshot_Destroy($this->_cPtr);
	}

	function GetHash() {
		return DocSnapshot_GetHash($this->_cPtr);
	}

	function IsValid() {
		return DocSnapshot_IsValid($this->_cPtr);
	}

	function Equals($snapshot) {
		return DocSnapshot_Equals($this->_cPtr,$snapshot);
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__SDF__DocSnapshot') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_DocSnapshot(); break;
		default: $this->_cPtr=new_DocSnapshot($other_or_impl);
		}
	}
}

class ResultSnapshot {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return ResultSnapshot_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return ResultSnapshot_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ResultSnapshot_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		ResultSnapshot_Destroy($this->_cPtr);
	}

	function CurrentState() {
		$r=ResultSnapshot_CurrentState($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocSnapshot($r);
		}
		return $r;
	}

	function PreviousState() {
		$r=ResultSnapshot_PreviousState($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocSnapshot($r);
		}
		return $r;
	}

	function IsOk() {
		return ResultSnapshot_IsOk($this->_cPtr);
	}

	function IsNullTransition() {
		return ResultSnapshot_IsNullTransition($this->_cPtr);
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__SDF__ResultSnapshot') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ResultSnapshot(); break;
		default: $this->_cPtr=new_ResultSnapshot($other_or_impl);
		}
	}
}

class UndoManager {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return UndoManager_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return UndoManager_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('UndoManager_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		UndoManager_Destroy($this->_cPtr);
	}

	function DiscardAllSnapshots() {
		$r=UndoManager_DiscardAllSnapshots($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocSnapshot($r);
		}
		return $r;
	}

	function Undo() {
		$r=UndoManager_Undo($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ResultSnapshot($r);
		}
		return $r;
	}

	function CanUndo() {
		return UndoManager_CanUndo($this->_cPtr);
	}

	function GetNextUndoSnapshot() {
		$r=UndoManager_GetNextUndoSnapshot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocSnapshot($r);
		}
		return $r;
	}

	function Redo() {
		$r=UndoManager_Redo($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ResultSnapshot($r);
		}
		return $r;
	}

	function CanRedo() {
		return UndoManager_CanRedo($this->_cPtr);
	}

	function GetNextRedoSnapshot() {
		$r=UndoManager_GetNextRedoSnapshot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocSnapshot($r);
		}
		return $r;
	}

	function TakeSnapshot() {
		$r=UndoManager_TakeSnapshot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ResultSnapshot($r);
		}
		return $r;
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__SDF__UndoManager') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_UndoManager(); break;
		default: $this->_cPtr=new_UndoManager($other_or_impl);
		}
	}
}

class SecurityHandler {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'SecurityHandler_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'SecurityHandler_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('SecurityHandler_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_owner = 1;

	const e_doc_open = SecurityHandler_e_doc_open;

	const e_doc_modify = SecurityHandler_e_doc_modify;

	const e_print = SecurityHandler_e_print;

	const e_print_high = SecurityHandler_e_print_high;

	const e_extract_content = SecurityHandler_e_extract_content;

	const e_mod_annot = SecurityHandler_e_mod_annot;

	const e_fill_forms = SecurityHandler_e_fill_forms;

	const e_access_support = SecurityHandler_e_access_support;

	const e_assemble_doc = SecurityHandler_e_assemble_doc;

	function GetPermission($p) {
		return SecurityHandler_GetPermission($this->_cPtr,$p);
	}

	function GetKeyLength() {
		return SecurityHandler_GetKeyLength($this->_cPtr);
	}

	function GetEncryptionAlgorithmID() {
		return SecurityHandler_GetEncryptionAlgorithmID($this->_cPtr);
	}

	function GetHandlerDocName() {
		return SecurityHandler_GetHandlerDocName($this->_cPtr);
	}

	function IsModified() {
		return SecurityHandler_IsModified($this->_cPtr);
	}

	function IsValid() {
		return SecurityHandler_IsValid($this->_cPtr);
	}

	function SetModified($is_modified=true) {
		SecurityHandler_SetModified($this->_cPtr,$is_modified);
	}

	const e_RC4_40 = 1;

	const e_RC4_128 = SecurityHandler_e_RC4_128;

	const e_AES = SecurityHandler_e_AES;

	const e_AES_256 = SecurityHandler_e_AES_256;

	function ChangeUserPasswordASCII($password) {
		SecurityHandler_ChangeUserPasswordASCII($this->_cPtr,$password);
	}

	function ChangeUserPassword($password_or_password_buf,$pwd_length=null) {
		switch (func_num_args()) {
		case 1: SecurityHandler_ChangeUserPassword($this->_cPtr,$password_or_password_buf); break;
		default: SecurityHandler_ChangeUserPassword($this->_cPtr,$password_or_password_buf,$pwd_length);
		}
	}

	function GetUserPassword() {
		return SecurityHandler_GetUserPassword($this->_cPtr);
	}

	function GetUserPasswordSize() {
		return SecurityHandler_GetUserPasswordSize($this->_cPtr);
	}

	function ChangeMasterPasswordASCII($password) {
		SecurityHandler_ChangeMasterPasswordASCII($this->_cPtr,$password);
	}

	function ChangeMasterPassword($password_or_password_buf,$pwd_length=null) {
		switch (func_num_args()) {
		case 1: SecurityHandler_ChangeMasterPassword($this->_cPtr,$password_or_password_buf); break;
		default: SecurityHandler_ChangeMasterPassword($this->_cPtr,$password_or_password_buf,$pwd_length);
		}
	}

	function GetMasterPassword() {
		return SecurityHandler_GetMasterPassword($this->_cPtr);
	}

	function GetMasterPasswordSize() {
		return SecurityHandler_GetMasterPasswordSize($this->_cPtr);
	}

	function SetPermission($perm,$value) {
		SecurityHandler_SetPermission($this->_cPtr,$perm,$value);
	}

	function ChangeRevisionNumber($rev_num) {
		SecurityHandler_ChangeRevisionNumber($this->_cPtr,$rev_num);
	}

	function SetEncryptMetadata($encrypt_metadata) {
		SecurityHandler_SetEncryptMetadata($this->_cPtr,$encrypt_metadata);
	}

	function GetRevisionNumber() {
		return SecurityHandler_GetRevisionNumber($this->_cPtr);
	}

	function IsUserPasswordRequired() {
		return SecurityHandler_IsUserPasswordRequired($this->_cPtr);
	}

	function IsMasterPasswordRequired() {
		return SecurityHandler_IsMasterPasswordRequired($this->_cPtr);
	}

	function IsAES($stream=null) {
		switch (func_num_args()) {
		case 0: $r=SecurityHandler_IsAES($this->_cPtr); break;
		default: $r=SecurityHandler_IsAES($this->_cPtr,$stream);
		}
		return $r;
	}

	function IsRC4() {
		return SecurityHandler_IsRC4($this->_cPtr);
	}

	function AuthorizeFailed() {
		SecurityHandler_AuthorizeFailed($this->_cPtr);
	}

	function Authorize($p) {
		return SecurityHandler_Authorize($this->_cPtr,$p);
	}

	function GetAuthorizationData($req_opr) {
		return SecurityHandler_GetAuthorizationData($this->_cPtr,$req_opr);
	}

	function EditSecurityData($doc) {
		return SecurityHandler_EditSecurityData($this->_cPtr,$doc);
	}

	function FillEncryptDict($doc) {
		$r=SecurityHandler_FillEncryptDict($this->_cPtr,$doc);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CloneHandler($base) {
		$r=SecurityHandler_CloneHandler($this->_cPtr,$base);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SecurityHandler($r);
		}
		return $r;
	}

	function InitPasswordASCII($password) {
		SecurityHandler_InitPasswordASCII($this->_cPtr,$password);
	}

	function InitPassword($password_or_password_buf,$pwd_length=null) {
		switch (func_num_args()) {
		case 1: SecurityHandler_InitPassword($this->_cPtr,$password_or_password_buf); break;
		default: SecurityHandler_InitPassword($this->_cPtr,$password_or_password_buf,$pwd_length);
		}
	}

	const has_CloneProc = SecurityHandler_has_CloneProc;

	const has_AuthProc = SecurityHandler_has_AuthProc;

	const has_AuthFailedProc = SecurityHandler_has_AuthFailedProc;

	const has_GetAuthDataProc = SecurityHandler_has_GetAuthDataProc;

	const has_EditSecurDataProc = SecurityHandler_has_EditSecurDataProc;

	const has_FillEncDictProc = SecurityHandler_has_FillEncDictProc;

	function SetDerived($overloaded_funct) {
		SecurityHandler_SetDerived($this->_cPtr,$overloaded_funct);
	}

	function GetDerived() {
		$r=SecurityHandler_GetDerived($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SecurityHandler($r);
		}
		return $r;
	}

	function __construct($crypt_type_or_name_or_s_or_impl=null,$key_len_or_owner=null,$enc_code_or_derived_procs=null) {
		if (is_resource($crypt_type_or_name_or_s_or_impl) && get_resource_type($crypt_type_or_name_or_s_or_impl) === '_p_pdftron__SDF__SecurityHandler') {
			$this->_cPtr=$crypt_type_or_name_or_s_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_SecurityHandler(); break;
		case 1: $this->_cPtr=new_SecurityHandler($crypt_type_or_name_or_s_or_impl); break;
		case 2: $this->_cPtr=new_SecurityHandler($crypt_type_or_name_or_s_or_impl,$key_len_or_owner); break;
		default: $this->_cPtr=new_SecurityHandler($crypt_type_or_name_or_s_or_impl,$key_len_or_owner,$enc_code_or_derived_procs);
		}
	}
}

class PDFTronCustomSecurityHandler extends SecurityHandler {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		SecurityHandler::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return SecurityHandler::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return SecurityHandler::__isset($var);
	}

	function __construct($custom_id) {
		if (is_resource($custom_id) && get_resource_type($custom_id) === '_p_pdftron__SDF__PDFTronCustomSecurityHandler') {
			$this->_cPtr=$custom_id;
			return;
		}
		$this->_cPtr=new_PDFTronCustomSecurityHandler($custom_id);
	}
}

class Point extends TRN_point {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TRN_point::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TRN_point::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TRN_point::__isset($var);
	}

	function __construct($px=null,$py=null) {
		if (is_resource($px) && get_resource_type($px) === '_p_pdftron__PDF__Point') {
			$this->_cPtr=$px;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Point(); break;
		case 1: $this->_cPtr=new_Point($px); break;
		default: $this->_cPtr=new_Point($px,$py);
		}
	}
}

class PDFFunction {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_func') return PDFFunction_mp_func_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_func') return PDFFunction_mp_func_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFFunction_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_sampled = 0;

	const e_exponential = 2;

	const e_stitching = 3;

	const e_postscript = 4;

	function GetType() {
		return PDFFunction_GetType($this->_cPtr);
	}

	function GetInputCardinality() {
		return PDFFunction_GetInputCardinality($this->_cPtr);
	}

	function GetOutputCardinality() {
		return PDFFunction_GetOutputCardinality($this->_cPtr);
	}

	function EvalFunction($in_arr) {
		$r=PDFFunction_EvalFunction($this->_cPtr,$in_arr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=PDFFunction_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Destroy() {
		PDFFunction_Destroy($this->_cPtr);
	}

	function __construct($funct_dict_or_f_or_impl=null) {
		if (is_resource($funct_dict_or_f_or_impl) && get_resource_type($funct_dict_or_f_or_impl) === '_p_pdftron__PDF__PDFFunction') {
			$this->_cPtr=$funct_dict_or_f_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PDFFunction(); break;
		default: $this->_cPtr=new_PDFFunction($funct_dict_or_f_or_impl);
		}
	}
}

class ColorPt {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_c') return ColorPt_m_c_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_c') return ColorPt_m_c_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ColorPt_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($x_or_co=null,$y=null,$z=null,$w=null) {
		if (is_resource($x_or_co) && get_resource_type($x_or_co) === '_p_pdftron__PDF__ColorPt') {
			$this->_cPtr=$x_or_co;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ColorPt(); break;
		case 1: $this->_cPtr=new_ColorPt($x_or_co); break;
		case 2: $this->_cPtr=new_ColorPt($x_or_co,$y); break;
		case 3: $this->_cPtr=new_ColorPt($x_or_co,$y,$z); break;
		default: $this->_cPtr=new_ColorPt($x_or_co,$y,$z,$w);
		}
	}

	function IsEqual($co) {
		return ColorPt_IsEqual($this->_cPtr,$co);
	}

	function Set($x_or_colorant_index=null,$y_or_colorant_value=null,$z=null,$w=null) {
		switch (func_num_args()) {
		case 0: ColorPt_Set($this->_cPtr); break;
		case 1: ColorPt_Set($this->_cPtr,$x_or_colorant_index); break;
		case 2: ColorPt_Set($this->_cPtr,$x_or_colorant_index,$y_or_colorant_value); break;
		case 3: ColorPt_Set($this->_cPtr,$x_or_colorant_index,$y_or_colorant_value,$z); break;
		default: ColorPt_Set($this->_cPtr,$x_or_colorant_index,$y_or_colorant_value,$z,$w);
		}
	}

	function Get($colorant_index) {
		return ColorPt_Get($this->_cPtr,$colorant_index);
	}

	function SetColorantNum($num) {
		ColorPt_SetColorantNum($this->_cPtr,$num);
	}

	function Destroy() {
		ColorPt_Destroy($this->_cPtr);
	}
}

class ColorSpace {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_cs') return ColorSpace_mp_cs_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_cs') return ColorSpace_mp_cs_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ColorSpace_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function CreateDeviceGray() {
		$r=ColorSpace_CreateDeviceGray();
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	static function CreateDeviceRGB() {
		$r=ColorSpace_CreateDeviceRGB();
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	static function CreateDeviceCMYK() {
		$r=ColorSpace_CreateDeviceCMYK();
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	static function CreatePattern() {
		$r=ColorSpace_CreatePattern();
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	static function CreateICC($doc,$filepath_or_stm_or_buf,$buf_sz=null) {
		switch (func_num_args()) {
		case 2: $r=ColorSpace_CreateICC($doc,$filepath_or_stm_or_buf); break;
		default: $r=ColorSpace_CreateICC($doc,$filepath_or_stm_or_buf,$buf_sz);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	const e_device_gray = 0;

	const e_device_rgb = ColorSpace_e_device_rgb;

	const e_device_cmyk = ColorSpace_e_device_cmyk;

	const e_cal_gray = ColorSpace_e_cal_gray;

	const e_cal_rgb = ColorSpace_e_cal_rgb;

	const e_lab = ColorSpace_e_lab;

	const e_icc = ColorSpace_e_icc;

	const e_indexed = ColorSpace_e_indexed;

	const e_pattern = ColorSpace_e_pattern;

	const e_separation = ColorSpace_e_separation;

	const e_device_n = ColorSpace_e_device_n;

	const e_null = ColorSpace_e_null;

	function GetType() {
		return ColorSpace_GetType($this->_cPtr);
	}

	function GetSDFObj() {
		$r=ColorSpace_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetComponentNum() {
		return ColorSpace_GetComponentNum($this->_cPtr);
	}

	function InitColor($out_colorants) {
		ColorSpace_InitColor($this->_cPtr,$out_colorants);
	}

	function InitComponentRanges($out_decode_low,$out_decode_range) {
		ColorSpace_InitComponentRanges($this->_cPtr,$out_decode_low,$out_decode_range);
	}

	function Convert2Gray($in_color) {
		$r=ColorSpace_Convert2Gray($this->_cPtr,$in_color);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function Convert2RGB($in_color) {
		$r=ColorSpace_Convert2RGB($this->_cPtr,$in_color);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function Convert2CMYK($in_color) {
		$r=ColorSpace_Convert2CMYK($this->_cPtr,$in_color);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetAlternateColorSpace() {
		$r=ColorSpace_GetAlternateColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function GetBaseColorSpace() {
		$r=ColorSpace_GetBaseColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function GetHighVal() {
		return ColorSpace_GetHighVal($this->_cPtr);
	}

	function GetBaseColor($color_idx) {
		$r=ColorSpace_GetBaseColor($this->_cPtr,$color_idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function IsNone() {
		return ColorSpace_IsNone($this->_cPtr);
	}

	function IsAll() {
		return ColorSpace_IsAll($this->_cPtr);
	}

	function GetTintFunction() {
		return ColorSpace_GetTintFunction($this->_cPtr);
	}

	function Destroy() {
		ColorSpace_Destroy($this->_cPtr);
	}

	function __construct($color_space_or_c_or_impl=null) {
		if (is_resource($color_space_or_c_or_impl) && get_resource_type($color_space_or_c_or_impl) === '_p_pdftron__PDF__ColorSpace') {
			$this->_cPtr=$color_space_or_c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ColorSpace(); break;
		default: $this->_cPtr=new_ColorSpace($color_space_or_c_or_impl);
		}
	}
}

class Rect extends TRN_rect {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TRN_rect::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TRN_rect::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TRN_rect::__isset($var);
	}

	function __construct($rect_or_x1=null,$y1=null,$x2=null,$y2=null) {
		if (is_resource($rect_or_x1) && get_resource_type($rect_or_x1) === '_p_pdftron__PDF__Rect') {
			$this->_cPtr=$rect_or_x1;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Rect(); break;
		case 1: $this->_cPtr=new_Rect($rect_or_x1); break;
		case 2: $this->_cPtr=new_Rect($rect_or_x1,$y1); break;
		case 3: $this->_cPtr=new_Rect($rect_or_x1,$y1,$x2); break;
		default: $this->_cPtr=new_Rect($rect_or_x1,$y1,$x2,$y2);
		}
	}

	function Attach($obj) {
		Rect_Attach($this->_cPtr,$obj);
	}

	function Update($obj=null) {
		switch (func_num_args()) {
		case 0: $r=Rect_Update($this->_cPtr); break;
		default: $r=Rect_Update($this->_cPtr,$obj);
		}
		return $r;
	}

	function Set($x1,$y1,$x2,$y2) {
		Rect_Set($this->_cPtr,$x1,$y1,$x2,$y2);
	}

	function Width() {
		return Rect_Width($this->_cPtr);
	}

	function Height() {
		return Rect_Height($this->_cPtr);
	}

	function Contains($x,$y) {
		return Rect_Contains($this->_cPtr,$x,$y);
	}

	function IntersectRect($rect1,$rect2) {
		return Rect_IntersectRect($this->_cPtr,$rect1,$rect2);
	}

	function Normalize() {
		Rect_Normalize($this->_cPtr);
	}

	function Inflate($amount_or_x,$y=null) {
		switch (func_num_args()) {
		case 1: Rect_Inflate($this->_cPtr,$amount_or_x); break;
		default: Rect_Inflate($this->_cPtr,$amount_or_x,$y);
		}
	}

	function GetX1() {
		return Rect_GetX1($this->_cPtr);
	}

	function GetY1() {
		return Rect_GetY1($this->_cPtr);
	}

	function GetX2() {
		return Rect_GetX2($this->_cPtr);
	}

	function GetY2() {
		return Rect_GetY2($this->_cPtr);
	}

	function SetX1($x1) {
		Rect_SetX1($this->_cPtr,$x1);
	}

	function SetY1($y1) {
		Rect_SetY1($this->_cPtr,$y1);
	}

	function SetX2($x2) {
		Rect_SetX2($this->_cPtr,$x2);
	}

	function SetY2($y2) {
		Rect_SetY2($this->_cPtr,$y2);
	}
}

class RectCollection {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__RectCollection') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_RectCollection();
	}

	function AddRect($to_add) {
		RectCollection_AddRect($this->_cPtr,$to_add);
	}

	function GetRectAt($index) {
		$r=RectCollection_GetRectAt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetNumRects() {
		return RectCollection_GetNumRects($this->_cPtr);
	}

	function Clear() {
		RectCollection_Clear($this->_cPtr);
	}
}

class Page {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_page') return Page_mp_page_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_page') return Page_mp_page_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Page_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function IsValid() {
		return Page_IsValid($this->_cPtr);
	}

	function GetIndex() {
		return Page_GetIndex($this->_cPtr);
	}

	const e_media = 0;

	const e_crop = Page_e_crop;

	const e_bleed = Page_e_bleed;

	const e_trim = Page_e_trim;

	const e_art = Page_e_art;

	const e_user_crop = Page_e_user_crop;

	function GetBox($type) {
		$r=Page_GetBox($this->_cPtr,$type);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function SetBox($type,$box) {
		Page_SetBox($this->_cPtr,$type,$box);
	}

	function GetCropBox() {
		$r=Page_GetCropBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function SetCropBox($box) {
		Page_SetCropBox($this->_cPtr,$box);
	}

	function GetMediaBox() {
		$r=Page_GetMediaBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function SetMediaBox($box) {
		Page_SetMediaBox($this->_cPtr,$box);
	}

	function GetVisibleContentBox() {
		$r=Page_GetVisibleContentBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	const e_0 = 0;

	const e_90 = Page_e_90;

	const e_180 = Page_e_180;

	const e_270 = Page_e_270;

	static function AddRotations($r0,$r1) {
		return Page_AddRotations($r0,$r1);
	}

	static function SubtractRotations($r0,$r1) {
		return Page_SubtractRotations($r0,$r1);
	}

	static function RotationToDegree($r_) {
		return Page_RotationToDegree($r_);
	}

	static function DegreeToRotation($r_) {
		return Page_DegreeToRotation($r_);
	}

	function GetRotation() {
		return Page_GetRotation($this->_cPtr);
	}

	function SetRotation($angle) {
		Page_SetRotation($this->_cPtr,$angle);
	}

	function GetPageWidth($box_type=null) {
		switch (func_num_args()) {
		case 0: $r=Page_GetPageWidth($this->_cPtr); break;
		default: $r=Page_GetPageWidth($this->_cPtr,$box_type);
		}
		return $r;
	}

	function GetPageHeight($box_type=null) {
		switch (func_num_args()) {
		case 0: $r=Page_GetPageHeight($this->_cPtr); break;
		default: $r=Page_GetPageHeight($this->_cPtr,$box_type);
		}
		return $r;
	}

	function GetDefaultMatrix($flip_y=false,$box_type=null,$angle=null) {
		switch (func_num_args()) {
		case 0: case 1: $r=Page_GetDefaultMatrix($this->_cPtr,$flip_y); break;
		case 2: $r=Page_GetDefaultMatrix($this->_cPtr,$flip_y,$box_type); break;
		default: $r=Page_GetDefaultMatrix($this->_cPtr,$flip_y,$box_type,$angle);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetAnnots() {
		$r=Page_GetAnnots($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetNumAnnots() {
		return Page_GetNumAnnots($this->_cPtr);
	}

	function GetAnnot($index) {
		$r=Page_GetAnnot($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	const e_action_trigger_page_open = 11;

	const e_action_trigger_page_close = 12;

	function GetTriggerAction($trigger) {
		$r=Page_GetTriggerAction($this->_cPtr,$trigger);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function AnnotInsert($pos,$annot) {
		Page_AnnotInsert($this->_cPtr,$pos,$annot);
	}

	function AnnotPushBack($annot) {
		Page_AnnotPushBack($this->_cPtr,$annot);
	}

	function AnnotPushFront($annot) {
		Page_AnnotPushFront($this->_cPtr,$annot);
	}

	function AnnotRemove($annot_or_index) {
		Page_AnnotRemove($this->_cPtr,$annot_or_index);
	}

	function Scale($scale) {
		Page_Scale($this->_cPtr,$scale);
	}

	function FlattenField($field_to_flatten) {
		Page_FlattenField($this->_cPtr,$field_to_flatten);
	}

	function HasTransition() {
		return Page_HasTransition($this->_cPtr);
	}

	function GetUserUnitSize() {
		return Page_GetUserUnitSize($this->_cPtr);
	}

	function SetUserUnitSize($unit_size) {
		Page_SetUserUnitSize($this->_cPtr,$unit_size);
	}

	function GetResourceDict() {
		$r=Page_GetResourceDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetContents() {
		$r=Page_GetContents($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=Page_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function FindInheritedAttribute($attrib) {
		$r=Page_FindInheritedAttribute($this->_cPtr,$attrib);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetThumb() {
		$r=Page_GetThumb($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($page_dict_or_p_or_impl=null) {
		if (is_resource($page_dict_or_p_or_impl) && get_resource_type($page_dict_or_p_or_impl) === '_p_pdftron__PDF__Page') {
			$this->_cPtr=$page_dict_or_p_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Page(); break;
		default: $this->_cPtr=new_Page($page_dict_or_p_or_impl);
		}
	}
}

class Date extends TRN_date {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TRN_date::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TRN_date::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TRN_date::__isset($var);
	}

	function __construct($d_or_year=null,$month=null,$day=null,$hour=null,$minute=null,$second=null) {
		if (is_resource($d_or_year) && get_resource_type($d_or_year) === '_p_pdftron__PDF__Date') {
			$this->_cPtr=$d_or_year;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Date(); break;
		case 1: $this->_cPtr=new_Date($d_or_year); break;
		case 2: $this->_cPtr=new_Date($d_or_year,$month); break;
		case 3: $this->_cPtr=new_Date($d_or_year,$month,$day); break;
		case 4: $this->_cPtr=new_Date($d_or_year,$month,$day,$hour); break;
		case 5: $this->_cPtr=new_Date($d_or_year,$month,$day,$hour,$minute); break;
		default: $this->_cPtr=new_Date($d_or_year,$month,$day,$hour,$minute,$second);
		}
	}

	function IsValid() {
		return Date_IsValid($this->_cPtr);
	}

	function SetCurrentTime() {
		Date_SetCurrentTime($this->_cPtr);
	}

	function Attach($d) {
		Date_Attach($this->_cPtr,$d);
	}

	function Update($d=null) {
		switch (func_num_args()) {
		case 0: $r=Date_Update($this->_cPtr); break;
		default: $r=Date_Update($this->_cPtr,$d);
		}
		return $r;
	}

	function GetYear() {
		return Date_GetYear($this->_cPtr);
	}

	function GetMonth() {
		return Date_GetMonth($this->_cPtr);
	}

	function GetDay() {
		return Date_GetDay($this->_cPtr);
	}

	function GetHour() {
		return Date_GetHour($this->_cPtr);
	}

	function GetMinute() {
		return Date_GetMinute($this->_cPtr);
	}

	function GetSecond() {
		return Date_GetSecond($this->_cPtr);
	}

	function GetUT() {
		return Date_GetUT($this->_cPtr);
	}

	function GetUTHour() {
		return Date_GetUTHour($this->_cPtr);
	}

	function GetUTMin() {
		return Date_GetUTMin($this->_cPtr);
	}
}

class Field {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_field') return Field_mp_field_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_field') return Field_mp_field_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Field_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function IsValid() {
		return Field_IsValid($this->_cPtr);
	}

	const e_button = 0;

	const e_check = Field_e_check;

	const e_radio = Field_e_radio;

	const e_text = Field_e_text;

	const e_choice = Field_e_choice;

	const e_signature = Field_e_signature;

	const e_null = Field_e_null;

	function GetType() {
		return Field_GetType($this->_cPtr);
	}

	function GetValue() {
		$r=Field_GetValue($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetValueAsString() {
		return Field_GetValueAsString($this->_cPtr);
	}

	function GetValueAsBool() {
		return Field_GetValueAsBool($this->_cPtr);
	}

	const e_action_trigger_keystroke = 13;

	const e_action_trigger_format = 14;

	const e_action_trigger_validate = 15;

	const e_action_trigger_calculate = 16;

	function SetValue($value) {
		return Field_SetValue($this->_cPtr,$value);
	}

	function GetTriggerAction($trigger) {
		$r=Field_GetTriggerAction($this->_cPtr,$trigger);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function RefreshAppearance() {
		Field_RefreshAppearance($this->_cPtr);
	}

	function EraseAppearance() {
		Field_EraseAppearance($this->_cPtr);
	}

	function GetDefaultValue() {
		$r=Field_GetDefaultValue($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetDefaultValueAsString() {
		return Field_GetDefaultValueAsString($this->_cPtr);
	}

	function GetName() {
		return Field_GetName($this->_cPtr);
	}

	function GetPartialName() {
		return Field_GetPartialName($this->_cPtr);
	}

	function Rename($field_name) {
		Field_Rename($this->_cPtr,$field_name);
	}

	function IsAnnot() {
		return Field_IsAnnot($this->_cPtr);
	}

	const e_read_only = 0;

	const e_required = Field_e_required;

	const e_no_export = Field_e_no_export;

	const e_pushbutton_flag = Field_e_pushbutton_flag;

	const e_radio_flag = Field_e_radio_flag;

	const e_toggle_to_off = Field_e_toggle_to_off;

	const e_radios_in_unison = Field_e_radios_in_unison;

	const e_multiline = Field_e_multiline;

	const e_password = Field_e_password;

	const e_file_select = Field_e_file_select;

	const e_no_spellcheck = Field_e_no_spellcheck;

	const e_no_scroll = Field_e_no_scroll;

	const e_comb = Field_e_comb;

	const e_rich_text = Field_e_rich_text;

	const e_combo = Field_e_combo;

	const e_edit = Field_e_edit;

	const e_sort = Field_e_sort;

	const e_multiselect = Field_e_multiselect;

	const e_commit_on_sel_change = Field_e_commit_on_sel_change;

	function GetFlag($flag) {
		return Field_GetFlag($this->_cPtr,$flag);
	}

	function SetFlag($flag,$value) {
		Field_SetFlag($this->_cPtr,$flag,$value);
	}

	const e_left_justified = 0;

	const e_centered = Field_e_centered;

	const e_right_justified = Field_e_right_justified;

	function GetJustification() {
		return Field_GetJustification($this->_cPtr);
	}

	function SetJustification($j) {
		Field_SetJustification($this->_cPtr,$j);
	}

	function SetMaxLen($max_len) {
		Field_SetMaxLen($this->_cPtr,$max_len);
	}

	function GetOptCount() {
		return Field_GetOptCount($this->_cPtr);
	}

	function GetOpt($index) {
		return Field_GetOpt($this->_cPtr,$index);
	}

	function GetMaxLen() {
		return Field_GetMaxLen($this->_cPtr);
	}

	function GetDefaultAppearance() {
		return Field_GetDefaultAppearance($this->_cPtr);
	}

	function Flatten($page) {
		Field_Flatten($this->_cPtr,$page);
	}

	function GetUpdateRect() {
		$r=Field_GetUpdateRect($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function FindInheritedAttribute($attrib) {
		$r=Field_FindInheritedAttribute($this->_cPtr,$attrib);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=Field_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Destroy() {
		Field_Destroy($this->_cPtr);
	}

	function UseSignatureHandler($signature_handler_id) {
		$r=Field_UseSignatureHandler($this->_cPtr,$signature_handler_id);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function IsLockedByDigitalSignature() {
		return Field_IsLockedByDigitalSignature($this->_cPtr);
	}

	function __construct($field_dict_or_p=null) {
		if (is_resource($field_dict_or_p) && get_resource_type($field_dict_or_p) === '_p_pdftron__PDF__Field') {
			$this->_cPtr=$field_dict_or_p;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Field(); break;
		default: $this->_cPtr=new_Field($field_dict_or_p);
		}
	}
}

class TimestampingResult {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return TimestampingResult_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return TimestampingResult_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TimestampingResult_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		TimestampingResult_Destroy($this->_cPtr);
	}

	function GetStatus() {
		return TimestampingResult_GetStatus($this->_cPtr);
	}

	function GetString() {
		return TimestampingResult_GetString($this->_cPtr);
	}

	function HasResponseVerificationResult() {
		return TimestampingResult_HasResponseVerificationResult($this->_cPtr);
	}

	function GetResponseVerificationResult() {
		$r=TimestampingResult_GetResponseVerificationResult($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new EmbeddedTimestampVerificationResult($r);
		}
		return $r;
	}

	function GetData() {
		$r=TimestampingResult_GetData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__TimestampingResult') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_TimestampingResult(); break;
		default: $this->_cPtr=new_TimestampingResult($other_or_impl);
		}
	}
}

class TimestampingConfiguration {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return TimestampingConfiguration_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return TimestampingConfiguration_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TimestampingConfiguration_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		TimestampingConfiguration_Destroy($this->_cPtr);
	}

	function SetTimestampAuthorityServerURL($in_url) {
		TimestampingConfiguration_SetTimestampAuthorityServerURL($this->_cPtr,$in_url);
	}

	function SetTimestampAuthorityServerUsername($in_username) {
		TimestampingConfiguration_SetTimestampAuthorityServerUsername($this->_cPtr,$in_username);
	}

	function SetTimestampAuthorityServerPassword($in_password) {
		TimestampingConfiguration_SetTimestampAuthorityServerPassword($this->_cPtr,$in_password);
	}

	function SetUseNonce($in_use_nonce) {
		TimestampingConfiguration_SetUseNonce($this->_cPtr,$in_use_nonce);
	}

	function TestConfiguration($in_opts) {
		$r=TimestampingConfiguration_TestConfiguration($this->_cPtr,$in_opts);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TimestampingResult($r);
		}
		return $r;
	}

	function __construct($other_or_in_url_or_impl=null) {
		if (is_resource($other_or_in_url_or_impl) && get_resource_type($other_or_in_url_or_impl) === '_p_pdftron__PDF__TimestampingConfiguration') {
			$this->_cPtr=$other_or_in_url_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_TimestampingConfiguration(); break;
		default: $this->_cPtr=new_TimestampingConfiguration($other_or_in_url_or_impl);
		}
	}
}

class ObjectIdentifier {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return ObjectIdentifier_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return ObjectIdentifier_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ObjectIdentifier_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_commonName = 0;

	const e_surname = 1;

	const e_countryName = 2;

	const e_localityName = 3;

	const e_stateOrProvinceName = 4;

	const e_streetAddress = 5;

	const e_organizationName = 6;

	const e_organizationalUnitName = 7;

	const e_SHA1 = 8;

	const e_SHA256 = 9;

	const e_SHA384 = 10;

	const e_SHA512 = 11;

	const e_RIPEMD160 = 12;

	const e_RSA_encryption_PKCS1 = 13;

	function Destroy() {
		ObjectIdentifier_Destroy($this->_cPtr);
	}

	function GetRawValue() {
		return ObjectIdentifier_GetRawValue($this->_cPtr);
	}

	function __construct($other_or_in_oid_enum_or_in_arr_or_in_digest_algorithm_type_or_impl=null) {
		if (is_resource($other_or_in_oid_enum_or_in_arr_or_in_digest_algorithm_type_or_impl) && get_resource_type($other_or_in_oid_enum_or_in_arr_or_in_digest_algorithm_type_or_impl) === '_p_pdftron__Crypto__ObjectIdentifier') {
			$this->_cPtr=$other_or_in_oid_enum_or_in_arr_or_in_digest_algorithm_type_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ObjectIdentifier(); break;
		default: $this->_cPtr=new_ObjectIdentifier($other_or_in_oid_enum_or_in_arr_or_in_digest_algorithm_type_or_impl);
		}
	}
}

class X501DistinguishedName {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return X501DistinguishedName_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return X501DistinguishedName_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('X501DistinguishedName_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		X501DistinguishedName_Destroy($this->_cPtr);
	}

	function HasAttribute($in_oid) {
		return X501DistinguishedName_HasAttribute($this->_cPtr,$in_oid);
	}

	function GetStringValuesForAttribute($in_oid) {
		return X501DistinguishedName_GetStringValuesForAttribute($this->_cPtr,$in_oid);
	}

	function GetAllAttributesAndValues() {
		$r=X501DistinguishedName_GetAllAttributesAndValues($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorX501AttributeTypeAndValue($r);
		}
		return $r;
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__Crypto__X501DistinguishedName') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_X501DistinguishedName(); break;
		default: $this->_cPtr=new_X501DistinguishedName($other_or_impl);
		}
	}
}

class X501AttributeTypeAndValue {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return X501AttributeTypeAndValue_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return X501AttributeTypeAndValue_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('X501AttributeTypeAndValue_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		X501AttributeTypeAndValue_Destroy($this->_cPtr);
	}

	function GetAttributeTypeOID() {
		$r=X501AttributeTypeAndValue_GetAttributeTypeOID($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ObjectIdentifier($r);
		}
		return $r;
	}

	function GetStringValue() {
		return X501AttributeTypeAndValue_GetStringValue($this->_cPtr);
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__Crypto__X501AttributeTypeAndValue') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_X501AttributeTypeAndValue(); break;
		default: $this->_cPtr=new_X501AttributeTypeAndValue($other_or_impl);
		}
	}
}

class X509Extension {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return X509Extension_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return X509Extension_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('X509Extension_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		X509Extension_Destroy($this->_cPtr);
	}

	function IsCritical() {
		return X509Extension_IsCritical($this->_cPtr);
	}

	function GetObjectIdentifier() {
		$r=X509Extension_GetObjectIdentifier($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ObjectIdentifier($r);
		}
		return $r;
	}

	function ToString() {
		return X509Extension_ToString($this->_cPtr);
	}

	function GetData() {
		$r=X509Extension_GetData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__Crypto__X509Extension') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_X509Extension(); break;
		default: $this->_cPtr=new_X509Extension($other_or_impl);
		}
	}
}

class X509Certificate {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return X509Certificate_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return X509Certificate_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('X509Certificate_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		X509Certificate_Destroy($this->_cPtr);
	}

	function GetIssuerField() {
		$r=X509Certificate_GetIssuerField($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X501DistinguishedName($r);
		}
		return $r;
	}

	function GetSubjectField() {
		$r=X509Certificate_GetSubjectField($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X501DistinguishedName($r);
		}
		return $r;
	}

	function GetNotBeforeEpochTime() {
		return X509Certificate_GetNotBeforeEpochTime($this->_cPtr);
	}

	function GetNotAfterEpochTime() {
		return X509Certificate_GetNotAfterEpochTime($this->_cPtr);
	}

	function GetRawX509VersionNumber() {
		return X509Certificate_GetRawX509VersionNumber($this->_cPtr);
	}

	function ToString() {
		return X509Certificate_ToString($this->_cPtr);
	}

	function GetFingerprint($in_digest_algorithm=null) {
		switch (func_num_args()) {
		case 0: $r=X509Certificate_GetFingerprint($this->_cPtr); break;
		default: $r=X509Certificate_GetFingerprint($this->_cPtr,$in_digest_algorithm);
		}
		return $r;
	}

	function GetSerialNumber() {
		$r=X509Certificate_GetSerialNumber($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function GetExtensions() {
		$r=X509Certificate_GetExtensions($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorX509Extension($r);
		}
		return $r;
	}

	function GetData() {
		$r=X509Certificate_GetData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function __construct($other_or_in_certificate_path_or_in_cert_buf_or_impl=null) {
		if (is_resource($other_or_in_certificate_path_or_in_cert_buf_or_impl) && get_resource_type($other_or_in_certificate_path_or_in_cert_buf_or_impl) === '_p_pdftron__Crypto__X509Certificate') {
			$this->_cPtr=$other_or_in_certificate_path_or_in_cert_buf_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_X509Certificate(); break;
		default: $this->_cPtr=new_X509Certificate($other_or_in_certificate_path_or_in_cert_buf_or_impl);
		}
	}
}

class DisallowedChange {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return DisallowedChange_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return DisallowedChange_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('DisallowedChange_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_form_filled = 0;

	const e_digital_signature_signed = 1;

	const e_page_template_instantiated = 2;

	const e_annotation_created_or_updated_or_deleted = 3;

	const e_other = 4;

	const e_unknown = 5;

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__DisallowedChange') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_DisallowedChange(); break;
		default: $this->_cPtr=new_DisallowedChange($other_or_impl);
		}
	}

	function Destroy() {
		DisallowedChange_Destroy($this->_cPtr);
	}

	function GetObjNum() {
		return DisallowedChange_GetObjNum($this->_cPtr);
	}

	function GetType() {
		return DisallowedChange_GetType($this->_cPtr);
	}

	function GetTypeAsString() {
		return DisallowedChange_GetTypeAsString($this->_cPtr);
	}
}

class FDFField {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($field_dict_or_p=null,$fdf_dict=null) {
		if (is_resource($field_dict_or_p) && get_resource_type($field_dict_or_p) === '_p_pdftron__FDF__FDFField') {
			$this->_cPtr=$field_dict_or_p;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FDFField(); break;
		case 1: $this->_cPtr=new_FDFField($field_dict_or_p); break;
		default: $this->_cPtr=new_FDFField($field_dict_or_p,$fdf_dict);
		}
	}

	function GetValue() {
		$r=FDFField_GetValue($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetValue($value) {
		FDFField_SetValue($this->_cPtr,$value);
	}

	function GetName() {
		return FDFField_GetName($this->_cPtr);
	}

	function GetPartialName() {
		return FDFField_GetPartialName($this->_cPtr);
	}

	function GetSDFObj() {
		$r=FDFField_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function FindAttribute($attrib) {
		$r=FDFField_FindAttribute($this->_cPtr,$attrib);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class FDFDoc {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_doc') return FDFDoc_mp_doc_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_doc') return FDFDoc_mp_doc_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('FDFDoc_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Close() {
		FDFDoc_Close($this->_cPtr);
	}

	function IsModified() {
		return FDFDoc_IsModified($this->_cPtr);
	}

	function Save($path=null) {
		switch (func_num_args()) {
		case 0: $r=FDFDoc_Save($this->_cPtr); break;
		default: $r=FDFDoc_Save($this->_cPtr,$path);
		}
		if (!is_resource($r)) return $r;
		switch (get_resource_type($r)) {
		case '_p_std__vectorT_unsigned_char_t': return new VectorUChar($r);
		default: return $r;
		}
	}

	function GetTrailer() {
		$r=FDFDoc_GetTrailer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetRoot() {
		$r=FDFDoc_GetRoot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetFDF() {
		$r=FDFDoc_GetFDF($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetPDFFileName() {
		return FDFDoc_GetPDFFileName($this->_cPtr);
	}

	function SetPDFFileName($filepath) {
		FDFDoc_SetPDFFileName($this->_cPtr,$filepath);
	}

	function GetID() {
		$r=FDFDoc_GetID($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetID($id) {
		FDFDoc_SetID($this->_cPtr,$id);
	}

	function GetFieldIterator($field_name=null) {
		switch (func_num_args()) {
		case 0: $r=FDFDoc_GetFieldIterator($this->_cPtr); break;
		default: $r=FDFDoc_GetFieldIterator($this->_cPtr,$field_name);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FDFFieldIterator($r);
		}
		return $r;
	}

	function GetField($field_name) {
		$r=FDFDoc_GetField($this->_cPtr,$field_name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FDFField($r);
		}
		return $r;
	}

	function FieldCreate($field_name,$type,$field_value=null) {
		switch (func_num_args()) {
		case 2: $r=FDFDoc_FieldCreate($this->_cPtr,$field_name,$type); break;
		default: $r=FDFDoc_FieldCreate($this->_cPtr,$field_name,$type,$field_value);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FDFField($r);
		}
		return $r;
	}

	function GetSDFDoc() {
		$r=FDFDoc_GetSDFDoc($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SDFDoc($r);
		}
		return $r;
	}

	static function CreateFromXFDF($file_name) {
		$r=FDFDoc_CreateFromXFDF($file_name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FDFDoc($r);
		}
		return $r;
	}

	function SaveAsXFDF($filepath_or_opts=null,$opts=null) {
		switch (func_num_args()) {
		case 0: $r=FDFDoc_SaveAsXFDF($this->_cPtr); break;
		case 1: $r=FDFDoc_SaveAsXFDF($this->_cPtr,$filepath_or_opts); break;
		default: $r=FDFDoc_SaveAsXFDF($this->_cPtr,$filepath_or_opts,$opts);
		}
		return $r;
	}

	function MergeAnnots($command_file,$permitted_user=null) {
		switch (func_num_args()) {
		case 1: FDFDoc_MergeAnnots($this->_cPtr,$command_file); break;
		default: FDFDoc_MergeAnnots($this->_cPtr,$command_file,$permitted_user);
		}
	}

	function __construct($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other=null,$owner_or_buf_size=null) {
		if (is_resource($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other) && get_resource_type($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other) === '_p_pdftron__FDF__FDFDoc') {
			$this->_cPtr=$impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FDFDoc(); break;
		case 1: $this->_cPtr=new_FDFDoc($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other); break;
		default: $this->_cPtr=new_FDFDoc($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other,$owner_or_buf_size);
		}
	}
}

class VerificationOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return VerificationOptions_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return VerificationOptions_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('VerificationOptions_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_compatibility_and_archiving = 0;

	const e_maximum = 1;

	const e_signing = 0;

	const e_timestamp = 1;

	const e_current = 2;

	const e_signing_trust = 1;

	const e_certification_trust = 2;

	const e_dynamic_content = 4;

	const e_javascript = 16;

	const e_identity = 32;

	const e_trust_anchor = 64;

	const e_default_trust = 97;

	const e_complete_trust = 119;

	function Destroy() {
		VerificationOptions_Destroy($this->_cPtr);
	}

	function __construct($other_or_impl_or_level) {
		if (is_resource($other_or_impl_or_level) && get_resource_type($other_or_impl_or_level) === '_p_pdftron__PDF__VerificationOptions') {
			$this->_cPtr=$other_or_impl_or_level;
			return;
		}
		$this->_cPtr=new_VerificationOptions($other_or_impl_or_level);
	}

	function AddTrustedCertificate($in_certificate_buf_or_in_filepath,$in_buf_size_or_in_trust_flags=null,$in_trust_flags=null) {
		switch (func_num_args()) {
		case 1: VerificationOptions_AddTrustedCertificate($this->_cPtr,$in_certificate_buf_or_in_filepath); break;
		case 2: VerificationOptions_AddTrustedCertificate($this->_cPtr,$in_certificate_buf_or_in_filepath,$in_buf_size_or_in_trust_flags); break;
		default: VerificationOptions_AddTrustedCertificate($this->_cPtr,$in_certificate_buf_or_in_filepath,$in_buf_size_or_in_trust_flags,$in_trust_flags);
		}
	}

	function AddTrustedCertificates($in_P7C_binary_DER_certificates_file_data,$in_size) {
		VerificationOptions_AddTrustedCertificates($this->_cPtr,$in_P7C_binary_DER_certificates_file_data,$in_size);
	}

	function LoadTrustList($in_fdf_cert_exchange_data) {
		VerificationOptions_LoadTrustList($this->_cPtr,$in_fdf_cert_exchange_data);
	}

	function EnableModificationVerification($in_on_or_off) {
		VerificationOptions_EnableModificationVerification($this->_cPtr,$in_on_or_off);
	}

	function EnableDigestVerification($in_on_or_off) {
		VerificationOptions_EnableDigestVerification($this->_cPtr,$in_on_or_off);
	}

	function EnableTrustVerification($in_on_or_off) {
		VerificationOptions_EnableTrustVerification($this->_cPtr,$in_on_or_off);
	}

	function EnableOnlineCRLRevocationChecking($in_on_or_off) {
		VerificationOptions_EnableOnlineCRLRevocationChecking($this->_cPtr,$in_on_or_off);
	}

	function EnableOnlineOCSPRevocationChecking($in_on_or_off) {
		VerificationOptions_EnableOnlineOCSPRevocationChecking($this->_cPtr,$in_on_or_off);
	}

	function EnableOnlineRevocationChecking($in_on_or_off) {
		VerificationOptions_EnableOnlineRevocationChecking($this->_cPtr,$in_on_or_off);
	}
}

class TrustVerificationResult {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return TrustVerificationResult_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return TrustVerificationResult_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TrustVerificationResult_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		TrustVerificationResult_Destroy($this->_cPtr);
	}

	function WasSuccessful() {
		return TrustVerificationResult_WasSuccessful($this->_cPtr);
	}

	function GetResultString() {
		return TrustVerificationResult_GetResultString($this->_cPtr);
	}

	function GetTimeOfTrustVerification() {
		return TrustVerificationResult_GetTimeOfTrustVerification($this->_cPtr);
	}

	function GetTimeOfTrustVerificationEnum() {
		return TrustVerificationResult_GetTimeOfTrustVerificationEnum($this->_cPtr);
	}

	function HasEmbeddedTimestampVerificationResult() {
		return TrustVerificationResult_HasEmbeddedTimestampVerificationResult($this->_cPtr);
	}

	function GetEmbeddedTimestampVerificationResult() {
		$r=TrustVerificationResult_GetEmbeddedTimestampVerificationResult($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new EmbeddedTimestampVerificationResult($r);
		}
		return $r;
	}

	function GetCertPath() {
		$r=TrustVerificationResult_GetCertPath($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorX509Certificate($r);
		}
		return $r;
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__TrustVerificationResult') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_TrustVerificationResult(); break;
		default: $this->_cPtr=new_TrustVerificationResult($other_or_impl);
		}
	}
}

class VerificationResult {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return VerificationResult_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return VerificationResult_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('VerificationResult_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_no_error = 0;

	const e_corrupt_file = 1;

	const e_unsigned = 2;

	const e_bad_byteranges = 3;

	const e_corrupt_cryptographic_contents = 4;

	const e_digest_invalid = 0;

	const e_digest_verified = 1;

	const e_digest_verification_disabled = 2;

	const e_weak_digest_algorithm_but_digest_verifiable = 3;

	const e_no_digest_status = 4;

	const e_unsupported_encoding = 5;

	const e_unsupported_digest_algorithm = 6;

	const e_trust_verified = 0;

	const e_untrusted = 1;

	const e_trust_verification_disabled = 2;

	const e_no_trust_status = 3;

	const e_unsupported_trust_features = 4;

	const e_invalidated_by_disallowed_changes = 0;

	const e_has_allowed_changes = 1;

	const e_unmodified = 2;

	const e_permissions_verification_disabled = 3;

	const e_no_permissions_status = 4;

	const e_unsupported_permissions_features = 5;

	function Destroy() {
		VerificationResult_Destroy($this->_cPtr);
	}

	function GetVerificationStatus() {
		return VerificationResult_GetVerificationStatus($this->_cPtr);
	}

	function GetDocumentStatus() {
		return VerificationResult_GetDocumentStatus($this->_cPtr);
	}

	function GetDigestStatus() {
		return VerificationResult_GetDigestStatus($this->_cPtr);
	}

	function GetTrustStatus() {
		return VerificationResult_GetTrustStatus($this->_cPtr);
	}

	function GetPermissionsStatus() {
		return VerificationResult_GetPermissionsStatus($this->_cPtr);
	}

	function HasTrustVerificationResult() {
		return VerificationResult_HasTrustVerificationResult($this->_cPtr);
	}

	function GetTrustVerificationResult() {
		$r=VerificationResult_GetTrustVerificationResult($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TrustVerificationResult($r);
		}
		return $r;
	}

	function GetDisallowedChanges() {
		$r=VerificationResult_GetDisallowedChanges($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDisallowedChange($r);
		}
		return $r;
	}

	function GetDigestAlgorithm() {
		return VerificationResult_GetDigestAlgorithm($this->_cPtr);
	}

	function GetDocumentStatusAsString() {
		return VerificationResult_GetDocumentStatusAsString($this->_cPtr);
	}

	function GetDigestStatusAsString() {
		return VerificationResult_GetDigestStatusAsString($this->_cPtr);
	}

	function GetTrustStatusAsString() {
		return VerificationResult_GetTrustStatusAsString($this->_cPtr);
	}

	function GetPermissionsStatusAsString() {
		return VerificationResult_GetPermissionsStatusAsString($this->_cPtr);
	}

	function GetUnsupportedFeatures() {
		return VerificationResult_GetUnsupportedFeatures($this->_cPtr);
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__VerificationResult') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_VerificationResult(); break;
		default: $this->_cPtr=new_VerificationResult($other_or_impl);
		}
	}
}

class EmbeddedTimestampVerificationResult {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return EmbeddedTimestampVerificationResult_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return EmbeddedTimestampVerificationResult_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('EmbeddedTimestampVerificationResult_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		EmbeddedTimestampVerificationResult_Destroy($this->_cPtr);
	}

	function GetVerificationStatus() {
		return EmbeddedTimestampVerificationResult_GetVerificationStatus($this->_cPtr);
	}

	function GetCMSDigestStatus() {
		return EmbeddedTimestampVerificationResult_GetCMSDigestStatus($this->_cPtr);
	}

	function GetMessageImprintDigestStatus() {
		return EmbeddedTimestampVerificationResult_GetMessageImprintDigestStatus($this->_cPtr);
	}

	function GetTrustStatus() {
		return EmbeddedTimestampVerificationResult_GetTrustStatus($this->_cPtr);
	}

	function GetCMSDigestStatusAsString() {
		return EmbeddedTimestampVerificationResult_GetCMSDigestStatusAsString($this->_cPtr);
	}

	function GetMessageImprintDigestStatusAsString() {
		return EmbeddedTimestampVerificationResult_GetMessageImprintDigestStatusAsString($this->_cPtr);
	}

	function GetTrustStatusAsString() {
		return EmbeddedTimestampVerificationResult_GetTrustStatusAsString($this->_cPtr);
	}

	function HasTrustVerificationResult() {
		return EmbeddedTimestampVerificationResult_HasTrustVerificationResult($this->_cPtr);
	}

	function GetTrustVerificationResult() {
		$r=EmbeddedTimestampVerificationResult_GetTrustVerificationResult($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TrustVerificationResult($r);
		}
		return $r;
	}

	function GetCMSSignatureDigestAlgorithm() {
		return EmbeddedTimestampVerificationResult_GetCMSSignatureDigestAlgorithm($this->_cPtr);
	}

	function GetMessageImprintDigestAlgorithm() {
		return EmbeddedTimestampVerificationResult_GetMessageImprintDigestAlgorithm($this->_cPtr);
	}

	function GetUnsupportedFeatures() {
		return EmbeddedTimestampVerificationResult_GetUnsupportedFeatures($this->_cPtr);
	}

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__EmbeddedTimestampVerificationResult') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_EmbeddedTimestampVerificationResult(); break;
		default: $this->_cPtr=new_EmbeddedTimestampVerificationResult($other_or_impl);
		}
	}
}

class DigestAlgorithm {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_SHA1 = 0;

	const e_SHA256 = 1;

	const e_SHA384 = 2;

	const e_SHA512 = 3;

	const e_RIPEMD160 = 4;

	const e_unknown_digest_algorithm = 5;

	static function CalculateDigest($in_digest_algorithm_type,$in_message_buf) {
		$r=DigestAlgorithm_CalculateDigest($in_digest_algorithm_type,$in_message_buf);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__Crypto__DigestAlgorithm') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_DigestAlgorithm();
	}
}

class DigitalSignatureField {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return DigitalSignatureField_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return DigitalSignatureField_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('DigitalSignatureField_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_adbe_x509_rsa_sha1 = 0;

	const e_adbe_pkcs7_detached = 1;

	const e_adbe_pkcs7_sha1 = 2;

	const e_ETSI_CAdES_detached = 3;

	const e_ETSI_RFC3161 = 4;

	const e_unknown = 5;

	const e_absent = 6;

	const e_no_changes_allowed = 1;

	const e_formfilling_signing_allowed = 2;

	const e_annotating_formfilling_signing_allowed = 3;

	const e_unrestricted = 4;

	const e_lock_all = 0;

	const e_include = 1;

	const e_exclude = 2;

	function HasCryptographicSignature() {
		return DigitalSignatureField_HasCryptographicSignature($this->_cPtr);
	}

	function GetSubFilter() {
		return DigitalSignatureField_GetSubFilter($this->_cPtr);
	}

	function GetSignatureName() {
		return DigitalSignatureField_GetSignatureName($this->_cPtr);
	}

	function GetSigningTime() {
		$r=DigitalSignatureField_GetSigningTime($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Date($r);
		}
		return $r;
	}

	function GetLocation() {
		return DigitalSignatureField_GetLocation($this->_cPtr);
	}

	function GetReason() {
		return DigitalSignatureField_GetReason($this->_cPtr);
	}

	function GetContactInfo() {
		return DigitalSignatureField_GetContactInfo($this->_cPtr);
	}

	function GetCert($in_index) {
		$r=DigitalSignatureField_GetCert($this->_cPtr,$in_index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function GetCertCount() {
		return DigitalSignatureField_GetCertCount($this->_cPtr);
	}

	function HasVisibleAppearance() {
		return DigitalSignatureField_HasVisibleAppearance($this->_cPtr);
	}

	function SetContactInfo($in_contact_info) {
		DigitalSignatureField_SetContactInfo($this->_cPtr,$in_contact_info);
	}

	function SetLocation($in_location) {
		DigitalSignatureField_SetLocation($this->_cPtr,$in_location);
	}

	function SetReason($in_reason) {
		DigitalSignatureField_SetReason($this->_cPtr,$in_reason);
	}

	function SetFieldPermissions($in_action,$in_field_names=null) {
		switch (func_num_args()) {
		case 1: DigitalSignatureField_SetFieldPermissions($this->_cPtr,$in_action); break;
		default: DigitalSignatureField_SetFieldPermissions($this->_cPtr,$in_action,$in_field_names);
		}
	}

	function SetDocumentPermissions($in_perms) {
		DigitalSignatureField_SetDocumentPermissions($this->_cPtr,$in_perms);
	}

	function SignOnNextSave($in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_password_or_in_buf_size,$in_password=null) {
		switch (func_num_args()) {
		case 2: DigitalSignatureField_SignOnNextSave($this->_cPtr,$in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_password_or_in_buf_size); break;
		default: DigitalSignatureField_SignOnNextSave($this->_cPtr,$in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_password_or_in_buf_size,$in_password);
		}
	}

	function SignOnNextSaveWithCustomHandler($in_signature_handler_id) {
		DigitalSignatureField_SignOnNextSaveWithCustomHandler($this->_cPtr,$in_signature_handler_id);
	}

	function CertifyOnNextSave($in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_password_or_in_buf_size,$in_password=null) {
		switch (func_num_args()) {
		case 2: DigitalSignatureField_CertifyOnNextSave($this->_cPtr,$in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_password_or_in_buf_size); break;
		default: DigitalSignatureField_CertifyOnNextSave($this->_cPtr,$in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_password_or_in_buf_size,$in_password);
		}
	}

	function CertifyOnNextSaveWithCustomHandler($in_signature_handler_id) {
		DigitalSignatureField_CertifyOnNextSaveWithCustomHandler($this->_cPtr,$in_signature_handler_id);
	}

	function GetSDFObj() {
		$r=DigitalSignatureField_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function IsLockedByDigitalSignature() {
		return DigitalSignatureField_IsLockedByDigitalSignature($this->_cPtr);
	}

	function GetLockedFields() {
		return DigitalSignatureField_GetLockedFields($this->_cPtr);
	}

	function GetDocumentPermissions() {
		return DigitalSignatureField_GetDocumentPermissions($this->_cPtr);
	}

	function ClearSignature() {
		DigitalSignatureField_ClearSignature($this->_cPtr);
	}

	function Verify($in_opts) {
		$r=DigitalSignatureField_Verify($this->_cPtr,$in_opts);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VerificationResult($r);
		}
		return $r;
	}

	function IsCertification() {
		return DigitalSignatureField_IsCertification($this->_cPtr);
	}

	function GetSignerCertFromCMS() {
		$r=DigitalSignatureField_GetSignerCertFromCMS($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new X509Certificate($r);
		}
		return $r;
	}

	function GetByteRanges() {
		$r=DigitalSignatureField_GetByteRanges($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorByteRange($r);
		}
		return $r;
	}

	function GetCertPathsFromCMS() {
		$r=DigitalSignatureField_GetCertPathsFromCMS($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorVectorX509Certificate($r);
		}
		return $r;
	}

	function EnableLTVOfflineVerification($in_verification_result) {
		return DigitalSignatureField_EnableLTVOfflineVerification($this->_cPtr,$in_verification_result);
	}

	function TimestampOnNextSave($in_timestamping_config,$in_timestamp_response_verification_options) {
		DigitalSignatureField_TimestampOnNextSave($this->_cPtr,$in_timestamping_config,$in_timestamp_response_verification_options);
	}

	function GenerateContentsWithEmbeddedTimestamp($in_timestamping_config,$in_timestamp_response_verification_options) {
		$r=DigitalSignatureField_GenerateContentsWithEmbeddedTimestamp($this->_cPtr,$in_timestamping_config,$in_timestamp_response_verification_options);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TimestampingResult($r);
		}
		return $r;
	}

	function UseSubFilter($in_subfilter_type,$in_make_mandatory=true) {
		DigitalSignatureField_UseSubFilter($this->_cPtr,$in_subfilter_type,$in_make_mandatory);
	}

	function CalculateDigest($in_digest_algorithm_type=null) {
		switch (func_num_args()) {
		case 0: $r=DigitalSignatureField_CalculateDigest($this->_cPtr); break;
		default: $r=DigitalSignatureField_CalculateDigest($this->_cPtr,$in_digest_algorithm_type);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function SetPreferredDigestAlgorithm($in_digest_algorithm_type,$in_make_mandatory=true) {
		DigitalSignatureField_SetPreferredDigestAlgorithm($this->_cPtr,$in_digest_algorithm_type,$in_make_mandatory);
	}

	function CreateSigDictForCustomCertification($in_filter_name,$in_subfilter_type,$in_contents_size_to_reserve) {
		DigitalSignatureField_CreateSigDictForCustomCertification($this->_cPtr,$in_filter_name,$in_subfilter_type,$in_contents_size_to_reserve);
	}

	function CreateSigDictForCustomSigning($in_filter_name,$in_subfilter_type,$in_contents_size_to_reserve) {
		DigitalSignatureField_CreateSigDictForCustomSigning($this->_cPtr,$in_filter_name,$in_subfilter_type,$in_contents_size_to_reserve);
	}

	function SetSigDictTimeOfSigning($in_date) {
		DigitalSignatureField_SetSigDictTimeOfSigning($this->_cPtr,$in_date);
	}

	static function SignDigest($in_digest,$in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_keyfile_password,$in_pades_mode,$in_digest_algorithm_type) {
		$r=DigitalSignatureField_SignDigest($in_digest,$in_pkcs12_keyfile_path_or_in_pkcs12_buffer,$in_keyfile_password,$in_pades_mode,$in_digest_algorithm_type);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	static function GenerateESSSigningCertPAdESAttribute($in_signer_cert,$in_digest_algorithm_type) {
		$r=DigitalSignatureField_GenerateESSSigningCertPAdESAttribute($in_signer_cert,$in_digest_algorithm_type);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	static function GenerateCMSSignedAttributes($in_digest_buf,$in_custom_signedattributes_buf=null) {
		switch (func_num_args()) {
		case 1: $r=DigitalSignatureField_GenerateCMSSignedAttributes($in_digest_buf); break;
		default: $r=DigitalSignatureField_GenerateCMSSignedAttributes($in_digest_buf,$in_custom_signedattributes_buf);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	static function GenerateCMSSignature($in_signer_cert,$in_chain_certs_list,$in_digest_algorithm_oid,$in_signature_algorithm_oid,$in_signature_value_buf,$in_signedattributes_buf) {
		$r=DigitalSignatureField_GenerateCMSSignature($in_signer_cert,$in_chain_certs_list,$in_digest_algorithm_oid,$in_signature_algorithm_oid,$in_signature_value_buf,$in_signedattributes_buf);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function __construct($other_or_in_field_or_impl) {
		if (is_resource($other_or_in_field_or_impl) && get_resource_type($other_or_in_field_or_impl) === '_p_pdftron__PDF__DigitalSignatureField') {
			$this->_cPtr=$other_or_in_field_or_impl;
			return;
		}
		$this->_cPtr=new_DigitalSignatureField($other_or_in_field_or_impl);
	}
}

class FileSpec {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return FileSpec_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return FileSpec_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('FileSpec_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc,$path,$embed=true) {
		$r=FileSpec_Create($doc,$path,$embed);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FileSpec($r);
		}
		return $r;
	}

	static function CreateURL($doc,$url) {
		$r=FileSpec_CreateURL($doc,$url);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FileSpec($r);
		}
		return $r;
	}

	function IsEqual($d) {
		return FileSpec_IsEqual($this->_cPtr,$d);
	}

	function IsValid() {
		return FileSpec_IsValid($this->_cPtr);
	}

	function Export($save_as=null) {
		switch (func_num_args()) {
		case 0: $r=FileSpec_Export($this->_cPtr); break;
		default: $r=FileSpec_Export($this->_cPtr,$save_as);
		}
		return $r;
	}

	function GetFileData() {
		$r=FileSpec_GetFileData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetFilePath() {
		return FileSpec_GetFilePath($this->_cPtr);
	}

	function SetDesc($desc) {
		FileSpec_SetDesc($this->_cPtr,$desc);
	}

	function GetSDFObj() {
		$r=FileSpec_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($f_or_d_or_fs=null) {
		if (is_resource($f_or_d_or_fs) && get_resource_type($f_or_d_or_fs) === '_p_pdftron__PDF__FileSpec') {
			$this->_cPtr=$f_or_d_or_fs;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FileSpec(); break;
		default: $this->_cPtr=new_FileSpec($f_or_d_or_fs);
		}
	}
}

class Flattener {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return Flattener_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return Flattener_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Flattener_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Flattener') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Flattener();
	}

	function SetDPI($dpi) {
		Flattener_SetDPI($this->_cPtr,$dpi);
	}

	function SetMaximumImagePixels($max_pixels) {
		Flattener_SetMaximumImagePixels($this->_cPtr,$max_pixels);
	}

	function SetPreferJPG($jpg) {
		Flattener_SetPreferJPG($this->_cPtr,$jpg);
	}

	function SetJPGQuality($quality) {
		Flattener_SetJPGQuality($this->_cPtr,$quality);
	}

	const e_threshold_very_strict = 0;

	const e_threshold_strict = Flattener_e_threshold_strict;

	const e_threshold_default = Flattener_e_threshold_default;

	const e_threshold_keep_most = Flattener_e_threshold_keep_most;

	const e_threshold_keep_all = Flattener_e_threshold_keep_all;

	const e_simple = 0;

	const e_fast = Flattener_e_fast;

	function SetThreshold($threshold) {
		Flattener_SetThreshold($this->_cPtr,$threshold);
	}

	function SetPathHinting($enable_hinting) {
		Flattener_SetPathHinting($this->_cPtr,$enable_hinting);
	}

	function Process($doc_or_page,$mode) {
		Flattener_Process($this->_cPtr,$doc_or_page,$mode);
	}

	function Destroy() {
		Flattener_Destroy($this->_cPtr);
	}
}

class Annot {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_annot') return Annot_mp_annot_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_annot') return Annot_mp_annot_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Annot_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_Text = 0;

	const e_Link = Annot_e_Link;

	const e_FreeText = Annot_e_FreeText;

	const e_Line = Annot_e_Line;

	const e_Square = Annot_e_Square;

	const e_Circle = Annot_e_Circle;

	const e_Polygon = Annot_e_Polygon;

	const e_Polyline = Annot_e_Polyline;

	const e_Highlight = Annot_e_Highlight;

	const e_Underline = Annot_e_Underline;

	const e_Squiggly = Annot_e_Squiggly;

	const e_StrikeOut = Annot_e_StrikeOut;

	const e_Stamp = Annot_e_Stamp;

	const e_Caret = Annot_e_Caret;

	const e_Ink = Annot_e_Ink;

	const e_Popup = Annot_e_Popup;

	const e_FileAttachment = Annot_e_FileAttachment;

	const e_Sound = Annot_e_Sound;

	const e_Movie = Annot_e_Movie;

	const e_Widget = Annot_e_Widget;

	const e_Screen = Annot_e_Screen;

	const e_PrinterMark = Annot_e_PrinterMark;

	const e_TrapNet = Annot_e_TrapNet;

	const e_Watermark = Annot_e_Watermark;

	const e_3D = Annot_e_3D;

	const e_Redact = Annot_e_Redact;

	const e_Projection = Annot_e_Projection;

	const e_RichMedia = Annot_e_RichMedia;

	const e_Unknown = Annot_e_Unknown;

	static function Create($doc,$type,$pos) {
		$r=Annot_Create($doc,$type,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	function IsEqual($d) {
		return Annot_IsEqual($this->_cPtr,$d);
	}

	function IsValid() {
		return Annot_IsValid($this->_cPtr);
	}

	function GetSDFObj() {
		$r=Annot_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetType() {
		return Annot_GetType($this->_cPtr);
	}

	function GetRect() {
		$r=Annot_GetRect($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetVisibleContentBox() {
		$r=Annot_GetVisibleContentBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function IsMarkup() {
		return Annot_IsMarkup($this->_cPtr);
	}

	function SetRect($pos) {
		Annot_SetRect($this->_cPtr,$pos);
	}

	function GetPage() {
		$r=Annot_GetPage($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function SetPage($page) {
		Annot_SetPage($this->_cPtr,$page);
	}

	function GetUniqueID() {
		$r=Annot_GetUniqueID($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetUniqueID($id,$id_buf_sz=0) {
		Annot_SetUniqueID($this->_cPtr,$id,$id_buf_sz);
	}

	function GetDate() {
		$r=Annot_GetDate($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Date($r);
		}
		return $r;
	}

	function SetDate($date) {
		Annot_SetDate($this->_cPtr,$date);
	}

	const e_invisible = 0;

	const e_hidden = Annot_e_hidden;

	const e_print = Annot_e_print;

	const e_no_zoom = Annot_e_no_zoom;

	const e_no_rotate = Annot_e_no_rotate;

	const e_no_view = Annot_e_no_view;

	const e_read_only = Annot_e_read_only;

	const e_locked = Annot_e_locked;

	const e_toggle_no_view = Annot_e_toggle_no_view;

	const e_locked_contents = Annot_e_locked_contents;

	function GetFlag($flag) {
		return Annot_GetFlag($this->_cPtr,$flag);
	}

	function SetFlag($flag,$value) {
		Annot_SetFlag($this->_cPtr,$flag,$value);
	}

	const e_action_trigger_activate = 0;

	const e_action_trigger_annot_enter = 1;

	const e_action_trigger_annot_exit = 2;

	const e_action_trigger_annot_down = 3;

	const e_action_trigger_annot_up = 4;

	const e_action_trigger_annot_focus = 5;

	const e_action_trigger_annot_blur = 6;

	const e_action_trigger_annot_page_open = 7;

	const e_action_trigger_annot_page_close = 8;

	const e_action_trigger_annot_page_visible = 9;

	const e_action_trigger_annot_page_invisible = 10;

	function GetTriggerAction($trigger) {
		$r=Annot_GetTriggerAction($this->_cPtr,$trigger);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetBorderStyle() {
		$r=Annot_GetBorderStyle($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new BorderStyle($r);
		}
		return $r;
	}

	function SetBorderStyle($bs,$oldStyleOnly=false) {
		Annot_SetBorderStyle($this->_cPtr,$bs,$oldStyleOnly);
	}

	const e_normal = 0;

	const e_rollover = Annot_e_rollover;

	const e_down = Annot_e_down;

	function GetAppearance($annot_state=null,$app_state=null) {
		switch (func_num_args()) {
		case 0: $r=Annot_GetAppearance($this->_cPtr); break;
		case 1: $r=Annot_GetAppearance($this->_cPtr,$annot_state); break;
		default: $r=Annot_GetAppearance($this->_cPtr,$annot_state,$app_state);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetAppearance($app_stream,$annot_state=null,$app_state=null) {
		switch (func_num_args()) {
		case 1: Annot_SetAppearance($this->_cPtr,$app_stream); break;
		case 2: Annot_SetAppearance($this->_cPtr,$app_stream,$annot_state); break;
		default: Annot_SetAppearance($this->_cPtr,$app_stream,$annot_state,$app_state);
		}
	}

	function RemoveAppearance($annot_state=null,$app_state=null) {
		switch (func_num_args()) {
		case 0: Annot_RemoveAppearance($this->_cPtr); break;
		case 1: Annot_RemoveAppearance($this->_cPtr,$annot_state); break;
		default: Annot_RemoveAppearance($this->_cPtr,$annot_state,$app_state);
		}
	}

	function Flatten($page) {
		Annot_Flatten($this->_cPtr,$page);
	}

	function GetActiveAppearanceState() {
		return Annot_GetActiveAppearanceState($this->_cPtr);
	}

	function SetActiveAppearanceState($astate) {
		Annot_SetActiveAppearanceState($this->_cPtr,$astate);
	}

	function GetColorAsRGB() {
		$r=Annot_GetColorAsRGB($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetColorAsCMYK() {
		$r=Annot_GetColorAsCMYK($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetColorAsGray() {
		$r=Annot_GetColorAsGray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetColorCompNum() {
		return Annot_GetColorCompNum($this->_cPtr);
	}

	function SetColor($col,$numcomp=3) {
		Annot_SetColor($this->_cPtr,$col,$numcomp);
	}

	function GetStructParent() {
		return Annot_GetStructParent($this->_cPtr);
	}

	function SetStructParent($parkeyval) {
		Annot_SetStructParent($this->_cPtr,$parkeyval);
	}

	function GetOptionalContent() {
		$r=Annot_GetOptionalContent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetOptionalContent($content) {
		Annot_SetOptionalContent($this->_cPtr,$content);
	}

	function SetContents($contents) {
		Annot_SetContents($this->_cPtr,$contents);
	}

	function GetContents() {
		return Annot_GetContents($this->_cPtr);
	}

	function GetRotation() {
		return Annot_GetRotation($this->_cPtr);
	}

	function SetRotation($angle) {
		Annot_SetRotation($this->_cPtr,$angle);
	}

	function RefreshAppearance($options=null) {
		switch (func_num_args()) {
		case 0: Annot_RefreshAppearance($this->_cPtr); break;
		default: Annot_RefreshAppearance($this->_cPtr,$options);
		}
	}

	function GetCustomData($key) {
		return Annot_GetCustomData($this->_cPtr,$key);
	}

	function SetCustomData($key,$value) {
		Annot_SetCustomData($this->_cPtr,$key,$value);
	}

	function DeleteCustomData($key) {
		Annot_DeleteCustomData($this->_cPtr,$key);
	}

	function Resize($newrect) {
		Annot_Resize($this->_cPtr,$newrect);
	}

	static function CreateInternal($impl) {
		$r=Annot_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return Annot_GetHandleInternal($this->_cPtr);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annot') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Annot(); break;
		default: $this->_cPtr=new_Annot($d_or_annot);
		}
	}
}

class BorderStyle {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_solid = 0;

	const e_dashed = BorderStyle_e_dashed;

	const e_beveled = BorderStyle_e_beveled;

	const e_inset = BorderStyle_e_inset;

	const e_underline = BorderStyle_e_underline;

	function Destroy() {
		BorderStyle_Destroy($this->_cPtr);
	}

	function GetStyle() {
		return BorderStyle_GetStyle($this->_cPtr);
	}

	function SetStyle($style) {
		BorderStyle_SetStyle($this->_cPtr,$style);
	}

	function GetHR() {
		return BorderStyle_GetHR($this->_cPtr);
	}

	function SetHR($horizontal_radius) {
		BorderStyle_SetHR($this->_cPtr,$horizontal_radius);
	}

	function GetVR() {
		return BorderStyle_GetVR($this->_cPtr);
	}

	function SetVR($vertical_radius) {
		BorderStyle_SetVR($this->_cPtr,$vertical_radius);
	}

	function GetWidth() {
		return BorderStyle_GetWidth($this->_cPtr);
	}

	function SetWidth($width) {
		BorderStyle_SetWidth($this->_cPtr,$width);
	}

	function GetDash() {
		$r=BorderStyle_GetDash($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function SetDash($dash) {
		BorderStyle_SetDash($this->_cPtr,$dash);
	}

	function __construct($s_or_impl=null,$b_width=null,$b_hr=null,$b_vr=null,$b_dash=null) {
		if (is_resource($s_or_impl) && get_resource_type($s_or_impl) === '_p_pdftron__PDF__BorderStyle') {
			$this->_cPtr=$s_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_BorderStyle(); break;
		case 1: $this->_cPtr=new_BorderStyle($s_or_impl); break;
		case 2: $this->_cPtr=new_BorderStyle($s_or_impl,$b_width); break;
		case 3: $this->_cPtr=new_BorderStyle($s_or_impl,$b_width,$b_hr); break;
		case 4: $this->_cPtr=new_BorderStyle($s_or_impl,$b_width,$b_hr,$b_vr); break;
		default: $this->_cPtr=new_BorderStyle($s_or_impl,$b_width,$b_hr,$b_vr,$b_dash);
		}
	}
}

class Popup extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Popup_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Popup($r);
		}
		return $r;
	}

	function GetParent() {
		$r=Popup_GetParent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	function SetParent($parent) {
		Popup_SetParent($this->_cPtr,$parent);
	}

	function IsOpen() {
		return Popup_IsOpen($this->_cPtr);
	}

	function SetOpen($is_open) {
		Popup_SetOpen($this->_cPtr,$is_open);
	}

	function __construct($d_or_ann_or_popup=null) {
		if (is_resource($d_or_ann_or_popup) && get_resource_type($d_or_ann_or_popup) === '_p_pdftron__PDF__Annots__Popup') {
			$this->_cPtr=$d_or_ann_or_popup;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Popup(); break;
		default: $this->_cPtr=new_Popup($d_or_ann_or_popup);
		}
	}
}

class Markup extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	function GetTitle() {
		return Markup_GetTitle($this->_cPtr);
	}

	function SetTitle($title) {
		Markup_SetTitle($this->_cPtr,$title);
	}

	function GetPopup() {
		$r=Markup_GetPopup($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Popup($r);
		}
		return $r;
	}

	function SetPopup($ppup) {
		Markup_SetPopup($this->_cPtr,$ppup);
	}

	function GetOpacity() {
		return Markup_GetOpacity($this->_cPtr);
	}

	function SetOpacity($op) {
		Markup_SetOpacity($this->_cPtr,$op);
	}

	function GetSubject() {
		return Markup_GetSubject($this->_cPtr);
	}

	function SetSubject($contents) {
		Markup_SetSubject($this->_cPtr,$contents);
	}

	function GetCreationDates() {
		$r=Markup_GetCreationDates($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Date($r);
		}
		return $r;
	}

	function SetCreationDates($dt) {
		Markup_SetCreationDates($this->_cPtr,$dt);
	}

	const e_None = 0;

	const e_Cloudy = Markup_e_Cloudy;

	function GetBorderEffect() {
		return Markup_GetBorderEffect($this->_cPtr);
	}

	function SetBorderEffect($effect=null) {
		switch (func_num_args()) {
		case 0: Markup_SetBorderEffect($this->_cPtr); break;
		default: Markup_SetBorderEffect($this->_cPtr,$effect);
		}
	}

	function GetBorderEffectIntensity() {
		return Markup_GetBorderEffectIntensity($this->_cPtr);
	}

	function SetBorderEffectIntensity($intensity=0.0) {
		Markup_SetBorderEffectIntensity($this->_cPtr,$intensity);
	}

	function GetInteriorColor() {
		$r=Markup_GetInteriorColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetInteriorColorCompNum() {
		return Markup_GetInteriorColorCompNum($this->_cPtr);
	}

	function SetInteriorColor($c_,$CompNum) {
		Markup_SetInteriorColor($this->_cPtr,$c_,$CompNum);
	}

	function GetContentRect() {
		$r=Markup_GetContentRect($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function SetContentRect($cr) {
		Markup_SetContentRect($this->_cPtr,$cr);
	}

	function GetPadding() {
		$r=Markup_GetPadding($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function SetPadding($rd_or_x) {
		Markup_SetPadding($this->_cPtr,$rd_or_x);
	}

	function RotateAppearance($angle) {
		Markup_RotateAppearance($this->_cPtr,$angle);
	}

	function __construct($d_or_ann_or_markup=null) {
		if (is_resource($d_or_ann_or_markup) && get_resource_type($d_or_ann_or_markup) === '_p_pdftron__PDF__Annots__Markup') {
			$this->_cPtr=$d_or_ann_or_markup;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Markup(); break;
		default: $this->_cPtr=new_Markup($d_or_ann_or_markup);
		}
	}
}

class FileAttachment extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	const e_Graph = 0;

	const e_PushPin = FileAttachment_e_PushPin;

	const e_Paperclip = FileAttachment_e_Paperclip;

	const e_Tag = FileAttachment_e_Tag;

	const e_Unknown = FileAttachment_e_Unknown;

	static function Create($doc,$pos,$fs_or_path,$icon_name=null) {
		switch (func_num_args()) {
		case 3: $r=FileAttachment_Create($doc,$pos,$fs_or_path); break;
		default: $r=FileAttachment_Create($doc,$pos,$fs_or_path,$icon_name);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FileAttachment($r);
		}
		return $r;
	}

	function GetFileSpec() {
		$r=FileAttachment_GetFileSpec($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FileSpec($r);
		}
		return $r;
	}

	function SetFileSpec($file) {
		FileAttachment_SetFileSpec($this->_cPtr,$file);
	}

	function Export($save_as=null) {
		switch (func_num_args()) {
		case 0: $r=FileAttachment_Export($this->_cPtr); break;
		default: $r=FileAttachment_Export($this->_cPtr,$save_as);
		}
		return $r;
	}

	function GetIcon() {
		return FileAttachment_GetIcon($this->_cPtr);
	}

	function SetIcon($type=null) {
		switch (func_num_args()) {
		case 0: FileAttachment_SetIcon($this->_cPtr); break;
		default: FileAttachment_SetIcon($this->_cPtr,$type);
		}
	}

	function GetIconName() {
		return FileAttachment_GetIconName($this->_cPtr);
	}

	function SetIconName($iname) {
		FileAttachment_SetIconName($this->_cPtr,$iname);
	}

	function __construct($d_or_ann_or_fileattachment=null) {
		if (is_resource($d_or_ann_or_fileattachment) && get_resource_type($d_or_ann_or_fileattachment) === '_p_pdftron__PDF__Annots__FileAttachment') {
			$this->_cPtr=$d_or_ann_or_fileattachment;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FileAttachment(); break;
		default: $this->_cPtr=new_FileAttachment($d_or_ann_or_fileattachment);
		}
	}
}

class QuadPoint {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'QuadPoint_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'p1') return new Point(QuadPoint_p1_get($this->_cPtr));
		if ($var === 'p2') return new Point(QuadPoint_p2_get($this->_cPtr));
		if ($var === 'p3') return new Point(QuadPoint_p3_get($this->_cPtr));
		if ($var === 'p4') return new Point(QuadPoint_p4_get($this->_cPtr));
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('QuadPoint_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($p11_or_r=null,$p22=null,$p33=null,$p44=null) {
		if (is_resource($p11_or_r) && get_resource_type($p11_or_r) === '_p_pdftron__PDF__QuadPoint') {
			$this->_cPtr=$p11_or_r;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_QuadPoint(); break;
		case 1: $this->_cPtr=new_QuadPoint($p11_or_r); break;
		case 2: $this->_cPtr=new_QuadPoint($p11_or_r,$p22); break;
		case 3: $this->_cPtr=new_QuadPoint($p11_or_r,$p22,$p33); break;
		default: $this->_cPtr=new_QuadPoint($p11_or_r,$p22,$p33,$p44);
		}
	}
}

class TextMarkup extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	function GetQuadPointCount() {
		return TextMarkup_GetQuadPointCount($this->_cPtr);
	}

	function GetQuadPoint($idx) {
		$r=TextMarkup_GetQuadPoint($this->_cPtr,$idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new QuadPoint($r);
		}
		return $r;
	}

	function SetQuadPoint($idx,$qp) {
		TextMarkup_SetQuadPoint($this->_cPtr,$idx,$qp);
	}

	function __construct($d_or_ann_or_textmarkup) {
		if (is_resource($d_or_ann_or_textmarkup) && get_resource_type($d_or_ann_or_textmarkup) === '_p_pdftron__PDF__Annots__TextMarkup') {
			$this->_cPtr=$d_or_ann_or_textmarkup;
			return;
		}
		$this->_cPtr=new_TextMarkup($d_or_ann_or_textmarkup);
	}
}

class Ink extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Ink_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Ink($r);
		}
		return $r;
	}

	function GetPathCount() {
		return Ink_GetPathCount($this->_cPtr);
	}

	function GetPointCount($pathindex) {
		return Ink_GetPointCount($this->_cPtr,$pathindex);
	}

	function GetPoint($pathindex,$pointindex) {
		$r=Ink_GetPoint($this->_cPtr,$pathindex,$pointindex);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetPoint($pathindex,$pointindex,$pt) {
		Ink_SetPoint($this->_cPtr,$pathindex,$pointindex,$pt);
	}

	function Erase($pt1,$pt2,$width) {
		return Ink_Erase($this->_cPtr,$pt1,$pt2,$width);
	}

	function GetHighlightIntent() {
		return Ink_GetHighlightIntent($this->_cPtr);
	}

	function SetHighlightIntent($highlight) {
		Ink_SetHighlightIntent($this->_cPtr,$highlight);
	}

	function __construct($d_or_ann_or_ink=null) {
		if (is_resource($d_or_ann_or_ink) && get_resource_type($d_or_ann_or_ink) === '_p_pdftron__PDF__Annots__Ink') {
			$this->_cPtr=$d_or_ann_or_ink;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Ink(); break;
		default: $this->_cPtr=new_Ink($d_or_ann_or_ink);
		}
	}
}

class Destination {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_dest') return Destination_mp_dest_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_dest') return Destination_mp_dest_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Destination_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_XYZ = 0;

	const e_Fit = Destination_e_Fit;

	const e_FitH = Destination_e_FitH;

	const e_FitV = Destination_e_FitV;

	const e_FitR = Destination_e_FitR;

	const e_FitB = Destination_e_FitB;

	const e_FitBH = Destination_e_FitBH;

	const e_FitBV = Destination_e_FitBV;

	static function CreateXYZ($page,$left,$top,$zoom) {
		$r=Destination_CreateXYZ($page,$left,$top,$zoom);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFit($page) {
		$r=Destination_CreateFit($page);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFitH($page,$top) {
		$r=Destination_CreateFitH($page,$top);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFitV($page,$left) {
		$r=Destination_CreateFitV($page,$left);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFitR($page,$left,$bottom,$right,$top) {
		$r=Destination_CreateFitR($page,$left,$bottom,$right,$top);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFitB($page) {
		$r=Destination_CreateFitB($page);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFitBH($page,$top) {
		$r=Destination_CreateFitBH($page,$top);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	static function CreateFitBV($page,$left) {
		$r=Destination_CreateFitBV($page,$left);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	function IsValid() {
		return Destination_IsValid($this->_cPtr);
	}

	function GetFitType() {
		return Destination_GetFitType($this->_cPtr);
	}

	function GetPage() {
		$r=Destination_GetPage($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function SetPage($page) {
		Destination_SetPage($this->_cPtr,$page);
	}

	function GetSDFObj() {
		$r=Destination_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetExplicitDestObj() {
		$r=Destination_GetExplicitDestObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($dest_or_d_or_impl=null) {
		if (is_resource($dest_or_d_or_impl) && get_resource_type($dest_or_d_or_impl) === '_p_pdftron__PDF__Destination') {
			$this->_cPtr=$dest_or_d_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Destination(); break;
		default: $this->_cPtr=new_Destination($dest_or_d_or_impl);
		}
	}
}

class Action {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_action') return Action_mp_action_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_action') return Action_mp_action_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Action_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function CreateGoto($dest_or_key,$key_sz=null,$dest=null) {
		switch (func_num_args()) {
		case 1: $r=Action_CreateGoto($dest_or_key); break;
		case 2: $r=Action_CreateGoto($dest_or_key,$key_sz); break;
		default: $r=Action_CreateGoto($dest_or_key,$key_sz,$dest);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateGotoRemote($file,$page_num,$new_window=null) {
		switch (func_num_args()) {
		case 2: $r=Action_CreateGotoRemote($file,$page_num); break;
		default: $r=Action_CreateGotoRemote($file,$page_num,$new_window);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateURI($doc,$uri) {
		$r=Action_CreateURI($doc,$uri);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateSubmitForm($url) {
		$r=Action_CreateSubmitForm($url);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateLaunch($doc,$path) {
		$r=Action_CreateLaunch($doc,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateHideField($sdfdoc,$list_length,$field) {
		$r=Action_CreateHideField($sdfdoc,$list_length,$field);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateImportData($doc,$path) {
		$r=Action_CreateImportData($doc,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateResetForm($doc) {
		$r=Action_CreateResetForm($doc);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	static function CreateJavaScript($doc,$script) {
		$r=Action_CreateJavaScript($doc,$script);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function IsEqual($in_action) {
		return Action_IsEqual($this->_cPtr,$in_action);
	}

	function IsValid() {
		return Action_IsValid($this->_cPtr);
	}

	const e_GoTo = 0;

	const e_GoToR = Action_e_GoToR;

	const e_GoToE = Action_e_GoToE;

	const e_Launch = Action_e_Launch;

	const e_Thread = Action_e_Thread;

	const e_URI = Action_e_URI;

	const e_Sound = Action_e_Sound;

	const e_Movie = Action_e_Movie;

	const e_Hide = Action_e_Hide;

	const e_Named = Action_e_Named;

	const e_SubmitForm = Action_e_SubmitForm;

	const e_ResetForm = Action_e_ResetForm;

	const e_ImportData = Action_e_ImportData;

	const e_JavaScript = Action_e_JavaScript;

	const e_SetOCGState = Action_e_SetOCGState;

	const e_Rendition = Action_e_Rendition;

	const e_Trans = Action_e_Trans;

	const e_GoTo3DView = Action_e_GoTo3DView;

	const e_RichMediaExecute = Action_e_RichMediaExecute;

	const e_Unknown = Action_e_Unknown;

	function GetType() {
		return Action_GetType($this->_cPtr);
	}

	function Execute() {
		Action_Execute($this->_cPtr);
	}

	function ExecuteKeyStrokeAction($data) {
		return Action_ExecuteKeyStrokeAction($this->_cPtr,$data);
	}

	function NeedsWriteLock() {
		return Action_NeedsWriteLock($this->_cPtr);
	}

	function GetNext() {
		$r=Action_GetNext($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetDest() {
		$r=Action_GetDest($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Destination($r);
		}
		return $r;
	}

	const e_exclude = 0;

	const e_include_no_value_fields = 1;

	const e_export_format = 2;

	const e_get_method = 3;

	const e_submit_coordinates = 4;

	const e_xfdf = 5;

	const e_include_append_saves = 6;

	const e_include_annotations = 7;

	const e_submit_pdf = 8;

	const e_canonical_format = 9;

	const e_excl_non_user_annots = 10;

	const e_excl_F_key = 11;

	const e_embed_form = 13;

	function GetFormActionFlag($flag) {
		return Action_GetFormActionFlag($this->_cPtr,$flag);
	}

	function SetFormActionFlag($flag,$value) {
		Action_SetFormActionFlag($this->_cPtr,$flag,$value);
	}

	function GetSDFObj() {
		$r=Action_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	static function CreateInternal($impl) {
		$r=Action_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return Action_GetHandleInternal($this->_cPtr);
	}

	function __construct($in_obj_or_in_action_or_impl=null) {
		if (is_resource($in_obj_or_in_action_or_impl) && get_resource_type($in_obj_or_in_action_or_impl) === '_p_pdftron__PDF__Action') {
			$this->_cPtr=$in_obj_or_in_action_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Action(); break;
		default: $this->_cPtr=new_Action($in_obj_or_in_action_or_impl);
		}
	}
}

class PageSet {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return PageSet_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return PageSet_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PageSet_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_all = 0;

	const e_even = PageSet_e_even;

	const e_odd = PageSet_e_odd;

	function AddPage($one_page) {
		PageSet_AddPage($this->_cPtr,$one_page);
	}

	function AddRange($range_start,$range_end,$filter=null) {
		switch (func_num_args()) {
		case 2: PageSet_AddRange($this->_cPtr,$range_start,$range_end); break;
		default: PageSet_AddRange($this->_cPtr,$range_start,$range_end,$filter);
		}
	}

	function Destroy() {
		PageSet_Destroy($this->_cPtr);
	}

	function __construct($one_page_or_range_start_or_impl=null,$range_end=null,$filter=null) {
		if (is_resource($one_page_or_range_start_or_impl) && get_resource_type($one_page_or_range_start_or_impl) === '_p_pdftron__PDF__PageSet') {
			$this->_cPtr=$one_page_or_range_start_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PageSet(); break;
		case 1: $this->_cPtr=new_PageSet($one_page_or_range_start_or_impl); break;
		case 2: $this->_cPtr=new_PageSet($one_page_or_range_start_or_impl,$range_end); break;
		default: $this->_cPtr=new_PageSet($one_page_or_range_start_or_impl,$range_end,$filter);
		}
	}
}

class Config {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_obj') return Config_mp_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_obj') return Config_mp_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Config_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc,$default_config) {
		$r=Config_Create($doc,$default_config);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Config($r);
		}
		return $r;
	}

	function IsValid() {
		return Config_IsValid($this->_cPtr);
	}

	function GetOrder() {
		$r=Config_GetOrder($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetOrder($ocgs_array) {
		Config_SetOrder($this->_cPtr,$ocgs_array);
	}

	function GetName() {
		return Config_GetName($this->_cPtr);
	}

	function SetName($name) {
		Config_SetName($this->_cPtr,$name);
	}

	function GetCreator() {
		return Config_GetCreator($this->_cPtr);
	}

	function SetCreator($name) {
		Config_SetCreator($this->_cPtr,$name);
	}

	function GetInitBaseState() {
		return Config_GetInitBaseState($this->_cPtr);
	}

	function GetInitOnStates() {
		$r=Config_GetInitOnStates($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetInitOffStates() {
		$r=Config_GetInitOffStates($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetInitBaseState($state="ON") {
		Config_SetInitBaseState($this->_cPtr,$state);
	}

	function SetInitOnStates($on_array) {
		Config_SetInitOnStates($this->_cPtr,$on_array);
	}

	function SetInitOffStates($off_array) {
		Config_SetInitOffStates($this->_cPtr,$off_array);
	}

	function GetIntent() {
		$r=Config_GetIntent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetIntent($intent) {
		Config_SetIntent($this->_cPtr,$intent);
	}

	function GetLockedOCGs() {
		$r=Config_GetLockedOCGs($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetLockedOCGs($locked_ocg_array) {
		Config_SetLockedOCGs($this->_cPtr,$locked_ocg_array);
	}

	function GetSDFObj() {
		$r=Config_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($ocg_config_or_g_or_c) {
		if (is_resource($ocg_config_or_g_or_c) && get_resource_type($ocg_config_or_g_or_c) === '_p_pdftron__PDF__OCG__Config') {
			$this->_cPtr=$ocg_config_or_g_or_c;
			return;
		}
		$this->_cPtr=new_Config($ocg_config_or_g_or_c);
	}
}

class Group {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_obj') return Group_mp_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_obj') return Group_mp_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Group_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc,$name) {
		$r=Group_Create($doc,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Group($r);
		}
		return $r;
	}

	function IsValid() {
		return Group_IsValid($this->_cPtr);
	}

	function GetName() {
		return Group_GetName($this->_cPtr);
	}

	function SetName($name) {
		Group_SetName($this->_cPtr,$name);
	}

	function GetCurrentState($context) {
		return Group_GetCurrentState($this->_cPtr,$context);
	}

	function SetCurrentState($context,$state) {
		Group_SetCurrentState($this->_cPtr,$context,$state);
	}

	function GetInitialState($config) {
		return Group_GetInitialState($this->_cPtr,$config);
	}

	function SetInitialState($config,$state) {
		Group_SetInitialState($this->_cPtr,$config,$state);
	}

	function GetIntent() {
		$r=Group_GetIntent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetIntent($intent) {
		Group_SetIntent($this->_cPtr,$intent);
	}

	function IsLocked($config) {
		return Group_IsLocked($this->_cPtr,$config);
	}

	function SetLocked($config,$locked) {
		Group_SetLocked($this->_cPtr,$config,$locked);
	}

	function HasUsage() {
		return Group_HasUsage($this->_cPtr);
	}

	function GetUsage($key) {
		$r=Group_GetUsage($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=Group_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($ocg_or_g) {
		if (is_resource($ocg_or_g) && get_resource_type($ocg_or_g) === '_p_pdftron__PDF__OCG__Group') {
			$this->_cPtr=$ocg_or_g;
			return;
		}
		$this->_cPtr=new_Group($ocg_or_g);
	}
}

class Context {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_obj') return Context_mp_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_obj') return Context_mp_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Context_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function IsValid() {
		return Context_IsValid($this->_cPtr);
	}

	function GetState($group) {
		return Context_GetState($this->_cPtr,$group);
	}

	function SetState($group,$state) {
		Context_SetState($this->_cPtr,$group,$state);
	}

	function ResetStates($all_on) {
		Context_ResetStates($this->_cPtr,$all_on);
	}

	function SetNonOCDrawing($draw_non_OC) {
		Context_SetNonOCDrawing($this->_cPtr,$draw_non_OC);
	}

	function GetNonOCDrawing() {
		return Context_GetNonOCDrawing($this->_cPtr);
	}

	const e_VisibleOC = 0;

	const e_AllOC = Context_e_AllOC;

	const e_NoOC = Context_e_NoOC;

	function SetOCDrawMode($oc_draw_mode) {
		Context_SetOCDrawMode($this->_cPtr,$oc_draw_mode);
	}

	function GetOCMode() {
		return Context_GetOCMode($this->_cPtr);
	}

	function Destroy() {
		Context_Destroy($this->_cPtr);
	}

	static function CreateInternal($impl) {
		$r=Context_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Context($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return Context_GetHandleInternal($this->_cPtr);
	}

	function __construct($context_or_config_or_ctx) {
		if (is_resource($context_or_config_or_ctx) && get_resource_type($context_or_config_or_ctx) === '_p_pdftron__PDF__OCG__Context') {
			$this->_cPtr=$context_or_config_or_ctx;
			return;
		}
		$this->_cPtr=new_Context($context_or_config_or_ctx);
	}
}

class OCMD {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_obj') return OCMD_mp_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_obj') return OCMD_mp_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('OCMD_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_AllOn = 0;

	const e_AnyOn = OCMD_e_AnyOn;

	const e_AnyOff = OCMD_e_AnyOff;

	const e_AllOff = OCMD_e_AllOff;

	static function Create($doc,$ocgs,$vis_policy) {
		$r=OCMD_Create($doc,$ocgs,$vis_policy);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCMD($r);
		}
		return $r;
	}

	function IsValid() {
		return OCMD_IsValid($this->_cPtr);
	}

	function GetOCGs() {
		$r=OCMD_GetOCGs($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetVisibilityPolicy() {
		return OCMD_GetVisibilityPolicy($this->_cPtr);
	}

	function SetVisibilityPolicy($vis_policy) {
		OCMD_SetVisibilityPolicy($this->_cPtr,$vis_policy);
	}

	function GetVisibilityExpression() {
		$r=OCMD_GetVisibilityExpression($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function IsCurrentlyVisible($context) {
		return OCMD_IsCurrentlyVisible($this->_cPtr,$context);
	}

	function GetSDFObj() {
		$r=OCMD_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($ocmd_or_g_or_o) {
		if (is_resource($ocmd_or_g_or_o) && get_resource_type($ocmd_or_g_or_o) === '_p_pdftron__PDF__OCG__OCMD') {
			$this->_cPtr=$ocmd_or_g_or_o;
			return;
		}
		$this->_cPtr=new_OCMD($ocmd_or_g_or_o);
	}
}

class PDFACompliance {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_pdfac') return PDFACompliance_mp_pdfac_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_pdfac') return PDFACompliance_mp_pdfac_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFACompliance_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_NoConformance = 0;

	const e_Level1A = PDFACompliance_e_Level1A;

	const e_Level1B = PDFACompliance_e_Level1B;

	const e_Level2A = PDFACompliance_e_Level2A;

	const e_Level2B = PDFACompliance_e_Level2B;

	const e_Level2U = PDFACompliance_e_Level2U;

	const e_Level3A = PDFACompliance_e_Level3A;

	const e_Level3B = PDFACompliance_e_Level3B;

	const e_Level3U = PDFACompliance_e_Level3U;

	const e_PDFA0_1_0 = 10;

	const e_PDFA0_1_1 = 11;

	const e_PDFA0_1_2 = 12;

	const e_PDFA0_1_3 = 13;

	const e_PDFA0_1_4 = 14;

	const e_PDFA0_1_5 = 15;

	const e_PDFA1_2_1 = 121;

	const e_PDFA1_2_2 = 122;

	const e_PDFA1_3_1 = 131;

	const e_PDFA1_3_2 = 132;

	const e_PDFA1_3_3 = 133;

	const e_PDFA1_3_4 = 134;

	const e_PDFA1_4_1 = 141;

	const e_PDFA1_4_2 = 142;

	const e_PDFA1_6_1 = 161;

	const e_PDFA1_7_1 = 171;

	const e_PDFA1_7_2 = 172;

	const e_PDFA1_7_3 = 173;

	const e_PDFA1_7_4 = 174;

	const e_PDFA1_8_1 = 181;

	const e_PDFA1_8_2 = 182;

	const e_PDFA1_8_3 = 183;

	const e_PDFA1_8_4 = 184;

	const e_PDFA1_8_5 = 185;

	const e_PDFA1_8_6 = 186;

	const e_PDFA1_8_7 = 187;

	const e_PDFA1_10_1 = 1101;

	const e_PDFA1_11_1 = 1111;

	const e_PDFA1_11_2 = 1112;

	const e_PDFA1_12_1 = 1121;

	const e_PDFA1_12_2 = 1122;

	const e_PDFA1_12_3 = 1123;

	const e_PDFA1_12_4 = 1124;

	const e_PDFA1_12_5 = 1125;

	const e_PDFA1_12_6 = 1126;

	const e_PDFA1_13_1 = 1131;

	const e_PDFA2_2_1 = 221;

	const e_PDFA2_3_2 = 232;

	const e_PDFA2_3_3 = 233;

	const e_PDFA2_3_3_1 = 2331;

	const e_PDFA2_3_3_2 = 2332;

	const e_PDFA2_3_4_1 = 2341;

	const e_PDFA2_4_1 = 241;

	const e_PDFA2_4_2 = 242;

	const e_PDFA2_4_3 = 243;

	const e_PDFA2_4_4 = 244;

	const e_PDFA2_5_1 = 251;

	const e_PDFA2_5_2 = 252;

	const e_PDFA2_6_1 = 261;

	const e_PDFA2_7_1 = 271;

	const e_PDFA2_8_1 = 281;

	const e_PDFA2_9_1 = 291;

	const e_PDFA2_10_1 = 2101;

	const e_PDFA3_2_1 = 321;

	const e_PDFA3_3_1 = 331;

	const e_PDFA3_3_2 = 332;

	const e_PDFA3_3_3_1 = 3331;

	const e_PDFA3_3_3_2 = 3332;

	const e_PDFA3_4_1 = 341;

	const e_PDFA3_5_1 = 351;

	const e_PDFA3_5_2 = 352;

	const e_PDFA3_5_3 = 353;

	const e_PDFA3_5_4 = 354;

	const e_PDFA3_5_5 = 355;

	const e_PDFA3_5_6 = 356;

	const e_PDFA3_6_1 = 361;

	const e_PDFA3_7_1 = 371;

	const e_PDFA3_7_2 = 372;

	const e_PDFA3_7_3 = 373;

	const e_PDFA4_1 = 41;

	const e_PDFA4_2 = 42;

	const e_PDFA4_3 = 43;

	const e_PDFA4_4 = 44;

	const e_PDFA4_5 = 45;

	const e_PDFA4_6 = 46;

	const e_PDFA5_2_1 = 521;

	const e_PDFA5_2_2 = 522;

	const e_PDFA5_2_3 = 523;

	const e_PDFA5_2_4 = 524;

	const e_PDFA5_2_5 = 525;

	const e_PDFA5_2_6 = 526;

	const e_PDFA5_2_7 = 527;

	const e_PDFA5_2_8 = 528;

	const e_PDFA5_2_9 = 529;

	const e_PDFA5_2_10 = 5210;

	const e_PDFA5_2_11 = 5211;

	const e_PDFA5_3_1 = 531;

	const e_PDFA5_3_2_1 = 5321;

	const e_PDFA5_3_2_2 = 5322;

	const e_PDFA5_3_2_3 = 5323;

	const e_PDFA5_3_2_4 = 5324;

	const e_PDFA5_3_2_5 = 5325;

	const e_PDFA5_3_3_1 = 5331;

	const e_PDFA5_3_3_2 = 5332;

	const e_PDFA5_3_3_3 = 5333;

	const e_PDFA5_3_3_4 = 5334;

	const e_PDFA5_3_4_0 = 5340;

	const e_PDFA5_3_4_1 = 5341;

	const e_PDFA5_3_4_2 = 5342;

	const e_PDFA5_3_4_3 = 5343;

	const e_PDFA6_1_1 = 611;

	const e_PDFA6_1_2 = 612;

	const e_PDFA6_2_1 = 621;

	const e_PDFA6_2_2 = 622;

	const e_PDFA6_2_3 = 623;

	const e_PDFA7_2_1 = 721;

	const e_PDFA7_2_2 = 722;

	const e_PDFA7_2_3 = 723;

	const e_PDFA7_2_4 = 724;

	const e_PDFA7_2_5 = 725;

	const e_PDFA7_3_1 = 731;

	const e_PDFA7_3_2 = 732;

	const e_PDFA7_3_3 = 733;

	const e_PDFA7_3_4 = 734;

	const e_PDFA7_3_5 = 735;

	const e_PDFA7_3_6 = 736;

	const e_PDFA7_3_7 = 737;

	const e_PDFA7_3_8 = 738;

	const e_PDFA7_3_9 = 739;

	const e_PDFA7_5_1 = 751;

	const e_PDFA7_8_1 = 781;

	const e_PDFA7_8_2 = 782;

	const e_PDFA7_8_3 = 783;

	const e_PDFA7_8_4 = 784;

	const e_PDFA7_8_5 = 785;

	const e_PDFA7_8_6 = 786;

	const e_PDFA7_8_7 = 787;

	const e_PDFA7_8_8 = 788;

	const e_PDFA7_8_9 = 789;

	const e_PDFA7_8_10 = 7810;

	const e_PDFA7_8_11 = 7811;

	const e_PDFA7_8_12 = 7812;

	const e_PDFA7_8_13 = 7813;

	const e_PDFA7_8_14 = 7814;

	const e_PDFA7_8_15 = 7815;

	const e_PDFA7_8_16 = 7816;

	const e_PDFA7_8_17 = 7817;

	const e_PDFA7_8_18 = 7818;

	const e_PDFA7_8_19 = 7819;

	const e_PDFA7_8_20 = 7820;

	const e_PDFA7_8_21 = 7821;

	const e_PDFA7_8_22 = 7822;

	const e_PDFA7_8_23 = 7823;

	const e_PDFA7_8_24 = 7824;

	const e_PDFA7_8_25 = 7825;

	const e_PDFA7_8_26 = 7826;

	const e_PDFA7_8_27 = 7827;

	const e_PDFA7_8_28 = 7828;

	const e_PDFA7_8_29 = 7829;

	const e_PDFA7_8_30 = 7830;

	const e_PDFA7_8_31 = 7831;

	const e_PDFA7_11_1 = 7111;

	const e_PDFA7_11_2 = 7112;

	const e_PDFA7_11_3 = 7113;

	const e_PDFA7_11_4 = 7114;

	const e_PDFA7_11_5 = 7115;

	const e_PDFA9_1 = 91;

	const e_PDFA9_2 = 92;

	const e_PDFA9_3 = 93;

	const e_PDFA9_4 = 94;

	const e_PDFA3_8_1 = 381;

	const e_PDFA8_2_2 = 822;

	const e_PDFA8_3_3_1 = 8331;

	const e_PDFA8_3_3_2 = 8332;

	const e_PDFA8_3_4_1 = 8341;

	const e_PDFA1_2_3 = 123;

	const e_PDFA1_10_2 = 1102;

	const e_PDFA1_10_3 = 1103;

	const e_PDFA1_12_10 = 11210;

	const e_PDFA1_13_5 = 1135;

	const e_PDFA2_3_10 = 2310;

	const e_PDFA2_4_2_10 = 24220;

	const e_PDFA2_4_2_11 = 24221;

	const e_PDFA2_4_2_12 = 24222;

	const e_PDFA2_4_2_13 = 24223;

	const e_PDFA2_5_10 = 2510;

	const e_PDFA2_5_11 = 2511;

	const e_PDFA2_5_12 = 2512;

	const e_PDFA2_8_3_1 = 2831;

	const e_PDFA2_8_3_2 = 2832;

	const e_PDFA2_8_3_3 = 2833;

	const e_PDFA2_8_3_4 = 2834;

	const e_PDFA2_8_3_5 = 2835;

	const e_PDFA2_10_20 = 21020;

	const e_PDFA2_10_21 = 21021;

	const e_PDFA11_0_0 = 11000;

	const e_PDFA6_10_0 = 6100;

	const e_PDFA6_10_1 = 6101;

	const e_PDFA6_2_11_5 = 62115;

	const e_PDFA6_2_11_6 = 62116;

	const e_PDFA6_2_11_7 = 62117;

	const e_PDFA6_2_11_8 = 62118;

	const e_PDFA6_9_1 = 69001;

	const e_PDFA6_9_3 = 69003;

	const e_PDFA8_1 = 81;

	const e_PDFA_3E1 = 1;

	const e_PDFA_3E1_1 = 101;

	const e_PDFA_3E2 = 2;

	const e_PDFA_3E3 = 3;

	const e_PDFA_LAST = PDFACompliance_e_PDFA_LAST;

	function SaveAs($file_path_or_linearized=false,$linearized=false) {
		$r=PDFACompliance_SaveAs($this->_cPtr,$file_path_or_linearized,$linearized);
		if (!is_resource($r)) return $r;
		switch (get_resource_type($r)) {
		case '_p_std__vectorT_unsigned_char_t': return new VectorUChar($r);
		default: return $r;
		}
	}

	function GetErrorCount() {
		return PDFACompliance_GetErrorCount($this->_cPtr);
	}

	function GetError($idx) {
		return PDFACompliance_GetError($this->_cPtr,$idx);
	}

	function GetRefObjCount($id) {
		return PDFACompliance_GetRefObjCount($this->_cPtr,$id);
	}

	function GetRefObj($id,$err_idx) {
		return PDFACompliance_GetRefObj($this->_cPtr,$id,$err_idx);
	}

	static function GetPDFAErrorMessage($id) {
		return PDFACompliance_GetPDFAErrorMessage($id);
	}

	static function GetDeclaredConformance($in_doc) {
		return PDFACompliance_GetDeclaredConformance($in_doc);
	}

	function Destroy() {
		PDFACompliance_Destroy($this->_cPtr);
	}

	function __construct($convert_or_impl,$file_path_or_buf=null,$password_or_buf_size=null,$conf_or_password=null,$exceptions_or_conf=null,$num_exceptions_or_exceptions=null,$max_ref_objs_or_num_exceptions=null,$first_stop_or_max_ref_objs=null,$first_stop=null) {
		if (is_resource($convert_or_impl) && get_resource_type($convert_or_impl) === '_p_pdftron__PDF__PDFA__PDFACompliance') {
			$this->_cPtr=$convert_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 1: $this->_cPtr=new_PDFACompliance($convert_or_impl); break;
		case 2: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf); break;
		case 3: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size); break;
		case 4: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size,$conf_or_password); break;
		case 5: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size,$conf_or_password,$exceptions_or_conf); break;
		case 6: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size,$conf_or_password,$exceptions_or_conf,$num_exceptions_or_exceptions); break;
		case 7: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size,$conf_or_password,$exceptions_or_conf,$num_exceptions_or_exceptions,$max_ref_objs_or_num_exceptions); break;
		case 8: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size,$conf_or_password,$exceptions_or_conf,$num_exceptions_or_exceptions,$max_ref_objs_or_num_exceptions,$first_stop_or_max_ref_objs); break;
		default: $this->_cPtr=new_PDFACompliance($convert_or_impl,$file_path_or_buf,$password_or_buf_size,$conf_or_password,$exceptions_or_conf,$num_exceptions_or_exceptions,$max_ref_objs_or_num_exceptions,$first_stop_or_max_ref_objs,$first_stop);
		}
	}
}

class AttrObj {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($dict_or_a=null) {
		if (is_resource($dict_or_a) && get_resource_type($dict_or_a) === '_p_pdftron__PDF__Struct__AttrObj') {
			$this->_cPtr=$dict_or_a;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_AttrObj(); break;
		default: $this->_cPtr=new_AttrObj($dict_or_a);
		}
	}

	function GetOwner() {
		return AttrObj_GetOwner($this->_cPtr);
	}

	function GetSDFObj() {
		$r=AttrObj_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class ClassMap {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function IsValid() {
		return ClassMap_IsValid($this->_cPtr);
	}

	function GetSDFObj() {
		$r=ClassMap_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($dict_or_p_or_impl=null) {
		if (is_resource($dict_or_p_or_impl) && get_resource_type($dict_or_p_or_impl) === '_p_pdftron__PDF__Struct__ClassMap') {
			$this->_cPtr=$dict_or_p_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ClassMap(); break;
		default: $this->_cPtr=new_ClassMap($dict_or_p_or_impl);
		}
	}
}

class ContentItem {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_item') return ContentItem_mp_item_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_item') return ContentItem_mp_item_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ContentItem_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_MCR = 0;

	const e_MCID = ContentItem_e_MCID;

	const e_OBJR = ContentItem_e_OBJR;

	const e_Unknown = ContentItem_e_Unknown;

	function GetType() {
		return ContentItem_GetType($this->_cPtr);
	}

	function GetParent() {
		$r=ContentItem_GetParent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function GetPage() {
		$r=ContentItem_GetPage($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=ContentItem_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetMCID() {
		return ContentItem_GetMCID($this->_cPtr);
	}

	function GetContainingStm() {
		$r=ContentItem_GetContainingStm($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetStmOwner() {
		$r=ContentItem_GetStmOwner($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetRefObj() {
		$r=ContentItem_GetRefObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($impl) {
		if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Struct__ContentItem') {
			$this->_cPtr=$impl;
			return;
		}
		$this->_cPtr=new_ContentItem($impl);
	}
}

class RoleMap {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function IsValid() {
		return RoleMap_IsValid($this->_cPtr);
	}

	function GetDirectMap($type) {
		return RoleMap_GetDirectMap($this->_cPtr,$type);
	}

	function GetSDFObj() {
		$r=RoleMap_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($dict_or_p_or_impl) {
		if (is_resource($dict_or_p_or_impl) && get_resource_type($dict_or_p_or_impl) === '_p_pdftron__PDF__Struct__RoleMap') {
			$this->_cPtr=$dict_or_p_or_impl;
			return;
		}
		$this->_cPtr=new_RoleMap($dict_or_p_or_impl);
	}
}

class STree {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc) {
		$r=STree_Create($doc);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new STree($r);
		}
		return $r;
	}

	function Insert($kid,$insert_before) {
		STree_Insert($this->_cPtr,$kid,$insert_before);
	}

	function IsValid() {
		return STree_IsValid($this->_cPtr);
	}

	function GetNumKids() {
		return STree_GetNumKids($this->_cPtr);
	}

	function GetKid($index) {
		$r=STree_GetKid($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function GetElement($id_buf,$id_buf_sz) {
		$r=STree_GetElement($this->_cPtr,$id_buf,$id_buf_sz);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function GetRoleMap() {
		$r=STree_GetRoleMap($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RoleMap($r);
		}
		return $r;
	}

	function GetClassMap() {
		$r=STree_GetClassMap($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ClassMap($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=STree_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($struct_dict_or_impl=null) {
		if (is_resource($struct_dict_or_impl) && get_resource_type($struct_dict_or_impl) === '_p_pdftron__PDF__Struct__STree') {
			$this->_cPtr=$struct_dict_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_STree(); break;
		default: $this->_cPtr=new_STree($struct_dict_or_impl);
		}
	}
}

class SElement {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_elem') return SElement_mp_elem_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_elem') return SElement_mp_elem_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('SElement_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc,$struct_type) {
		$r=SElement_Create($doc,$struct_type);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function Insert($kid,$insert_before) {
		SElement_Insert($this->_cPtr,$kid,$insert_before);
	}

	function CreateContentItem($doc,$page,$insert_before=-1) {
		return SElement_CreateContentItem($this->_cPtr,$doc,$page,$insert_before);
	}

	function IsValid() {
		return SElement_IsValid($this->_cPtr);
	}

	function GetType() {
		return SElement_GetType($this->_cPtr);
	}

	function GetNumKids() {
		return SElement_GetNumKids($this->_cPtr);
	}

	function IsContentItem($index) {
		return SElement_IsContentItem($this->_cPtr,$index);
	}

	function GetAsContentItem($index) {
		$r=SElement_GetAsContentItem($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ContentItem($r);
		}
		return $r;
	}

	function GetAsStructElem($index) {
		$r=SElement_GetAsStructElem($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function GetParent() {
		$r=SElement_GetParent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function GetStructTreeRoot() {
		$r=SElement_GetStructTreeRoot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new STree($r);
		}
		return $r;
	}

	function HasTitle() {
		return SElement_HasTitle($this->_cPtr);
	}

	function GetTitle() {
		return SElement_GetTitle($this->_cPtr);
	}

	function GetID() {
		$r=SElement_GetID($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function HasActualText() {
		return SElement_HasActualText($this->_cPtr);
	}

	function GetActualText() {
		return SElement_GetActualText($this->_cPtr);
	}

	function HasAlt() {
		return SElement_HasAlt($this->_cPtr);
	}

	function GetAlt() {
		return SElement_GetAlt($this->_cPtr);
	}

	function GetSDFObj() {
		$r=SElement_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($dict_or_impl=null) {
		if (is_resource($dict_or_impl) && get_resource_type($dict_or_impl) === '_p_pdftron__PDF__Struct__SElement') {
			$this->_cPtr=$dict_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_SElement(); break;
		default: $this->_cPtr=new_SElement($dict_or_impl);
		}
	}
}

class Bookmark {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_obj') return Bookmark_mp_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_obj') return Bookmark_mp_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Bookmark_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($in_doc,$in_title) {
		$r=Bookmark_Create($in_doc,$in_title);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function IsEqual($in_bookmark) {
		return Bookmark_IsEqual($this->_cPtr,$in_bookmark);
	}

	function IsValid() {
		return Bookmark_IsValid($this->_cPtr);
	}

	function HasChildren() {
		return Bookmark_HasChildren($this->_cPtr);
	}

	function GetNext() {
		$r=Bookmark_GetNext($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function GetPrev() {
		$r=Bookmark_GetPrev($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function GetFirstChild() {
		$r=Bookmark_GetFirstChild($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function GetLastChild() {
		$r=Bookmark_GetLastChild($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function GetParent() {
		$r=Bookmark_GetParent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function Find($in_title) {
		$r=Bookmark_Find($this->_cPtr,$in_title);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function AddChild($in_title_or_in_bookmark) {
		$r=Bookmark_AddChild($this->_cPtr,$in_title_or_in_bookmark);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function AddNext($in_title_or_in_bookmark) {
		return Bookmark_AddNext($this->_cPtr,$in_title_or_in_bookmark);
	}

	function AddPrev($in_title_or_in_bookmark) {
		return Bookmark_AddPrev($this->_cPtr,$in_title_or_in_bookmark);
	}

	function Delete() {
		Bookmark_Delete($this->_cPtr);
	}

	function Unlink() {
		Bookmark_Unlink($this->_cPtr);
	}

	function GetIndent() {
		return Bookmark_GetIndent($this->_cPtr);
	}

	function IsOpen() {
		return Bookmark_IsOpen($this->_cPtr);
	}

	function SetOpen($in_open) {
		Bookmark_SetOpen($this->_cPtr,$in_open);
	}

	function GetOpenCount() {
		return Bookmark_GetOpenCount($this->_cPtr);
	}

	function GetTitle() {
		return Bookmark_GetTitle($this->_cPtr);
	}

	function GetTitleObj() {
		$r=Bookmark_GetTitleObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetTitle($title) {
		Bookmark_SetTitle($this->_cPtr,$title);
	}

	function GetAction() {
		$r=Bookmark_GetAction($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function SetAction($in_action) {
		Bookmark_SetAction($this->_cPtr,$in_action);
	}

	function RemoveAction() {
		Bookmark_RemoveAction($this->_cPtr);
	}

	function GetFlags() {
		return Bookmark_GetFlags($this->_cPtr);
	}

	function SetFlags($in_flags) {
		Bookmark_SetFlags($this->_cPtr,$in_flags);
	}

	function GetColor() {
		$r=Bookmark_GetColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function SetColor($in_r=0.0,$in_g=0.0,$in_b=0.0) {
		Bookmark_SetColor($this->_cPtr,$in_r,$in_g,$in_b);
	}

	function GetSDFObj() {
		$r=Bookmark_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	static function CreateInternal($impl) {
		$r=Bookmark_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return Bookmark_GetHandleInternal($this->_cPtr);
	}

	function __construct($in_bookmark_dict_or_in_bookmark_or_impl=null) {
		if (is_resource($in_bookmark_dict_or_in_bookmark_or_impl) && get_resource_type($in_bookmark_dict_or_in_bookmark_or_impl) === '_p_pdftron__PDF__Bookmark') {
			$this->_cPtr=$in_bookmark_dict_or_in_bookmark_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Bookmark(); break;
		default: $this->_cPtr=new_Bookmark($in_bookmark_dict_or_in_bookmark_or_impl);
		}
	}
}

class ContentReplacer {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return ContentReplacer_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return ContentReplacer_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ContentReplacer_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ContentReplacer') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ContentReplacer();
	}

	function AddImage($target_region,$replacement_image) {
		ContentReplacer_AddImage($this->_cPtr,$target_region,$replacement_image);
	}

	function AddText($target_region,$replacement_text) {
		ContentReplacer_AddText($this->_cPtr,$target_region,$replacement_text);
	}

	function AddString($template_text,$replacement_text) {
		ContentReplacer_AddString($this->_cPtr,$template_text,$replacement_text);
	}

	function SetMatchStrings($start_str,$end_str) {
		ContentReplacer_SetMatchStrings($this->_cPtr,$start_str,$end_str);
	}

	function Process($page) {
		ContentReplacer_Process($this->_cPtr,$page);
	}

	function Destroy() {
		ContentReplacer_Destroy($this->_cPtr);
	}
}

class ConversionOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($value=null) {
		if (is_resource($value) && get_resource_type($value) === '_p_pdftron__PDF__ConversionOptions') {
			$this->_cPtr=$value;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ConversionOptions(); break;
		default: $this->_cPtr=new_ConversionOptions($value);
		}
	}

	function GetFileExtension() {
		return ConversionOptions_GetFileExtension($this->_cPtr);
	}

	function SetFileExtension($value) {
		$r=ConversionOptions_SetFileExtension($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ConversionOptions($r);
		}
		return $r;
	}

	function GetInternalObj() {
		$r=ConversionOptions_GetInternalObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class OfficeToPDFOptions extends ConversionOptions {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		ConversionOptions::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return ConversionOptions::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return ConversionOptions::__isset($var);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OfficeToPDFOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_OfficeToPDFOptions();
	}

	function GetApplyPageBreaksToSheet() {
		return OfficeToPDFOptions_GetApplyPageBreaksToSheet($this->_cPtr);
	}

	function SetApplyPageBreaksToSheet($value) {
		$r=OfficeToPDFOptions_SetApplyPageBreaksToSheet($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetDisplayChangeTracking() {
		return OfficeToPDFOptions_GetDisplayChangeTracking($this->_cPtr);
	}

	function SetDisplayChangeTracking($value) {
		$r=OfficeToPDFOptions_SetDisplayChangeTracking($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetExcelDefaultCellBorderWidth() {
		return OfficeToPDFOptions_GetExcelDefaultCellBorderWidth($this->_cPtr);
	}

	function SetExcelDefaultCellBorderWidth($value) {
		$r=OfficeToPDFOptions_SetExcelDefaultCellBorderWidth($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetExcelMaxAllowedCellCount() {
		return OfficeToPDFOptions_GetExcelMaxAllowedCellCount($this->_cPtr);
	}

	function SetExcelMaxAllowedCellCount($value) {
		$r=OfficeToPDFOptions_SetExcelMaxAllowedCellCount($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetLayoutResourcesPluginPath() {
		return OfficeToPDFOptions_GetLayoutResourcesPluginPath($this->_cPtr);
	}

	function SetLayoutResourcesPluginPath($value) {
		$r=OfficeToPDFOptions_SetLayoutResourcesPluginPath($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetLocale() {
		return OfficeToPDFOptions_GetLocale($this->_cPtr);
	}

	function SetLocale($value) {
		$r=OfficeToPDFOptions_SetLocale($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetResourceDocPath() {
		return OfficeToPDFOptions_GetResourceDocPath($this->_cPtr);
	}

	function SetResourceDocPath($value) {
		$r=OfficeToPDFOptions_SetResourceDocPath($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetSmartSubstitutionPluginPath() {
		return OfficeToPDFOptions_GetSmartSubstitutionPluginPath($this->_cPtr);
	}

	function SetSmartSubstitutionPluginPath($value) {
		$r=OfficeToPDFOptions_SetSmartSubstitutionPluginPath($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetTemplateLeftDelimiter() {
		return OfficeToPDFOptions_GetTemplateLeftDelimiter($this->_cPtr);
	}

	function SetTemplateLeftDelimiter($value) {
		$r=OfficeToPDFOptions_SetTemplateLeftDelimiter($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetTemplateParamsJson() {
		return OfficeToPDFOptions_GetTemplateParamsJson($this->_cPtr);
	}

	function SetTemplateParamsJson($value) {
		$r=OfficeToPDFOptions_SetTemplateParamsJson($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}

	function GetTemplateRightDelimiter() {
		return OfficeToPDFOptions_GetTemplateRightDelimiter($this->_cPtr);
	}

	function SetTemplateRightDelimiter($value) {
		$r=OfficeToPDFOptions_SetTemplateRightDelimiter($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OfficeToPDFOptions($r);
		}
		return $r;
	}
}

class WordToPDFOptions extends ConversionOptions {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		ConversionOptions::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return ConversionOptions::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return ConversionOptions::__isset($var);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__WordToPDFOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_WordToPDFOptions();
	}

	function GetLayoutResourcesPluginPath() {
		return WordToPDFOptions_GetLayoutResourcesPluginPath($this->_cPtr);
	}

	function SetLayoutResourcesPluginPath($value) {
		$r=WordToPDFOptions_SetLayoutResourcesPluginPath($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new WordToPDFOptions($r);
		}
		return $r;
	}

	function GetResourceDocPath() {
		return WordToPDFOptions_GetResourceDocPath($this->_cPtr);
	}

	function SetResourceDocPath($value) {
		$r=WordToPDFOptions_SetResourceDocPath($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new WordToPDFOptions($r);
		}
		return $r;
	}

	function GetSmartSubstitutionPluginPath() {
		return WordToPDFOptions_GetSmartSubstitutionPluginPath($this->_cPtr);
	}

	function SetSmartSubstitutionPluginPath($value) {
		$r=WordToPDFOptions_SetSmartSubstitutionPluginPath($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new WordToPDFOptions($r);
		}
		return $r;
	}
}

class DocumentConversion {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return DocumentConversion_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return DocumentConversion_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('DocumentConversion_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const eSuccess = 0;

	const eIncomplete = 1;

	const eFailure = 2;

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__DocumentConversion') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_DocumentConversion(); break;
		default: $this->_cPtr=new_DocumentConversion($other_or_impl);
		}
	}

	function Destroy() {
		DocumentConversion_Destroy($this->_cPtr);
	}

	function TryConvert() {
		return DocumentConversion_TryConvert($this->_cPtr);
	}

	function Convert() {
		DocumentConversion_Convert($this->_cPtr);
	}

	function ConvertNextPage() {
		DocumentConversion_ConvertNextPage($this->_cPtr);
	}

	function GetDoc() {
		$r=DocumentConversion_GetDoc($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PDFDoc($r);
		}
		return $r;
	}

	function GetConversionStatus() {
		return DocumentConversion_GetConversionStatus($this->_cPtr);
	}

	function CancelConversion() {
		DocumentConversion_CancelConversion($this->_cPtr);
	}

	function IsCancelled() {
		return DocumentConversion_IsCancelled($this->_cPtr);
	}

	function HasProgressTracking() {
		return DocumentConversion_HasProgressTracking($this->_cPtr);
	}

	function GetProgress() {
		return DocumentConversion_GetProgress($this->_cPtr);
	}

	function GetProgressLabel() {
		return DocumentConversion_GetProgressLabel($this->_cPtr);
	}

	function GetNumConvertedPages() {
		return DocumentConversion_GetNumConvertedPages($this->_cPtr);
	}

	function GetErrorString() {
		return DocumentConversion_GetErrorString($this->_cPtr);
	}

	function GetNumWarnings() {
		return DocumentConversion_GetNumWarnings($this->_cPtr);
	}

	function GetWarningString($index) {
		return DocumentConversion_GetWarningString($this->_cPtr,$index);
	}

	static function CreateInternal($impl) {
		$r=DocumentConversion_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocumentConversion($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return DocumentConversion_GetHandleInternal($this->_cPtr);
	}
}

class CADConvertOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__CADConvertOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CADConvertOptions();
	}

	function GetAllowThinLines() {
		return CADConvertOptions_GetAllowThinLines($this->_cPtr);
	}

	function SetAllowThinLines($value) {
		$r=CADConvertOptions_SetAllowThinLines($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetAutoRotate() {
		return CADConvertOptions_GetAutoRotate($this->_cPtr);
	}

	function SetAutoRotate($value) {
		$r=CADConvertOptions_SetAutoRotate($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetBackgroundColor() {
		$r=CADConvertOptions_GetBackgroundColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function SetBackgroundColor($value) {
		$r=CADConvertOptions_SetBackgroundColor($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetColorMode() {
		return CADConvertOptions_GetColorMode($this->_cPtr);
	}

	function SetColorMode($value) {
		$r=CADConvertOptions_SetColorMode($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetIncludeModel() {
		return CADConvertOptions_GetIncludeModel($this->_cPtr);
	}

	function SetIncludeModel($value) {
		$r=CADConvertOptions_SetIncludeModel($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetMaxXrefDepth() {
		return CADConvertOptions_GetMaxXrefDepth($this->_cPtr);
	}

	function SetMaxXrefDepth($value) {
		$r=CADConvertOptions_SetMaxXrefDepth($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetPageHeight() {
		return CADConvertOptions_GetPageHeight($this->_cPtr);
	}

	function SetPageHeight($value) {
		$r=CADConvertOptions_SetPageHeight($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetPageWidth() {
		return CADConvertOptions_GetPageWidth($this->_cPtr);
	}

	function SetPageWidth($value) {
		$r=CADConvertOptions_SetPageWidth($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetRasterDPI() {
		return CADConvertOptions_GetRasterDPI($this->_cPtr);
	}

	function SetRasterDPI($value) {
		$r=CADConvertOptions_SetRasterDPI($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function AddSheets($value) {
		$r=CADConvertOptions_AddSheets($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetUseScaleFromDocument() {
		return CADConvertOptions_GetUseScaleFromDocument($this->_cPtr);
	}

	function SetUseScaleFromDocument($value) {
		$r=CADConvertOptions_SetUseScaleFromDocument($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetZoomToExtents() {
		return CADConvertOptions_GetZoomToExtents($this->_cPtr);
	}

	function SetZoomToExtents($value) {
		$r=CADConvertOptions_SetZoomToExtents($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CADConvertOptions($r);
		}
		return $r;
	}

	function GetInternalObj() {
		$r=CADConvertOptions_GetInternalObj($this->_cPtr);
		if (!is_resource($r)) return $r;
		return new Obj($r);
	}
}

class ConversionMonitor {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return ConversionMonitor_mp_impl_set($this->_cPtr,$value);
		if ($var === 'm_owner') return ConversionMonitor_m_owner_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return ConversionMonitor_mp_impl_get($this->_cPtr);
		if ($var === 'm_owner') return ConversionMonitor_m_owner_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ConversionMonitor_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Next() {
		return ConversionMonitor_Next($this->_cPtr);
	}

	function Ready() {
		return ConversionMonitor_Ready($this->_cPtr);
	}

	function Progress() {
		return ConversionMonitor_Progress($this->_cPtr);
	}

	function Filter() {
		$r=ConversionMonitor_Filter($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function Destroy() {
		ConversionMonitor_Destroy($this->_cPtr);
	}

	function __construct($copy_or_impl=null,$is_owner=null) {
		if (is_resource($copy_or_impl) && get_resource_type($copy_or_impl) === '_p_pdftron__PDF__ConversionMonitor') {
			$this->_cPtr=$copy_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ConversionMonitor(); break;
		case 1: $this->_cPtr=new_ConversionMonitor($copy_or_impl); break;
		default: $this->_cPtr=new_ConversionMonitor($copy_or_impl,$is_owner);
		}
	}
}

class Convert {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}
	function __construct($h) {
		$this->_cPtr=$h;
	}

	const e_very_strict = 0;

	const e_strict = Convert_e_strict;

	const e_default = Convert_e_default;

	const e_keep_most = Convert_e_keep_most;

	const e_keep_all = Convert_e_keep_all;

	const e_off = 0;

	const e_simple = Convert_e_simple;

	const e_fast = Convert_e_fast;

	const e_high_quality = Convert_e_high_quality;

	static function FromXps($in_pdfdoc,$in_filename_or_buf,$buf_sz=null) {
		switch (func_num_args()) {
		case 2: Convert_FromXps($in_pdfdoc,$in_filename_or_buf); break;
		default: Convert_FromXps($in_pdfdoc,$in_filename_or_buf,$buf_sz);
		}
	}

	static function FromEmf($in_pdfdoc,$in_filename) {
		Convert_FromEmf($in_pdfdoc,$in_filename);
	}

	static function FromText($in_pdfdoc,$in_filename,$in_options=null) {
		switch (func_num_args()) {
		case 2: Convert_FromText($in_pdfdoc,$in_filename); break;
		default: Convert_FromText($in_pdfdoc,$in_filename,$in_options);
		}
	}

	static function ToEmf($in_pdfdoc_or_in_page,$in_filename) {
		Convert_ToEmf($in_pdfdoc_or_in_page,$in_filename);
	}

	static function ToSvg($in_pdfdoc_or_in_page,$in_filename,$in_options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToSvg($in_pdfdoc_or_in_page,$in_filename); break;
		default: Convert_ToSvg($in_pdfdoc_or_in_page,$in_filename,$in_options);
		}
	}

	static function ToXps($in_pdfdoc_or_in_inputFilename,$in_filename_or_in_outputFilename,$options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToXps($in_pdfdoc_or_in_inputFilename,$in_filename_or_in_outputFilename); break;
		default: Convert_ToXps($in_pdfdoc_or_in_inputFilename,$in_filename_or_in_outputFilename,$options);
		}
	}

	static function PageToHtml($page) {
		return Convert_PageToHtml($page);
	}

	static function PageToHtmlZoned($page,$json_zones) {
		return Convert_PageToHtmlZoned($page,$json_zones);
	}

	static function ToHtml($in_filename_or_in_pdfdoc,$out_path,$options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToHtml($in_filename_or_in_pdfdoc,$out_path); break;
		default: Convert_ToHtml($in_filename_or_in_pdfdoc,$out_path,$options);
		}
	}

	static function ToWord($in_filename_or_in_pdfdoc,$out_path,$options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToWord($in_filename_or_in_pdfdoc,$out_path); break;
		default: Convert_ToWord($in_filename_or_in_pdfdoc,$out_path,$options);
		}
	}

	static function ToExcel($in_filename_or_in_pdfdoc,$out_path,$options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToExcel($in_filename_or_in_pdfdoc,$out_path); break;
		default: Convert_ToExcel($in_filename_or_in_pdfdoc,$out_path,$options);
		}
	}

	static function ToPowerPoint($in_filename_or_in_pdfdoc,$out_path,$options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToPowerPoint($in_filename_or_in_pdfdoc,$out_path); break;
		default: Convert_ToPowerPoint($in_filename_or_in_pdfdoc,$out_path,$options);
		}
	}

	static function ToEpub($in_filename_or_in_pdfdoc,$out_path,$html_options=null,$epub_options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToEpub($in_filename_or_in_pdfdoc,$out_path); break;
		case 3: Convert_ToEpub($in_filename_or_in_pdfdoc,$out_path,$html_options); break;
		default: Convert_ToEpub($in_filename_or_in_pdfdoc,$out_path,$html_options,$epub_options);
		}
	}

	static function ToTiff($in_filename_or_in_pdfdoc,$out_path,$options=null) {
		switch (func_num_args()) {
		case 2: Convert_ToTiff($in_filename_or_in_pdfdoc,$out_path); break;
		default: Convert_ToTiff($in_filename_or_in_pdfdoc,$out_path,$options);
		}
	}

	static function ToXod($in_filename_or_in_pdfdoc,$out_filename_or_options=null,$options=null) {
		switch (func_num_args()) {
		case 1: $r=Convert_ToXod($in_filename_or_in_pdfdoc); break;
		case 2: $r=Convert_ToXod($in_filename_or_in_pdfdoc,$out_filename_or_options); break;
		default: $r=Convert_ToXod($in_filename_or_in_pdfdoc,$out_filename_or_options,$options);
		}
		if (!is_resource($r)) return $r;
		switch (get_resource_type($r)) {
		case '_p_pdftron__Filters__Filter': return new Filter($r);
		default: return $r;
		}
	}

	static function ToXodWithMonitor($in_pdfdoc,$options=null) {
		switch (func_num_args()) {
		case 1: $r=Convert_ToXodWithMonitor($in_pdfdoc); break;
		default: $r=Convert_ToXodWithMonitor($in_pdfdoc,$options);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ConversionMonitor($r);
		}
		return $r;
	}

	static function WordToPDF($in_pdfdoc,$in_filename_or_in_stream,$options) {
		Convert_WordToPDF($in_pdfdoc,$in_filename_or_in_stream,$options);
	}

	static function WordToPDFConversion($in_pdfdoc,$in_filename_or_in_stream,$options) {
		$r=Convert_WordToPDFConversion($in_pdfdoc,$in_filename_or_in_stream,$options);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocumentConversion($r);
		}
		return $r;
	}

	static function CreateReflow($in_page,$json_zones) {
		return Convert_CreateReflow($in_page,$json_zones);
	}

	static function OfficeToPDF($in_pdfdoc,$in_filename_or_in_stream,$options) {
		Convert_OfficeToPDF($in_pdfdoc,$in_filename_or_in_stream,$options);
	}

	static function StreamingPDFConversion($in_pdfdoc_or_in_filename_or_in_stream,$in_filename_or_options_or_in_stream,$options=null) {
		switch (func_num_args()) {
		case 2: $r=Convert_StreamingPDFConversion($in_pdfdoc_or_in_filename_or_in_stream,$in_filename_or_options_or_in_stream); break;
		default: $r=Convert_StreamingPDFConversion($in_pdfdoc_or_in_filename_or_in_stream,$in_filename_or_options_or_in_stream,$options);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DocumentConversion($r);
		}
		return $r;
	}

	static function ToPdf($in_pdfdoc,$in_filename) {
		Convert_ToPdf($in_pdfdoc,$in_filename);
	}

	static function FromCAD($in_pdfdoc,$in_filename,$opts=null) {
		Convert_FromCAD($in_pdfdoc,$in_filename,$opts);
	}

	static function FromDICOM($in_pdfdoc,$in_filename,$opts=null) {
		Convert_FromDICOM($in_pdfdoc,$in_filename,$opts);
	}

	static function FromTiff($in_pdfdoc,$in_data) {
		Convert_FromTiff($in_pdfdoc,$in_data);
	}

	static function RequiresPrinter($in_filename) {
		return Convert_RequiresPrinter($in_filename);
	}
}

class XPSOutputCommonOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_obj') return XPSOutputCommonOptions_m_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_obj') return XPSOutputCommonOptions_m_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('XPSOutputCommonOptions_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__XPSOutputCommonOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_XPSOutputCommonOptions();
	}

	function SetPrintMode($print_mode) {
		XPSOutputCommonOptions_SetPrintMode($this->_cPtr,$print_mode);
	}

	function SetDPI($dpi) {
		XPSOutputCommonOptions_SetDPI($this->_cPtr,$dpi);
	}

	function SetRenderPages($render) {
		XPSOutputCommonOptions_SetRenderPages($this->_cPtr,$render);
	}

	function SetThickenLines($thicken) {
		XPSOutputCommonOptions_SetThickenLines($this->_cPtr,$thicken);
	}

	function GenerateURLLinks($generate) {
		XPSOutputCommonOptions_GenerateURLLinks($this->_cPtr,$generate);
	}

	const e_op_off = 0;

	const e_op_on = XPSOutputCommonOptions_e_op_on;

	const e_op_pdfx_on = XPSOutputCommonOptions_e_op_pdfx_on;

	function SetOverprint($mode) {
		XPSOutputCommonOptions_SetOverprint($this->_cPtr,$mode);
	}
}

class XPSOutputOptions extends XPSOutputCommonOptions {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		XPSOutputCommonOptions::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return XPSOutputCommonOptions::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return XPSOutputCommonOptions::__isset($var);
	}

	function SetOpenXps($openxps) {
		XPSOutputOptions_SetOpenXps($this->_cPtr,$openxps);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__XPSOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_XPSOutputOptions();
	}
}

class XODOutputOptions extends XPSOutputCommonOptions {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		XPSOutputCommonOptions::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return XPSOutputCommonOptions::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return XPSOutputCommonOptions::__isset($var);
	}

	const e_internal_xfdf = 0;

	const e_external_xfdf = XODOutputOptions_e_external_xfdf;

	const e_flatten = XODOutputOptions_e_flatten;

	function SetOutputThumbnails($include_thumbs) {
		XODOutputOptions_SetOutputThumbnails($this->_cPtr,$include_thumbs);
	}

	function SetThumbnailSize($size_or_regular_size,$large_size=null) {
		switch (func_num_args()) {
		case 1: XODOutputOptions_SetThumbnailSize($this->_cPtr,$size_or_regular_size); break;
		default: XODOutputOptions_SetThumbnailSize($this->_cPtr,$size_or_regular_size,$large_size);
		}
	}

	function SetElementLimit($element_limit) {
		XODOutputOptions_SetElementLimit($this->_cPtr,$element_limit);
	}

	function SetOpacityMaskWorkaround($opacity_render) {
		XODOutputOptions_SetOpacityMaskWorkaround($this->_cPtr,$opacity_render);
	}

	function SetMaximumImagePixels($max_pixels) {
		XODOutputOptions_SetMaximumImagePixels($this->_cPtr,$max_pixels);
	}

	function SetFlattenContent($flatten) {
		XODOutputOptions_SetFlattenContent($this->_cPtr,$flatten);
	}

	function SetFlattenThreshold($threshold) {
		XODOutputOptions_SetFlattenThreshold($this->_cPtr,$threshold);
	}

	function SetPreferJPG($prefer_jpg) {
		XODOutputOptions_SetPreferJPG($this->_cPtr,$prefer_jpg);
	}

	function SetJPGQuality($quality) {
		XODOutputOptions_SetJPGQuality($this->_cPtr,$quality);
	}

	function SetSilverlightTextWorkaround($workaround) {
		XODOutputOptions_SetSilverlightTextWorkaround($this->_cPtr,$workaround);
	}

	function SetAnnotationOutput($annot_output) {
		XODOutputOptions_SetAnnotationOutput($this->_cPtr,$annot_output);
	}

	function SetExternalParts($generate) {
		XODOutputOptions_SetExternalParts($this->_cPtr,$generate);
	}

	function SetEncryptPassword($pass) {
		XODOutputOptions_SetEncryptPassword($this->_cPtr,$pass);
	}

	function UseSilverlightFlashCompatible($compatible) {
		XODOutputOptions_UseSilverlightFlashCompatible($this->_cPtr,$compatible);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__XODOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_XODOutputOptions();
	}
}

class OutputOptionsOCR {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_lang_auto = 0;

	const e_lang_catalan = OutputOptionsOCR_e_lang_catalan;

	const e_lang_danish = OutputOptionsOCR_e_lang_danish;

	const e_lang_german = OutputOptionsOCR_e_lang_german;

	const e_lang_english = OutputOptionsOCR_e_lang_english;

	const e_lang_spanish = OutputOptionsOCR_e_lang_spanish;

	const e_lang_finnish = OutputOptionsOCR_e_lang_finnish;

	const e_lang_french = OutputOptionsOCR_e_lang_french;

	const e_lang_italian = OutputOptionsOCR_e_lang_italian;

	const e_lang_dutch = OutputOptionsOCR_e_lang_dutch;

	const e_lang_norwegian = OutputOptionsOCR_e_lang_norwegian;

	const e_lang_portuguese = OutputOptionsOCR_e_lang_portuguese;

	const e_lang_polish = OutputOptionsOCR_e_lang_polish;

	const e_lang_romanian = OutputOptionsOCR_e_lang_romanian;

	const e_lang_russian = OutputOptionsOCR_e_lang_russian;

	const e_lang_slovenian = OutputOptionsOCR_e_lang_slovenian;

	const e_lang_swedish = OutputOptionsOCR_e_lang_swedish;

	const e_lang_turkish = OutputOptionsOCR_e_lang_turkish;

	static function LanguageChoiceToString($language) {
		return OutputOptionsOCR_LanguageChoiceToString($language);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OutputOptionsOCR') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_OutputOptionsOCR();
	}
}

class HTMLOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__HTMLOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_HTMLOutputOptions();
	}

	function SetPreferJPG($prefer_jpg) {
		HTMLOutputOptions_SetPreferJPG($this->_cPtr,$prefer_jpg);
	}

	function SetJPGQuality($quality) {
		HTMLOutputOptions_SetJPGQuality($this->_cPtr,$quality);
	}

	function SetDPI($dpi) {
		HTMLOutputOptions_SetDPI($this->_cPtr,$dpi);
	}

	function SetMaximumImagePixels($max_pixels) {
		HTMLOutputOptions_SetMaximumImagePixels($this->_cPtr,$max_pixels);
	}

	const e_fixed_position = 0;

	const e_reflow_paragraphs = HTMLOutputOptions_e_reflow_paragraphs;

	const e_reflow_full = HTMLOutputOptions_e_reflow_full;

	function SetContentReflowSetting($reflow) {
		HTMLOutputOptions_SetContentReflowSetting($this->_cPtr,$reflow);
	}

	function SetScale($scale) {
		HTMLOutputOptions_SetScale($this->_cPtr,$scale);
	}

	function SetExternalLinks($enable) {
		HTMLOutputOptions_SetExternalLinks($this->_cPtr,$enable);
	}

	function SetInternalLinks($enable) {
		HTMLOutputOptions_SetInternalLinks($this->_cPtr,$enable);
	}

	function SetSimplifyText($enable) {
		HTMLOutputOptions_SetSimplifyText($this->_cPtr,$enable);
	}

	function SetReportFile($path) {
		HTMLOutputOptions_SetReportFile($this->_cPtr,$path);
	}

	function SetTitle($title) {
		HTMLOutputOptions_SetTitle($this->_cPtr,$title);
	}

	function SetImageDPI($dpi) {
		HTMLOutputOptions_SetImageDPI($this->_cPtr,$dpi);
	}

	function SetEmbedImages($embed) {
		HTMLOutputOptions_SetEmbedImages($this->_cPtr,$embed);
	}

	function SetFileConversionTimeoutSeconds($seconds) {
		HTMLOutputOptions_SetFileConversionTimeoutSeconds($this->_cPtr,$seconds);
	}

	function SetPages($page_from,$page_to) {
		HTMLOutputOptions_SetPages($this->_cPtr,$page_from,$page_to);
	}

	function SetPDFPassword($password) {
		HTMLOutputOptions_SetPDFPassword($this->_cPtr,$password);
	}

	const e_ocr_image_text = 0;

	const e_ocr_image = HTMLOutputOptions_e_ocr_image;

	const e_ocr_text = HTMLOutputOptions_e_ocr_text;

	const e_ocr_off = HTMLOutputOptions_e_ocr_off;

	function SetSearchableImageSetting($setting) {
		HTMLOutputOptions_SetSearchableImageSetting($this->_cPtr,$setting);
	}

	function SetSimpleLists($enable) {
		HTMLOutputOptions_SetSimpleLists($this->_cPtr,$enable);
	}

	function SetConnectHyphens($connect) {
		HTMLOutputOptions_SetConnectHyphens($this->_cPtr,$connect);
	}

	function SetDisableVerticalSplit($disable) {
		HTMLOutputOptions_SetDisableVerticalSplit($this->_cPtr,$disable);
	}

	function SetNoPageWidth($enable) {
		HTMLOutputOptions_SetNoPageWidth($this->_cPtr,$enable);
	}

	function SetLanguage($language) {
		HTMLOutputOptions_SetLanguage($this->_cPtr,$language);
	}
}

class WordOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__WordOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_WordOutputOptions();
	}

	function SetJPGQuality($quality) {
		WordOutputOptions_SetJPGQuality($this->_cPtr,$quality);
	}

	function SetImageDPI($dpi) {
		WordOutputOptions_SetImageDPI($this->_cPtr,$dpi);
	}

	const e_wof_docx = 0;

	const e_wof_doc = WordOutputOptions_e_wof_doc;

	const e_wof_rtf = WordOutputOptions_e_wof_rtf;

	const e_wof_txt = WordOutputOptions_e_wof_txt;

	function SetWordOutputFormat($format) {
		WordOutputOptions_SetWordOutputFormat($this->_cPtr,$format);
	}

	function SetFileConversionTimeoutSeconds($seconds) {
		WordOutputOptions_SetFileConversionTimeoutSeconds($this->_cPtr,$seconds);
	}

	function SetPages($page_from,$page_to) {
		WordOutputOptions_SetPages($this->_cPtr,$page_from,$page_to);
	}

	function SetPDFPassword($password) {
		WordOutputOptions_SetPDFPassword($this->_cPtr,$password);
	}

	const e_bm_none = 0;

	const e_bm_page = WordOutputOptions_e_bm_page;

	const e_bm_extract = WordOutputOptions_e_bm_extract;

	function SetBookmarkConversionMethod($method) {
		WordOutputOptions_SetBookmarkConversionMethod($this->_cPtr,$method);
	}

	const e_ocr_image_text = 0;

	const e_ocr_image = WordOutputOptions_e_ocr_image;

	const e_ocr_text = WordOutputOptions_e_ocr_text;

	const e_ocr_off = WordOutputOptions_e_ocr_off;

	function SetSearchableImageSetting($setting) {
		WordOutputOptions_SetSearchableImageSetting($this->_cPtr,$setting);
	}

	function SetShrinkCharacterSpacingToPreventWrap($shrink) {
		WordOutputOptions_SetShrinkCharacterSpacingToPreventWrap($this->_cPtr,$shrink);
	}

	function SetMatchPDFLineBreaks($match) {
		WordOutputOptions_SetMatchPDFLineBreaks($this->_cPtr,$match);
	}

	function SetConnectHyphens($connect) {
		WordOutputOptions_SetConnectHyphens($this->_cPtr,$connect);
	}

	function SetDoNotAdjustFonts($do_not_adjust) {
		WordOutputOptions_SetDoNotAdjustFonts($this->_cPtr,$do_not_adjust);
	}

	function SetDisableVerticalSplit($disable) {
		WordOutputOptions_SetDisableVerticalSplit($this->_cPtr,$disable);
	}

	function SetLanguage($language) {
		WordOutputOptions_SetLanguage($this->_cPtr,$language);
	}

	function SetPrioritizeVisualAppearance($replica) {
		WordOutputOptions_SetPrioritizeVisualAppearance($this->_cPtr,$replica);
	}
}

class ExcelOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ExcelOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ExcelOutputOptions();
	}

	function SetPages($page_from,$page_to) {
		ExcelOutputOptions_SetPages($this->_cPtr,$page_from,$page_to);
	}

	function SetPDFPassword($password) {
		ExcelOutputOptions_SetPDFPassword($this->_cPtr,$password);
	}

	function SetLanguage($language) {
		ExcelOutputOptions_SetLanguage($this->_cPtr,$language);
	}

	function SetNonTableContent($non_tables) {
		ExcelOutputOptions_SetNonTableContent($this->_cPtr,$non_tables);
	}

	function SetSingleSheet($single_sheet) {
		ExcelOutputOptions_SetSingleSheet($this->_cPtr,$single_sheet);
	}
}

class PowerPointOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PowerPointOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PowerPointOutputOptions();
	}

	function SetPages($page_from,$page_to) {
		PowerPointOutputOptions_SetPages($this->_cPtr,$page_from,$page_to);
	}

	function SetPDFPassword($password) {
		PowerPointOutputOptions_SetPDFPassword($this->_cPtr,$password);
	}

	function SetLanguage($language) {
		PowerPointOutputOptions_SetLanguage($this->_cPtr,$language);
	}
}

class EPUBOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__EPUBOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_EPUBOutputOptions();
	}

	function SetExpanded($expanded) {
		EPUBOutputOptions_SetExpanded($this->_cPtr,$expanded);
	}

	function SetReuseCover($reuse) {
		EPUBOutputOptions_SetReuseCover($this->_cPtr,$reuse);
	}
}

class SVGOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__SVGOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_SVGOutputOptions();
	}

	function SetEmbedImages($embed_images) {
		SVGOutputOptions_SetEmbedImages($this->_cPtr,$embed_images);
	}

	function SetNoFonts($no_fonts) {
		SVGOutputOptions_SetNoFonts($this->_cPtr,$no_fonts);
	}

	function SetSvgFonts($svg_fonts) {
		SVGOutputOptions_SetSvgFonts($this->_cPtr,$svg_fonts);
	}

	function SetEmbedFonts($embed_fonts) {
		SVGOutputOptions_SetEmbedFonts($this->_cPtr,$embed_fonts);
	}

	function SetNoUnicode($no_unicode) {
		SVGOutputOptions_SetNoUnicode($this->_cPtr,$no_unicode);
	}

	function SetIndividualCharPlacement($individual_char_placement) {
		SVGOutputOptions_SetIndividualCharPlacement($this->_cPtr,$individual_char_placement);
	}

	function SetRemoveCharPlacement($remove_char_placement) {
		SVGOutputOptions_SetRemoveCharPlacement($this->_cPtr,$remove_char_placement);
	}

	function SetFlattenContent($flatten) {
		SVGOutputOptions_SetFlattenContent($this->_cPtr,$flatten);
	}

	function SetFlattenThreshold($threshold) {
		SVGOutputOptions_SetFlattenThreshold($this->_cPtr,$threshold);
	}

	function SetFlattenDPI($dpi) {
		SVGOutputOptions_SetFlattenDPI($this->_cPtr,$dpi);
	}

	function SetFlattenMaximumImagePixels($max_pixels) {
		SVGOutputOptions_SetFlattenMaximumImagePixels($this->_cPtr,$max_pixels);
	}

	function SetCompress($svgz) {
		SVGOutputOptions_SetCompress($this->_cPtr,$svgz);
	}

	function SetOutputThumbnails($include_thumbs) {
		SVGOutputOptions_SetOutputThumbnails($this->_cPtr,$include_thumbs);
	}

	function SetThumbnailSize($size) {
		SVGOutputOptions_SetThumbnailSize($this->_cPtr,$size);
	}

	function SetCreateXmlWrapper($xml) {
		SVGOutputOptions_SetCreateXmlWrapper($this->_cPtr,$xml);
	}

	function SetDtd($dtd) {
		SVGOutputOptions_SetDtd($this->_cPtr,$dtd);
	}

	function SetAnnots($annots) {
		SVGOutputOptions_SetAnnots($this->_cPtr,$annots);
	}

	function SetOverprint($mode) {
		SVGOutputOptions_SetOverprint($this->_cPtr,$mode);
	}
}

class TiffOutputOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TiffOutputOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TiffOutputOptions();
	}

	function SetBox($type) {
		TiffOutputOptions_SetBox($this->_cPtr,$type);
	}

	function SetRotate($rotation) {
		TiffOutputOptions_SetRotate($this->_cPtr,$rotation);
	}

	function SetClip($x1,$y1,$x2,$y2) {
		TiffOutputOptions_SetClip($this->_cPtr,$x1,$y1,$x2,$y2);
	}

	function SetPages($page_desc) {
		TiffOutputOptions_SetPages($this->_cPtr,$page_desc);
	}

	function SetOverprint($mode) {
		TiffOutputOptions_SetOverprint($this->_cPtr,$mode);
	}

	function SetCMYK($enable) {
		TiffOutputOptions_SetCMYK($this->_cPtr,$enable);
	}

	function SetDither($enable) {
		TiffOutputOptions_SetDither($this->_cPtr,$enable);
	}

	function SetGray($enable) {
		TiffOutputOptions_SetGray($this->_cPtr,$enable);
	}

	function SetMono($enable) {
		TiffOutputOptions_SetMono($this->_cPtr,$enable);
	}

	function SetAnnots($enable) {
		TiffOutputOptions_SetAnnots($this->_cPtr,$enable);
	}

	function SetSmooth($enable) {
		TiffOutputOptions_SetSmooth($this->_cPtr,$enable);
	}

	function SetPrintmode($enable) {
		TiffOutputOptions_SetPrintmode($this->_cPtr,$enable);
	}

	function SetTransparentPage($enable) {
		TiffOutputOptions_SetTransparentPage($this->_cPtr,$enable);
	}

	function SetPalettized($enable) {
		TiffOutputOptions_SetPalettized($this->_cPtr,$enable);
	}

	function SetDPI($dpi) {
		TiffOutputOptions_SetDPI($this->_cPtr,$dpi);
	}

	function SetGamma($gamma) {
		TiffOutputOptions_SetGamma($this->_cPtr,$gamma);
	}

	function SetHRes($hres) {
		TiffOutputOptions_SetHRes($this->_cPtr,$hres);
	}

	function SetVRes($vres) {
		TiffOutputOptions_SetVRes($this->_cPtr,$vres);
	}
}

class Printer {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Install($in_printerName=null) {
		switch (func_num_args()) {
		case 0: Printer_Install(); break;
		default: Printer_Install($in_printerName);
		}
	}

	static function Uninstall() {
		Printer_Uninstall();
	}

	static function GetPrinterName() {
		return Printer_GetPrinterName();
	}

	static function SetPrinterName($in_printerName=null) {
		switch (func_num_args()) {
		case 0: Printer_SetPrinterName(); break;
		default: Printer_SetPrinterName($in_printerName);
		}
	}

	static function IsInstalled($in_printerName=null) {
		switch (func_num_args()) {
		case 0: $r=Printer_IsInstalled(); break;
		default: $r=Printer_IsInstalled($in_printerName);
		}
		return $r;
	}

	const e_auto = 0;

	const e_interop_only = Printer_e_interop_only;

	const e_printer_only = Printer_e_printer_only;

	const e_prefer_builtin_converter = Printer_e_prefer_builtin_converter;

	static function SetMode($mode) {
		Printer_SetMode($mode);
	}

	static function GetMode() {
		return Printer_GetMode();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Printer') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Printer();
	}
}

class PathData {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'PathData_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'oprs') return new VectorUChar(PathData_oprs_get($this->_cPtr));
		if ($var === 'pts') return new VectorDouble(PathData_pts_get($this->_cPtr));
		if ($var === 'glyph_index') return PathData_glyph_index_get($this->_cPtr);
		if ($var === 'is_def') return PathData_is_def_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PathData_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_moveto = 1;

	const e_lineto = PathData_e_lineto;

	const e_cubicto = PathData_e_cubicto;

	const e_conicto = PathData_e_conicto;

	const e_rect = PathData_e_rect;

	const e_closepath = PathData_e_closepath;

	function SetOperators($operators) {
		PathData_SetOperators($this->_cPtr,$operators);
	}

	function SetPoints($points) {
		PathData_SetPoints($this->_cPtr,$points);
	}

	function GetOperators() {
		$r=PathData_GetOperators($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function GetPoints() {
		$r=PathData_GetPoints($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function IsDefined() {
		return PathData_IsDefined($this->_cPtr);
	}

	function GetGlyphIndex() {
		return PathData_GetGlyphIndex($this->_cPtr);
	}

	function __construct($i=null,$gi=null,$o=null,$d=null) {
		if (is_resource($i) && get_resource_type($i) === '_p_pdftron__PDF__PathData') {
			$this->_cPtr=$i;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PathData(); break;
		case 1: $this->_cPtr=new_PathData($i); break;
		case 2: $this->_cPtr=new_PathData($i,$gi); break;
		case 3: $this->_cPtr=new_PathData($i,$gi,$o); break;
		default: $this->_cPtr=new_PathData($i,$gi,$o,$d);
		}
	}
}

class ShapedText {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_impl') return ShapedText_m_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_impl') return ShapedText_m_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ShapedText_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_FullShaping = 0;

	const e_PartialShaping = 1;

	const e_NoShaping = 2;

	const e_NoFailure = 0;

	const e_UnsupportedFontType = 1;

	const e_NotIndexEncoded = 2;

	const e_FontDataNotFound = 3;

	function __construct($other_or_impl=null) {
		if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__ShapedText') {
			$this->_cPtr=$other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ShapedText(); break;
		default: $this->_cPtr=new_ShapedText($other_or_impl);
		}
	}

	function Destroy() {
		ShapedText_Destroy($this->_cPtr);
	}

	function GetScale() {
		return ShapedText_GetScale($this->_cPtr);
	}

	function GetShapingStatus() {
		return ShapedText_GetShapingStatus($this->_cPtr);
	}

	function GetFailureReason() {
		return ShapedText_GetFailureReason($this->_cPtr);
	}

	function GetText() {
		return ShapedText_GetText($this->_cPtr);
	}

	function GetNumGlyphs() {
		return ShapedText_GetNumGlyphs($this->_cPtr);
	}

	function GetGlyph($index) {
		return ShapedText_GetGlyph($this->_cPtr,$index);
	}

	function GetGlyphXPos($index) {
		return ShapedText_GetGlyphXPos($this->_cPtr,$index);
	}

	function GetGlyphYPos($index) {
		return ShapedText_GetGlyphYPos($this->_cPtr,$index);
	}
}

class Font {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_font') return Font_mp_font_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_font') return Font_mp_font_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Font_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_times_roman = 0;

	const e_times_bold = Font_e_times_bold;

	const e_times_italic = Font_e_times_italic;

	const e_times_bold_italic = Font_e_times_bold_italic;

	const e_helvetica = Font_e_helvetica;

	const e_helvetica_bold = Font_e_helvetica_bold;

	const e_helvetica_oblique = Font_e_helvetica_oblique;

	const e_helvetica_bold_oblique = Font_e_helvetica_bold_oblique;

	const e_courier = Font_e_courier;

	const e_courier_bold = Font_e_courier_bold;

	const e_courier_oblique = Font_e_courier_oblique;

	const e_courier_bold_oblique = Font_e_courier_bold_oblique;

	const e_symbol = Font_e_symbol;

	const e_zapf_dingbats = Font_e_zapf_dingbats;

	const e_null = Font_e_null;

	static function CreateTrueTypeFont($doc,$font_path,$embed=true,$subset=true) {
		$r=Font_CreateTrueTypeFont($doc,$font_path,$embed,$subset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	const e_IdentityH = 0;

	const e_Indices = Font_e_Indices;

	static function CreateCIDTrueTypeFont($doc,$font_path,$embed=true,$subset=true,$encoding=null,$ttc_font_index=0) {
		switch (func_num_args()) {
		case 2: case 3: case 4: $r=Font_CreateCIDTrueTypeFont($doc,$font_path,$embed,$subset); break;
		default: $r=Font_CreateCIDTrueTypeFont($doc,$font_path,$embed,$subset,$encoding,$ttc_font_index);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	static function Create($doc,$type_or_from_or_name,$embed_or_char_set=null) {
		switch (func_num_args()) {
		case 2: $r=Font_Create($doc,$type_or_from_or_name); break;
		default: $r=Font_Create($doc,$type_or_from_or_name,$embed_or_char_set);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	static function CreateType1Font($doc,$font_path,$embed=true) {
		$r=Font_CreateType1Font($doc,$font_path,$embed);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	const e_Type1 = 0;

	const e_TrueType = Font_e_TrueType;

	const e_MMType1 = Font_e_MMType1;

	const e_Type3 = Font_e_Type3;

	const e_Type0 = Font_e_Type0;

	const e_CIDType0 = Font_e_CIDType0;

	const e_CIDType2 = Font_e_CIDType2;

	function GetType() {
		return Font_GetType($this->_cPtr);
	}

	function IsSimple() {
		return Font_IsSimple($this->_cPtr);
	}

	function GetSDFObj() {
		$r=Font_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetDescriptor() {
		$r=Font_GetDescriptor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetName() {
		return Font_GetName($this->_cPtr);
	}

	function GetFamilyName() {
		return Font_GetFamilyName($this->_cPtr);
	}

	function IsFixedWidth() {
		return Font_IsFixedWidth($this->_cPtr);
	}

	function IsSerif() {
		return Font_IsSerif($this->_cPtr);
	}

	function IsSymbolic() {
		return Font_IsSymbolic($this->_cPtr);
	}

	function IsItalic() {
		return Font_IsItalic($this->_cPtr);
	}

	function IsAllCap() {
		return Font_IsAllCap($this->_cPtr);
	}

	function IsForceBold() {
		return Font_IsForceBold($this->_cPtr);
	}

	function IsHorizontalMode() {
		return Font_IsHorizontalMode($this->_cPtr);
	}

	function GetWidth($char_code) {
		return Font_GetWidth($this->_cPtr,$char_code);
	}

	function GetMaxWidth() {
		return Font_GetMaxWidth($this->_cPtr);
	}

	function GetMissingWidth() {
		return Font_GetMissingWidth($this->_cPtr);
	}

	function GetCharCodeIterator() {
		$r=Font_GetCharCodeIterator($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new UInt32Iterator($r);
		}
		return $r;
	}

	function GetGlyphPath($char_code,$conics2cubics,$transform=null) {
		$r=Font_GetGlyphPath($this->_cPtr,$char_code,$conics2cubics,$transform);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PathData($r);
		}
		return $r;
	}

	function GetShapedText($text_to_shape) {
		$r=Font_GetShapedText($this->_cPtr,$text_to_shape);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ShapedText($r);
		}
		return $r;
	}

	function MapToUnicode($char_code) {
		return Font_MapToUnicode($this->_cPtr,$char_code);
	}

	function IsEmbedded() {
		return Font_IsEmbedded($this->_cPtr);
	}

	function GetEmbeddedFontName() {
		return Font_GetEmbeddedFontName($this->_cPtr);
	}

	function GetEmbeddedFont() {
		$r=Font_GetEmbeddedFont($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetEmbeddedFontBufSize() {
		return Font_GetEmbeddedFontBufSize($this->_cPtr);
	}

	function GetUnitsPerEm() {
		return Font_GetUnitsPerEm($this->_cPtr);
	}

	function GetBBox() {
		$r=Font_GetBBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetAscent() {
		return Font_GetAscent($this->_cPtr);
	}

	function GetDescent() {
		return Font_GetDescent($this->_cPtr);
	}

	function GetStandardType1FontType() {
		return Font_GetStandardType1FontType($this->_cPtr);
	}

	function IsCFF() {
		return Font_IsCFF($this->_cPtr);
	}

	function GetType3FontMatrix() {
		$r=Font_GetType3FontMatrix($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetType3GlyphStream($char_code) {
		$r=Font_GetType3GlyphStream($this->_cPtr,$char_code);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetVerticalAdvance($char_code) {
		$r=Font_GetVerticalAdvance($this->_cPtr,$char_code);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetDescendant() {
		$r=Font_GetDescendant($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	function MapToCID($char_code) {
		return Font_MapToCID($this->_cPtr,$char_code);
	}

	function Destroy() {
		Font_Destroy($this->_cPtr);
	}

	function __construct($font_dict_or_c_or_impl=null) {
		if (is_resource($font_dict_or_c_or_impl) && get_resource_type($font_dict_or_c_or_impl) === '_p_pdftron__PDF__Font') {
			$this->_cPtr=$font_dict_or_c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Font(); break;
		default: $this->_cPtr=new_Font($font_dict_or_c_or_impl);
		}
	}
}

class Shading {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_shade') return Shading_mp_shade_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_shade') return Shading_mp_shade_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Shading_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_function_shading = 0;

	const e_axial_shading = Shading_e_axial_shading;

	const e_radial_shading = Shading_e_radial_shading;

	const e_free_gouraud_shading = Shading_e_free_gouraud_shading;

	const e_lattice_gouraud_shading = Shading_e_lattice_gouraud_shading;

	const e_coons_shading = Shading_e_coons_shading;

	const e_tensor_shading = Shading_e_tensor_shading;

	const e_null = Shading_e_null;

	function GetType() {
		return Shading_GetType($this->_cPtr);
	}

	function GetSDFObj() {
		$r=Shading_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetBaseColorSpace() {
		$r=Shading_GetBaseColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function HasBBox() {
		return Shading_HasBBox($this->_cPtr);
	}

	function GetBBox() {
		$r=Shading_GetBBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function HasBackground() {
		return Shading_HasBackground($this->_cPtr);
	}

	function GetBackground() {
		$r=Shading_GetBackground($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetAntialias() {
		return Shading_GetAntialias($this->_cPtr);
	}

	function GetParamStart() {
		return Shading_GetParamStart($this->_cPtr);
	}

	function GetParamEnd() {
		return Shading_GetParamEnd($this->_cPtr);
	}

	function IsExtendStart() {
		return Shading_IsExtendStart($this->_cPtr);
	}

	function IsExtendEnd() {
		return Shading_IsExtendEnd($this->_cPtr);
	}

	function GetCoordsAxial() {
		$r=Shading_GetCoordsAxial($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetCoordsRadial() {
		$r=Shading_GetCoordsRadial($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetDomain() {
		$r=Shading_GetDomain($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetMatrix() {
		$r=Shading_GetMatrix($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetColor($t_or_t1,$t2=null) {
		switch (func_num_args()) {
		case 1: $r=Shading_GetColor($this->_cPtr,$t_or_t1); break;
		default: $r=Shading_GetColor($this->_cPtr,$t_or_t1,$t2);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function Destroy() {
		Shading_Destroy($this->_cPtr);
	}

	function __construct($shading_dict_or_s_or_impl=null) {
		if (is_resource($shading_dict_or_s_or_impl) && get_resource_type($shading_dict_or_s_or_impl) === '_p_pdftron__PDF__Shading') {
			$this->_cPtr=$shading_dict_or_s_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Shading(); break;
		default: $this->_cPtr=new_Shading($shading_dict_or_s_or_impl);
		}
	}
}

class PatternColor {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_pc') return PatternColor_mp_pc_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_pc') return PatternColor_mp_pc_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PatternColor_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_uncolored_tiling_pattern = 0;

	const e_colored_tiling_pattern = PatternColor_e_colored_tiling_pattern;

	const e_shading = PatternColor_e_shading;

	const e_null = PatternColor_e_null;

	function GetType() {
		return PatternColor_GetType($this->_cPtr);
	}

	function GetSDFObj() {
		$r=PatternColor_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetMatrix() {
		$r=PatternColor_GetMatrix($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetShading() {
		$r=PatternColor_GetShading($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Shading($r);
		}
		return $r;
	}

	const e_constant_spacing = 0;

	const e_no_distortion = PatternColor_e_no_distortion;

	const e_constant_spacing_fast_fill = PatternColor_e_constant_spacing_fast_fill;

	function GetTilingType() {
		return PatternColor_GetTilingType($this->_cPtr);
	}

	function GetBBox() {
		$r=PatternColor_GetBBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetXStep() {
		return PatternColor_GetXStep($this->_cPtr);
	}

	function GetYStep() {
		return PatternColor_GetYStep($this->_cPtr);
	}

	function Destroy() {
		PatternColor_Destroy($this->_cPtr);
	}

	function __construct($pattern_or_impl=null) {
		if (is_resource($pattern_or_impl) && get_resource_type($pattern_or_impl) === '_p_pdftron__PDF__PatternColor') {
			$this->_cPtr=$pattern_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PatternColor(); break;
		default: $this->_cPtr=new_PatternColor($pattern_or_impl);
		}
	}
}

class GState {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_state') return GState_mp_state_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_state') return GState_mp_state_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('GState_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_transform = 0;

	const e_rendering_intent = GState_e_rendering_intent;

	const e_stroke_cs = GState_e_stroke_cs;

	const e_stroke_color = GState_e_stroke_color;

	const e_fill_cs = GState_e_fill_cs;

	const e_fill_color = GState_e_fill_color;

	const e_line_width = GState_e_line_width;

	const e_line_cap = GState_e_line_cap;

	const e_line_join = GState_e_line_join;

	const e_flatness = GState_e_flatness;

	const e_miter_limit = GState_e_miter_limit;

	const e_dash_pattern = GState_e_dash_pattern;

	const e_char_spacing = GState_e_char_spacing;

	const e_word_spacing = GState_e_word_spacing;

	const e_horizontal_scale = GState_e_horizontal_scale;

	const e_leading = GState_e_leading;

	const e_font = GState_e_font;

	const e_font_size = GState_e_font_size;

	const e_text_render_mode = GState_e_text_render_mode;

	const e_text_rise = GState_e_text_rise;

	const e_text_knockout = GState_e_text_knockout;

	const e_text_pos_offset = GState_e_text_pos_offset;

	const e_blend_mode = GState_e_blend_mode;

	const e_opacity_fill = GState_e_opacity_fill;

	const e_opacity_stroke = GState_e_opacity_stroke;

	const e_alpha_is_shape = GState_e_alpha_is_shape;

	const e_soft_mask = GState_e_soft_mask;

	const e_smoothnes = GState_e_smoothnes;

	const e_auto_stoke_adjust = GState_e_auto_stoke_adjust;

	const e_stroke_overprint = GState_e_stroke_overprint;

	const e_fill_overprint = GState_e_fill_overprint;

	const e_overprint_mode = GState_e_overprint_mode;

	const e_transfer_funct = GState_e_transfer_funct;

	const e_BG_funct = GState_e_BG_funct;

	const e_UCR_funct = GState_e_UCR_funct;

	const e_halftone = GState_e_halftone;

	const e_null = GState_e_null;

	function GetTransform() {
		$r=GState_GetTransform($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetStrokeColorSpace() {
		$r=GState_GetStrokeColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function GetFillColorSpace() {
		$r=GState_GetFillColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function GetStrokeColor() {
		$r=GState_GetStrokeColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetStrokePattern() {
		$r=GState_GetStrokePattern($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PatternColor($r);
		}
		return $r;
	}

	function GetFillColor() {
		$r=GState_GetFillColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetFillPattern() {
		$r=GState_GetFillPattern($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PatternColor($r);
		}
		return $r;
	}

	function GetFlatness() {
		return GState_GetFlatness($this->_cPtr);
	}

	const e_butt_cap = 0;

	const e_round_cap = GState_e_round_cap;

	const e_square_cap = GState_e_square_cap;

	function GetLineCap() {
		return GState_GetLineCap($this->_cPtr);
	}

	const e_miter_join = 0;

	const e_round_join = GState_e_round_join;

	const e_bevel_join = GState_e_bevel_join;

	function GetLineJoin() {
		return GState_GetLineJoin($this->_cPtr);
	}

	function GetLineWidth() {
		return GState_GetLineWidth($this->_cPtr);
	}

	function GetMiterLimit() {
		return GState_GetMiterLimit($this->_cPtr);
	}

	function GetDashes() {
		$r=GState_GetDashes($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetPhase() {
		return GState_GetPhase($this->_cPtr);
	}

	function GetCharSpacing() {
		return GState_GetCharSpacing($this->_cPtr);
	}

	function GetWordSpacing() {
		return GState_GetWordSpacing($this->_cPtr);
	}

	function GetHorizontalScale() {
		return GState_GetHorizontalScale($this->_cPtr);
	}

	function GetLeading() {
		return GState_GetLeading($this->_cPtr);
	}

	function GetFont() {
		$r=GState_GetFont($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	function GetFontSize() {
		return GState_GetFontSize($this->_cPtr);
	}

	const e_fill_text = 0;

	const e_stroke_text = GState_e_stroke_text;

	const e_fill_stroke_text = GState_e_fill_stroke_text;

	const e_invisible_text = GState_e_invisible_text;

	const e_fill_clip_text = GState_e_fill_clip_text;

	const e_stroke_clip_text = GState_e_stroke_clip_text;

	const e_fill_stroke_clip_text = GState_e_fill_stroke_clip_text;

	const e_clip_text = GState_e_clip_text;

	function GetTextRenderMode() {
		return GState_GetTextRenderMode($this->_cPtr);
	}

	function GetTextRise() {
		return GState_GetTextRise($this->_cPtr);
	}

	function IsTextKnockout() {
		return GState_IsTextKnockout($this->_cPtr);
	}

	const e_absolute_colorimetric = 0;

	const e_relative_colorimetric = GState_e_relative_colorimetric;

	const e_saturation = GState_e_saturation;

	const e_perceptual = GState_e_perceptual;

	function GetRenderingIntent() {
		return GState_GetRenderingIntent($this->_cPtr);
	}

	static function GetRenderingIntentType($name) {
		return GState_GetRenderingIntentType($name);
	}

	const e_bl_compatible = 0;

	const e_bl_normal = GState_e_bl_normal;

	const e_bl_multiply = GState_e_bl_multiply;

	const e_bl_screen = GState_e_bl_screen;

	const e_bl_difference = GState_e_bl_difference;

	const e_bl_darken = GState_e_bl_darken;

	const e_bl_lighten = GState_e_bl_lighten;

	const e_bl_color_dodge = GState_e_bl_color_dodge;

	const e_bl_color_burn = GState_e_bl_color_burn;

	const e_bl_exclusion = GState_e_bl_exclusion;

	const e_bl_hard_light = GState_e_bl_hard_light;

	const e_bl_overlay = GState_e_bl_overlay;

	const e_bl_soft_light = GState_e_bl_soft_light;

	const e_bl_luminosity = GState_e_bl_luminosity;

	const e_bl_hue = GState_e_bl_hue;

	const e_bl_saturation = GState_e_bl_saturation;

	const e_bl_color = GState_e_bl_color;

	function GetBlendMode() {
		return GState_GetBlendMode($this->_cPtr);
	}

	function GetFillOpacity() {
		return GState_GetFillOpacity($this->_cPtr);
	}

	function GetStrokeOpacity() {
		return GState_GetStrokeOpacity($this->_cPtr);
	}

	function GetAISFlag() {
		return GState_GetAISFlag($this->_cPtr);
	}

	function GetSoftMask() {
		$r=GState_GetSoftMask($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetSoftMaskTransform() {
		$r=GState_GetSoftMaskTransform($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetStrokeOverprint() {
		return GState_GetStrokeOverprint($this->_cPtr);
	}

	function GetFillOverprint() {
		return GState_GetFillOverprint($this->_cPtr);
	}

	function GetOverprintMode() {
		return GState_GetOverprintMode($this->_cPtr);
	}

	function GetAutoStrokeAdjust() {
		return GState_GetAutoStrokeAdjust($this->_cPtr);
	}

	function GetSmoothnessTolerance() {
		return GState_GetSmoothnessTolerance($this->_cPtr);
	}

	function GetTransferFunct() {
		$r=GState_GetTransferFunct($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetBlackGenFunct() {
		$r=GState_GetBlackGenFunct($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetUCRFunct() {
		$r=GState_GetUCRFunct($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetHalftone() {
		$r=GState_GetHalftone($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetTransform($mtx_or_a,$b=null,$c_=null,$d=null,$h=null,$v=null) {
		switch (func_num_args()) {
		case 1: GState_SetTransform($this->_cPtr,$mtx_or_a); break;
		case 2: GState_SetTransform($this->_cPtr,$mtx_or_a,$b); break;
		case 3: GState_SetTransform($this->_cPtr,$mtx_or_a,$b,$c_); break;
		case 4: GState_SetTransform($this->_cPtr,$mtx_or_a,$b,$c_,$d); break;
		case 5: GState_SetTransform($this->_cPtr,$mtx_or_a,$b,$c_,$d,$h); break;
		default: GState_SetTransform($this->_cPtr,$mtx_or_a,$b,$c_,$d,$h,$v);
		}
	}

	function Concat($mtx_or_a,$b=null,$c_=null,$d=null,$h=null,$v=null) {
		switch (func_num_args()) {
		case 1: GState_Concat($this->_cPtr,$mtx_or_a); break;
		case 2: GState_Concat($this->_cPtr,$mtx_or_a,$b); break;
		case 3: GState_Concat($this->_cPtr,$mtx_or_a,$b,$c_); break;
		case 4: GState_Concat($this->_cPtr,$mtx_or_a,$b,$c_,$d); break;
		case 5: GState_Concat($this->_cPtr,$mtx_or_a,$b,$c_,$d,$h); break;
		default: GState_Concat($this->_cPtr,$mtx_or_a,$b,$c_,$d,$h,$v);
		}
	}

	function SetStrokeColorSpace($cs) {
		GState_SetStrokeColorSpace($this->_cPtr,$cs);
	}

	function SetFillColorSpace($cs) {
		GState_SetFillColorSpace($this->_cPtr,$cs);
	}

	function SetStrokeColor($c_or_pattern,$c_=null) {
		switch (func_num_args()) {
		case 1: GState_SetStrokeColor($this->_cPtr,$c_or_pattern); break;
		default: GState_SetStrokeColor($this->_cPtr,$c_or_pattern,$c_);
		}
	}

	function SetFillColor($c_or_pattern,$c_=null) {
		switch (func_num_args()) {
		case 1: GState_SetFillColor($this->_cPtr,$c_or_pattern); break;
		default: GState_SetFillColor($this->_cPtr,$c_or_pattern,$c_);
		}
	}

	function SetFlatness($flatness) {
		GState_SetFlatness($this->_cPtr,$flatness);
	}

	function SetLineCap($cap) {
		GState_SetLineCap($this->_cPtr,$cap);
	}

	function SetLineJoin($join) {
		GState_SetLineJoin($this->_cPtr,$join);
	}

	function SetLineWidth($width) {
		GState_SetLineWidth($this->_cPtr,$width);
	}

	function SetMiterLimit($miter_limit) {
		GState_SetMiterLimit($this->_cPtr,$miter_limit);
	}

	function SetDashPattern($dash_array,$phase) {
		GState_SetDashPattern($this->_cPtr,$dash_array,$phase);
	}

	function SetCharSpacing($char_spacing) {
		GState_SetCharSpacing($this->_cPtr,$char_spacing);
	}

	function SetWordSpacing($word_spacing) {
		GState_SetWordSpacing($this->_cPtr,$word_spacing);
	}

	function SetHorizontalScale($hscale) {
		GState_SetHorizontalScale($this->_cPtr,$hscale);
	}

	function SetLeading($leading) {
		GState_SetLeading($this->_cPtr,$leading);
	}

	function SetFont($font,$font_sz) {
		GState_SetFont($this->_cPtr,$font,$font_sz);
	}

	function SetTextRenderMode($rmode) {
		GState_SetTextRenderMode($this->_cPtr,$rmode);
	}

	function SetTextRise($rise) {
		GState_SetTextRise($this->_cPtr,$rise);
	}

	function SetTextKnockout($knockout) {
		GState_SetTextKnockout($this->_cPtr,$knockout);
	}

	function SetRenderingIntent($intent) {
		GState_SetRenderingIntent($this->_cPtr,$intent);
	}

	function SetBlendMode($BM) {
		GState_SetBlendMode($this->_cPtr,$BM);
	}

	function SetFillOpacity($ca) {
		GState_SetFillOpacity($this->_cPtr,$ca);
	}

	function SetStrokeOpacity($ca) {
		GState_SetStrokeOpacity($this->_cPtr,$ca);
	}

	function SetAISFlag($AIS) {
		GState_SetAISFlag($this->_cPtr,$AIS);
	}

	function SetSoftMask($SM) {
		GState_SetSoftMask($this->_cPtr,$SM);
	}

	function SetStrokeOverprint($OP) {
		GState_SetStrokeOverprint($this->_cPtr,$OP);
	}

	function SetFillOverprint($op) {
		GState_SetFillOverprint($this->_cPtr,$op);
	}

	function SetOverprintMode($OPM) {
		GState_SetOverprintMode($this->_cPtr,$OPM);
	}

	function SetAutoStrokeAdjust($SA) {
		GState_SetAutoStrokeAdjust($this->_cPtr,$SA);
	}

	function SetSmoothnessTolerance($SM) {
		GState_SetSmoothnessTolerance($this->_cPtr,$SM);
	}

	function SetBlackGenFunct($BG) {
		GState_SetBlackGenFunct($this->_cPtr,$BG);
	}

	function SetUCRFunct($UCR) {
		GState_SetUCRFunct($this->_cPtr,$UCR);
	}

	function SetTransferFunct($TR) {
		GState_SetTransferFunct($this->_cPtr,$TR);
	}

	function SetHalftone($HT) {
		GState_SetHalftone($this->_cPtr,$HT);
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__PDF__GState') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_GState(); break;
		default: $this->_cPtr=new_GState($c_or_impl);
		}
	}
}

class Image {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_image') return Image_mp_image_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_image') return Image_mp_image_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Image_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function CreateImageMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_encoder_hints=null,$encoder_hints=null) {
		switch (func_num_args()) {
		case 4: $r=Image_CreateImageMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height); break;
		case 5: $r=Image_CreateImageMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_encoder_hints); break;
		default: $r=Image_CreateImageMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_encoder_hints,$encoder_hints);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Image($r);
		}
		return $r;
	}

	static function CreateSoftMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_bpc,$bpc_or_encoder_hints=null,$encoder_hints=null) {
		switch (func_num_args()) {
		case 5: $r=Image_CreateSoftMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_bpc); break;
		case 6: $r=Image_CreateSoftMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_bpc,$bpc_or_encoder_hints); break;
		default: $r=Image_CreateSoftMask($doc,$buf_or_image_data,$buf_size_or_width,$width_or_height,$height_or_bpc,$bpc_or_encoder_hints,$encoder_hints);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Image($r);
		}
		return $r;
	}

	const e_none = 0;

	const e_jpeg = Image_e_jpeg;

	const e_jp2 = Image_e_jp2;

	const e_flate = Image_e_flate;

	const e_g3 = Image_e_g3;

	const e_g4 = Image_e_g4;

	const e_ascii_hex = Image_e_ascii_hex;

	static function Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width=null,$width_or_height_or_encoder_hints=null,$height_or_bpc=null,$bpc_or_color_space=null,$color_space_or_encoder_hints_or_input_format=null,$encoder_hints_or_input_format=null) {
		switch (func_num_args()) {
		case 2: $r=Image_Create($doc,$filename_or_buf_or_image_data); break;
		case 3: $r=Image_Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width); break;
		case 4: $r=Image_Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width,$width_or_height_or_encoder_hints); break;
		case 5: $r=Image_Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width,$width_or_height_or_encoder_hints,$height_or_bpc); break;
		case 6: $r=Image_Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width,$width_or_height_or_encoder_hints,$height_or_bpc,$bpc_or_color_space); break;
		case 7: $r=Image_Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width,$width_or_height_or_encoder_hints,$height_or_bpc,$bpc_or_color_space,$color_space_or_encoder_hints_or_input_format); break;
		default: $r=Image_Create($doc,$filename_or_buf_or_image_data,$encoder_hints_or_buf_size_or_width,$width_or_height_or_encoder_hints,$height_or_bpc,$bpc_or_color_space,$color_space_or_encoder_hints_or_input_format,$encoder_hints_or_input_format);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Image($r);
		}
		return $r;
	}

	function GetSDFObj() {
		$r=Image_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function IsValid() {
		return Image_IsValid($this->_cPtr);
	}

	function GetImageData() {
		$r=Image_GetImageData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetImageDataSize() {
		return Image_GetImageDataSize($this->_cPtr);
	}

	function GetImageColorSpace() {
		$r=Image_GetImageColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function GetImageWidth() {
		return Image_GetImageWidth($this->_cPtr);
	}

	function GetImageHeight() {
		return Image_GetImageHeight($this->_cPtr);
	}

	function GetDecodeArray() {
		$r=Image_GetDecodeArray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetBitsPerComponent() {
		return Image_GetBitsPerComponent($this->_cPtr);
	}

	function GetComponentNum() {
		return Image_GetComponentNum($this->_cPtr);
	}

	function IsImageMask() {
		return Image_IsImageMask($this->_cPtr);
	}

	function IsImageInterpolate() {
		return Image_IsImageInterpolate($this->_cPtr);
	}

	function GetMask() {
		$r=Image_GetMask($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetMask($image_mask_or_mask) {
		Image_SetMask($this->_cPtr,$image_mask_or_mask);
	}

	function GetSoftMask() {
		$r=Image_GetSoftMask($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetSoftMask($soft_mask) {
		Image_SetSoftMask($this->_cPtr,$soft_mask);
	}

	function GetImageRenderingIntent() {
		return Image_GetImageRenderingIntent($this->_cPtr);
	}

	function Export($filename_or_writer) {
		return Image_Export($this->_cPtr,$filename_or_writer);
	}

	function ExportAsTiff($filename_or_writer) {
		Image_ExportAsTiff($this->_cPtr,$filename_or_writer);
	}

	function ExportAsPng($filename_or_writer) {
		Image_ExportAsPng($this->_cPtr,$filename_or_writer);
	}

	function __construct($image_xobject_or_impl=null) {
		if (is_resource($image_xobject_or_impl) && get_resource_type($image_xobject_or_impl) === '_p_pdftron__PDF__Image') {
			$this->_cPtr=$image_xobject_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Image(); break;
		default: $this->_cPtr=new_Image($image_xobject_or_impl);
		}
	}
}

class PageLabel {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_decimal = 0;

	const e_roman_uppercase = PageLabel_e_roman_uppercase;

	const e_roman_lowercase = PageLabel_e_roman_lowercase;

	const e_alphabetic_uppercase = PageLabel_e_alphabetic_uppercase;

	const e_alphabetic_lowercase = PageLabel_e_alphabetic_lowercase;

	const e_none = PageLabel_e_none;

	static function Create($doc,$style,$prefix=null,$start_at=1) {
		switch (func_num_args()) {
		case 2: $r=PageLabel_Create($doc,$style); break;
		default: $r=PageLabel_Create($doc,$style,$prefix,$start_at);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PageLabel($r);
		}
		return $r;
	}

	function IsEqual($d) {
		return PageLabel_IsEqual($this->_cPtr,$d);
	}

	function IsValid() {
		return PageLabel_IsValid($this->_cPtr);
	}

	function GetLabelTitle($page_num) {
		return PageLabel_GetLabelTitle($this->_cPtr,$page_num);
	}

	function SetStyle($style) {
		PageLabel_SetStyle($this->_cPtr,$style);
	}

	function GetStyle() {
		return PageLabel_GetStyle($this->_cPtr);
	}

	function GetPrefix() {
		return PageLabel_GetPrefix($this->_cPtr);
	}

	function SetPrefix($prefix) {
		PageLabel_SetPrefix($this->_cPtr,$prefix);
	}

	function GetStart() {
		return PageLabel_GetStart($this->_cPtr);
	}

	function SetStart($start_at) {
		PageLabel_SetStart($this->_cPtr,$start_at);
	}

	function GetFirstPageNum() {
		return PageLabel_GetFirstPageNum($this->_cPtr);
	}

	function GetLastPageNum() {
		return PageLabel_GetLastPageNum($this->_cPtr);
	}

	function GetSDFObj() {
		$r=PageLabel_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($l_or_d=null,$first_page=null,$last_page=null) {
		if (is_resource($l_or_d) && get_resource_type($l_or_d) === '_p_pdftron__PDF__PageLabel') {
			$this->_cPtr=$l_or_d;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PageLabel(); break;
		case 1: $this->_cPtr=new_PageLabel($l_or_d); break;
		case 2: $this->_cPtr=new_PageLabel($l_or_d,$first_page); break;
		default: $this->_cPtr=new_PageLabel($l_or_d,$first_page,$last_page);
		}
	}
}

class Separation {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_separation_name') return Separation_m_separation_name_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_separation_name') return Separation_m_separation_name_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Separation_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($arg1=null) {
		if (is_resource($arg1) && get_resource_type($arg1) === '_p_pdftron__PDF__Separation') {
			$this->_cPtr=$arg1;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Separation(); break;
		default: $this->_cPtr=new_Separation($arg1);
		}
	}

	function C() {
		return Separation_C($this->_cPtr);
	}

	function M() {
		return Separation_M($this->_cPtr);
	}

	function Y() {
		return Separation_Y($this->_cPtr);
	}

	function K() {
		return Separation_K($this->_cPtr);
	}

	function GetDataSize() {
		return Separation_GetDataSize($this->_cPtr);
	}

	function GetSeparationName() {
		return Separation_GetSeparationName($this->_cPtr);
	}

	function GetData() {
		$r=Separation_GetData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}
}

class PDFRasterizer {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_rast') return PDFRasterizer_mp_rast_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_rast') return PDFRasterizer_mp_rast_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFRasterizer_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_BuiltIn = 0;

	const e_GDIPlus = PDFRasterizer_e_GDIPlus;

	const e_op_off = 0;

	const e_op_on = PDFRasterizer_e_op_on;

	const e_op_pdfx_on = PDFRasterizer_e_op_pdfx_on;

	function __construct($type=null) {
		if (is_resource($type) && get_resource_type($type) === '_p_pdftron__PDF__PDFRasterizer') {
			$this->_cPtr=$type;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PDFRasterizer(); break;
		default: $this->_cPtr=new_PDFRasterizer($type);
		}
	}

	function Rasterize($page,$width,$height,$stride,$num_comps,$demult,$device_mtx,$clip=null,$scrl_clip_regions=null) {
		$r=PDFRasterizer_Rasterize($this->_cPtr,$page,$width,$height,$stride,$num_comps,$demult,$device_mtx,$clip,$scrl_clip_regions);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function RasterizeSeparations($page,$width,$height,$mtx,$clip,$cancel) {
		$r=PDFRasterizer_RasterizeSeparations($this->_cPtr,$page,$width,$height,$mtx,$clip,$cancel);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorSeparation($r);
		}
		return $r;
	}

	function SetDrawAnnotations($render_annots) {
		PDFRasterizer_SetDrawAnnotations($this->_cPtr,$render_annots);
	}

	function SetHighlightFields($highlight_fields) {
		PDFRasterizer_SetHighlightFields($this->_cPtr,$highlight_fields);
	}

	function SetAntiAliasing($enable_aa) {
		PDFRasterizer_SetAntiAliasing($this->_cPtr,$enable_aa);
	}

	function SetPathHinting($enable_hinting) {
		PDFRasterizer_SetPathHinting($this->_cPtr,$enable_hinting);
	}

	function SetThinLineAdjustment($pixel_grid_fit,$stroke_adjust) {
		PDFRasterizer_SetThinLineAdjustment($this->_cPtr,$pixel_grid_fit,$stroke_adjust);
	}

	function SetImageSmoothing($smoothing_enabled=true,$hq_image_resampling=false) {
		PDFRasterizer_SetImageSmoothing($this->_cPtr,$smoothing_enabled,$hq_image_resampling);
	}

	function SetCaching($enabled=true) {
		PDFRasterizer_SetCaching($this->_cPtr,$enabled);
	}

	function SetGamma($expgamma) {
		PDFRasterizer_SetGamma($this->_cPtr,$expgamma);
	}

	function SetOCGContext($ctx) {
		PDFRasterizer_SetOCGContext($this->_cPtr,$ctx);
	}

	function SetPrintMode($is_printing) {
		PDFRasterizer_SetPrintMode($this->_cPtr,$is_printing);
	}

	function SetOverprint($op) {
		PDFRasterizer_SetOverprint($this->_cPtr,$op);
	}

	function SetErrorReportProc($instance) {
		PDFRasterizer_SetErrorReportProc($this->_cPtr,$instance);
	}

	function SetRasterizerType($type) {
		PDFRasterizer_SetRasterizerType($this->_cPtr,$type);
	}

	function GetRasterizerType() {
		return PDFRasterizer_GetRasterizerType($this->_cPtr);
	}

	const e_postprocess_none = 0;

	const e_postprocess_invert = PDFRasterizer_e_postprocess_invert;

	const e_postprocess_gradient_map = PDFRasterizer_e_postprocess_gradient_map;

	const e_postprocess_night_mode = PDFRasterizer_e_postprocess_night_mode;

	function SetColorPostProcessMode($mode) {
		PDFRasterizer_SetColorPostProcessMode($this->_cPtr,$mode);
	}

	function GetColorPostProcessMode() {
		return PDFRasterizer_GetColorPostProcessMode($this->_cPtr);
	}

	function UpdateBuffer() {
		PDFRasterizer_UpdateBuffer($this->_cPtr);
	}

	function Destroy() {
		PDFRasterizer_Destroy($this->_cPtr);
	}
}

class ViewerOptimizedOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_objset') return ViewerOptimizedOptions_m_objset_set($this->_cPtr,$value);
		if ($var === 'm_obj') return ViewerOptimizedOptions_m_obj_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_objset') return new ObjSet(ViewerOptimizedOptions_m_objset_get($this->_cPtr));
		if ($var === 'm_obj') return ViewerOptimizedOptions_m_obj_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ViewerOptimizedOptions_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ViewerOptimizedOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ViewerOptimizedOptions();
	}

	function SetThumbnailRenderingThreshold($threshold) {
		ViewerOptimizedOptions_SetThumbnailRenderingThreshold($this->_cPtr,$threshold);
	}

	function SetMinimumInitialThumbnails($initial_thumbs) {
		ViewerOptimizedOptions_SetMinimumInitialThumbnails($this->_cPtr,$initial_thumbs);
	}

	function SetThumbnailSize($size) {
		ViewerOptimizedOptions_SetThumbnailSize($this->_cPtr,$size);
	}

	function SetOverprint($mode) {
		ViewerOptimizedOptions_SetOverprint($this->_cPtr,$mode);
	}
}

class RefreshOptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__RefreshOptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_RefreshOptions();
	}

	function GetDrawBackgroundOnly() {
		return RefreshOptions_GetDrawBackgroundOnly($this->_cPtr);
	}

	function SetDrawBackgroundOnly($value) {
		$r=RefreshOptions_SetDrawBackgroundOnly($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RefreshOptions($r);
		}
		return $r;
	}

	function GetRefreshExisting() {
		return RefreshOptions_GetRefreshExisting($this->_cPtr);
	}

	function SetRefreshExisting($value) {
		$r=RefreshOptions_SetRefreshExisting($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RefreshOptions($r);
		}
		return $r;
	}

	function GetUseNonStandardRotation() {
		return RefreshOptions_GetUseNonStandardRotation($this->_cPtr);
	}

	function SetUseNonStandardRotation($value) {
		$r=RefreshOptions_SetUseNonStandardRotation($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RefreshOptions($r);
		}
		return $r;
	}

	function GetUseRoundedCorners() {
		return RefreshOptions_GetUseRoundedCorners($this->_cPtr);
	}

	function SetUseRoundedCorners($value) {
		$r=RefreshOptions_SetUseRoundedCorners($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RefreshOptions($r);
		}
		return $r;
	}

	function GetInternalObj() {
		$r=RefreshOptions_GetInternalObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class PDFDocViewPrefs {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_prefs') return PDFDocViewPrefs_mp_prefs_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_prefs') return PDFDocViewPrefs_mp_prefs_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFDocViewPrefs_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function SetInitialPage($dest) {
		PDFDocViewPrefs_SetInitialPage($this->_cPtr,$dest);
	}

	const e_UseNone = 0;

	const e_UseThumbs = PDFDocViewPrefs_e_UseThumbs;

	const e_UseBookmarks = PDFDocViewPrefs_e_UseBookmarks;

	const e_FullScreen = PDFDocViewPrefs_e_FullScreen;

	const e_UseOC = PDFDocViewPrefs_e_UseOC;

	const e_UseAttachments = PDFDocViewPrefs_e_UseAttachments;

	function SetPageMode($mode) {
		PDFDocViewPrefs_SetPageMode($this->_cPtr,$mode);
	}

	function GetPageMode() {
		return PDFDocViewPrefs_GetPageMode($this->_cPtr);
	}

	const e_Default = 0;

	const e_SinglePage = PDFDocViewPrefs_e_SinglePage;

	const e_OneColumn = PDFDocViewPrefs_e_OneColumn;

	const e_TwoColumnLeft = PDFDocViewPrefs_e_TwoColumnLeft;

	const e_TwoColumnRight = PDFDocViewPrefs_e_TwoColumnRight;

	const e_TwoPageLeft = PDFDocViewPrefs_e_TwoPageLeft;

	const e_TwoPageRight = PDFDocViewPrefs_e_TwoPageRight;

	function SetLayoutMode($layout) {
		PDFDocViewPrefs_SetLayoutMode($this->_cPtr,$layout);
	}

	function GetLayoutMode() {
		return PDFDocViewPrefs_GetLayoutMode($this->_cPtr);
	}

	const e_HideToolbar = 0;

	const e_HideMenubar = PDFDocViewPrefs_e_HideMenubar;

	const e_HideWindowUI = PDFDocViewPrefs_e_HideWindowUI;

	const e_FitWindow = PDFDocViewPrefs_e_FitWindow;

	const e_CenterWindow = PDFDocViewPrefs_e_CenterWindow;

	const e_DisplayDocTitle = PDFDocViewPrefs_e_DisplayDocTitle;

	function SetPref($pref,$value) {
		PDFDocViewPrefs_SetPref($this->_cPtr,$pref,$value);
	}

	function GetPref($pref) {
		return PDFDocViewPrefs_GetPref($this->_cPtr,$pref);
	}

	function SetNonFullScreenPageMode($mode) {
		PDFDocViewPrefs_SetNonFullScreenPageMode($this->_cPtr,$mode);
	}

	function GetNonFullScreenPageMode() {
		return PDFDocViewPrefs_GetNonFullScreenPageMode($this->_cPtr);
	}

	function SetDirection($left_to_right) {
		PDFDocViewPrefs_SetDirection($this->_cPtr,$left_to_right);
	}

	function GetDirection() {
		return PDFDocViewPrefs_GetDirection($this->_cPtr);
	}

	function SetViewArea($box) {
		PDFDocViewPrefs_SetViewArea($this->_cPtr,$box);
	}

	function GetViewArea() {
		return PDFDocViewPrefs_GetViewArea($this->_cPtr);
	}

	function SetViewClip($box) {
		PDFDocViewPrefs_SetViewClip($this->_cPtr,$box);
	}

	function GetViewClip() {
		return PDFDocViewPrefs_GetViewClip($this->_cPtr);
	}

	function SetPrintArea($box) {
		PDFDocViewPrefs_SetPrintArea($this->_cPtr,$box);
	}

	function GetPrintArea() {
		return PDFDocViewPrefs_GetPrintArea($this->_cPtr);
	}

	function SetPrintClip($box) {
		PDFDocViewPrefs_SetPrintClip($this->_cPtr,$box);
	}

	function GetPrintClip() {
		return PDFDocViewPrefs_GetPrintClip($this->_cPtr);
	}

	function GetSDFObj() {
		$r=PDFDocViewPrefs_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($tr_or_impl=null) {
		if (is_resource($tr_or_impl) && get_resource_type($tr_or_impl) === '_p_pdftron__PDF__PDFDocViewPrefs') {
			$this->_cPtr=$tr_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PDFDocViewPrefs(); break;
		default: $this->_cPtr=new_PDFDocViewPrefs($tr_or_impl);
		}
	}
}

class PDFDocInfo {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_info') return PDFDocInfo_mp_info_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_info') return PDFDocInfo_mp_info_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFDocInfo_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetTitle() {
		return PDFDocInfo_GetTitle($this->_cPtr);
	}

	function GetTitleObj() {
		$r=PDFDocInfo_GetTitleObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetTitle($title) {
		PDFDocInfo_SetTitle($this->_cPtr,$title);
	}

	function GetAuthor() {
		return PDFDocInfo_GetAuthor($this->_cPtr);
	}

	function GetAuthorObj() {
		$r=PDFDocInfo_GetAuthorObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetAuthor($author) {
		PDFDocInfo_SetAuthor($this->_cPtr,$author);
	}

	function GetSubject() {
		return PDFDocInfo_GetSubject($this->_cPtr);
	}

	function GetSubjectObj() {
		$r=PDFDocInfo_GetSubjectObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetSubject($subject) {
		PDFDocInfo_SetSubject($this->_cPtr,$subject);
	}

	function GetKeywords() {
		return PDFDocInfo_GetKeywords($this->_cPtr);
	}

	function GetKeywordsObj() {
		$r=PDFDocInfo_GetKeywordsObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetKeywords($keywords) {
		PDFDocInfo_SetKeywords($this->_cPtr,$keywords);
	}

	function GetCreator() {
		return PDFDocInfo_GetCreator($this->_cPtr);
	}

	function GetCreatorObj() {
		$r=PDFDocInfo_GetCreatorObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetCreator($creator) {
		PDFDocInfo_SetCreator($this->_cPtr,$creator);
	}

	function GetProducer() {
		return PDFDocInfo_GetProducer($this->_cPtr);
	}

	function GetProducerObj() {
		$r=PDFDocInfo_GetProducerObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetProducer($producer) {
		PDFDocInfo_SetProducer($this->_cPtr,$producer);
	}

	function GetCreationDate() {
		$r=PDFDocInfo_GetCreationDate($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Date($r);
		}
		return $r;
	}

	function SetCreationDate($creation_date) {
		PDFDocInfo_SetCreationDate($this->_cPtr,$creation_date);
	}

	function GetModDate() {
		$r=PDFDocInfo_GetModDate($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Date($r);
		}
		return $r;
	}

	function SetModDate($mod_date) {
		PDFDocInfo_SetModDate($this->_cPtr,$mod_date);
	}

	function GetSDFObj() {
		$r=PDFDocInfo_GetSDFObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($tr_or_impl=null) {
		if (is_resource($tr_or_impl) && get_resource_type($tr_or_impl) === '_p_pdftron__PDF__PDFDocInfo') {
			$this->_cPtr=$tr_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PDFDocInfo(); break;
		default: $this->_cPtr=new_PDFDocInfo($tr_or_impl);
		}
	}
}

class PDFDoc {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_doc') return PDFDoc_mp_doc_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_doc') return PDFDoc_mp_doc_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFDoc_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Close() {
		PDFDoc_Close($this->_cPtr);
	}

	function IsEncrypted() {
		return PDFDoc_IsEncrypted($this->_cPtr);
	}

	function InitSecurityHandler() {
		return PDFDoc_InitSecurityHandler($this->_cPtr);
	}

	function InitStdSecurityHandler($password_or_password_buf,$password_sz=null) {
		switch (func_num_args()) {
		case 1: $r=PDFDoc_InitStdSecurityHandler($this->_cPtr,$password_or_password_buf); break;
		default: $r=PDFDoc_InitStdSecurityHandler($this->_cPtr,$password_or_password_buf,$password_sz);
		}
		return $r;
	}

	function GetSecurityHandler() {
		$r=PDFDoc_GetSecurityHandler($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SecurityHandler($r);
		}
		return $r;
	}

	function SetSecurityHandler($handler) {
		PDFDoc_SetSecurityHandler($this->_cPtr,$handler);
	}

	function RemoveSecurity() {
		PDFDoc_RemoveSecurity($this->_cPtr);
	}

	function HasSignatures() {
		return PDFDoc_HasSignatures($this->_cPtr);
	}

	function AddSignatureHandler($signature_handler) {
		return PDFDoc_AddSignatureHandler($this->_cPtr,$signature_handler);
	}

	function AddStdSignatureHandler($pkcs12_keyfile_or_pkcs12_keybuffer,$pkcs12_keypass) {
		return PDFDoc_AddStdSignatureHandler($this->_cPtr,$pkcs12_keyfile_or_pkcs12_keybuffer,$pkcs12_keypass);
	}

	function RemoveSignatureHandler($signature_handler_id) {
		PDFDoc_RemoveSignatureHandler($this->_cPtr,$signature_handler_id);
	}

	function GetSignatureHandler($signature_handler_id) {
		$r=PDFDoc_GetSignatureHandler($this->_cPtr,$signature_handler_id);
		$this->_cPtr = $r;
		return $this;
	}

	function GetUndoManager() {
		$r=PDFDoc_GetUndoManager($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new UndoManager($r);
		}
		return $r;
	}

	function CreateDigitalSignatureField($in_sig_field_name=null) {
		switch (func_num_args()) {
		case 0: $r=PDFDoc_CreateDigitalSignatureField($this->_cPtr); break;
		default: $r=PDFDoc_CreateDigitalSignatureField($this->_cPtr,$in_sig_field_name);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DigitalSignatureField($r);
		}
		return $r;
	}

	function GetDigitalSignatureFieldIterator() {
		$r=PDFDoc_GetDigitalSignatureFieldIterator($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DigitalSignatureFieldIterator($r);
		}
		return $r;
	}

	function GetDigitalSignaturePermissions() {
		return PDFDoc_GetDigitalSignaturePermissions($this->_cPtr);
	}

	function GetDocInfo() {
		$r=PDFDoc_GetDocInfo($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PDFDocInfo($r);
		}
		return $r;
	}

	function GetViewPrefs() {
		$r=PDFDoc_GetViewPrefs($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PDFDocViewPrefs($r);
		}
		return $r;
	}

	const e_action_trigger_doc_will_close = 17;

	const e_action_trigger_doc_will_save = 18;

	const e_action_trigger_doc_did_save = 19;

	const e_action_trigger_doc_will_print = 20;

	const e_action_trigger_doc_did_print = 21;

	function GetTriggerAction($trigger) {
		$r=PDFDoc_GetTriggerAction($this->_cPtr,$trigger);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function IsModified() {
		return PDFDoc_IsModified($this->_cPtr);
	}

	function HasRepairedXRef() {
		return PDFDoc_HasRepairedXRef($this->_cPtr);
	}

	function IsLinearized() {
		return PDFDoc_IsLinearized($this->_cPtr);
	}

	function HasDownloader() {
		return PDFDoc_HasDownloader($this->_cPtr);
	}

	function GetDownloadedByteCount() {
		return PDFDoc_GetDownloadedByteCount($this->_cPtr);
	}

	function GetTotalRemoteByteCount() {
		return PDFDoc_GetTotalRemoteByteCount($this->_cPtr);
	}

	function Save($path_or_flags_or_stream,$flags=null) {
		switch (func_num_args()) {
		case 1: $r=PDFDoc_Save($this->_cPtr,$path_or_flags_or_stream); break;
		default: $r=PDFDoc_Save($this->_cPtr,$path_or_flags_or_stream,$flags);
		}
		return $r;
	}

	function SaveCustomSignature($in_signature,$in_field,$in_path_or_out_stream) {
		PDFDoc_SaveCustomSignature($this->_cPtr,$in_signature,$in_field,$in_path_or_out_stream);
	}

	function GetPageIterator($page_number=1) {
		$r=PDFDoc_GetPageIterator($this->_cPtr,$page_number);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PageIterator($r);
		}
		return $r;
	}

	function GetPage($page_number) {
		$r=PDFDoc_GetPage($this->_cPtr,$page_number);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function PageRemove($page_itr) {
		PDFDoc_PageRemove($this->_cPtr,$page_itr);
	}

	const e_none = 0;

	const e_insert_bookmark = PDFDoc_e_insert_bookmark;

	const e_insert_goto_bookmark = PDFDoc_e_insert_goto_bookmark;

	function PageInsert($where,$page) {
		PDFDoc_PageInsert($this->_cPtr,$where,$page);
	}

	function InsertPages($insert_before_page_number,$src_doc,$start_page_or_source_page_set,$end_page_or_flag,$flag=null) {
		switch (func_num_args()) {
		case 4: PDFDoc_InsertPages($this->_cPtr,$insert_before_page_number,$src_doc,$start_page_or_source_page_set,$end_page_or_flag); break;
		default: PDFDoc_InsertPages($this->_cPtr,$insert_before_page_number,$src_doc,$start_page_or_source_page_set,$end_page_or_flag,$flag);
		}
	}

	function MovePages($move_before_page_number,$src_doc,$start_page_or_source_page_set,$end_page_or_flag,$flag=null) {
		switch (func_num_args()) {
		case 4: PDFDoc_MovePages($this->_cPtr,$move_before_page_number,$src_doc,$start_page_or_source_page_set,$end_page_or_flag); break;
		default: PDFDoc_MovePages($this->_cPtr,$move_before_page_number,$src_doc,$start_page_or_source_page_set,$end_page_or_flag,$flag);
		}
	}

	function PagePushFront($page) {
		PDFDoc_PagePushFront($this->_cPtr,$page);
	}

	function PagePushBack($page) {
		PDFDoc_PagePushBack($this->_cPtr,$page);
	}

	function ImportPages($pages,$import_bookmarks=false) {
		$r=PDFDoc_ImportPages($this->_cPtr,$pages,$import_bookmarks);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorPage($r);
		}
		return $r;
	}

	function PageCreate($media_box=null) {
		switch (func_num_args()) {
		case 0: $r=PDFDoc_PageCreate($this->_cPtr); break;
		default: $r=PDFDoc_PageCreate($this->_cPtr,$media_box);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Page($r);
		}
		return $r;
	}

	function AppendTextDiff($page1_or_doc1,$page2_or_doc2,$options=null) {
		switch (func_num_args()) {
		case 2: $r=PDFDoc_AppendTextDiff($this->_cPtr,$page1_or_doc1,$page2_or_doc2); break;
		default: $r=PDFDoc_AppendTextDiff($this->_cPtr,$page1_or_doc1,$page2_or_doc2,$options);
		}
		return $r;
	}

	static function HighlightTextDiff($doc1,$doc2,$options) {
		return PDFDoc_HighlightTextDiff($doc1,$doc2,$options);
	}

	function GetFirstBookmark() {
		$r=PDFDoc_GetFirstBookmark($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Bookmark($r);
		}
		return $r;
	}

	function AddRootBookmark($root_bookmark) {
		PDFDoc_AddRootBookmark($this->_cPtr,$root_bookmark);
	}

	function GetTrailer() {
		$r=PDFDoc_GetTrailer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetRoot() {
		$r=PDFDoc_GetRoot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetPages() {
		$r=PDFDoc_GetPages($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetPageCount() {
		return PDFDoc_GetPageCount($this->_cPtr);
	}

	function GetFieldIterator($field_name=null) {
		switch (func_num_args()) {
		case 0: $r=PDFDoc_GetFieldIterator($this->_cPtr); break;
		default: $r=PDFDoc_GetFieldIterator($this->_cPtr,$field_name);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FieldIterator($r);
		}
		return $r;
	}

	function GetField($field_name) {
		$r=PDFDoc_GetField($this->_cPtr,$field_name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Field($r);
		}
		return $r;
	}

	function FieldCreate($field_name,$type,$field_value=null,$def_field_value=null) {
		switch (func_num_args()) {
		case 2: $r=PDFDoc_FieldCreate($this->_cPtr,$field_name,$type); break;
		case 3: $r=PDFDoc_FieldCreate($this->_cPtr,$field_name,$type,$field_value); break;
		default: $r=PDFDoc_FieldCreate($this->_cPtr,$field_name,$type,$field_value,$def_field_value);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Field($r);
		}
		return $r;
	}

	function RefreshFieldAppearances() {
		PDFDoc_RefreshFieldAppearances($this->_cPtr);
	}

	function RefreshAnnotAppearances($options=null) {
		PDFDoc_RefreshAnnotAppearances($this->_cPtr,$options);
	}

	function FlattenAnnotations($forms_only=false) {
		PDFDoc_FlattenAnnotations($this->_cPtr,$forms_only);
	}

	function GetAcroForm() {
		$r=PDFDoc_GetAcroForm($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	const e_forms_only = 0;

	const e_annots_only = PDFDoc_e_annots_only;

	const e_both = PDFDoc_e_both;

	const e_annots_only_no_links = 5;

	function FDFExtract($flag_or_pages_to_extract_or_annotations_or_annot_added=null,$flag_or_annot_modified=null,$annot_deleted=null) {
		switch (func_num_args()) {
		case 0: $r=PDFDoc_FDFExtract($this->_cPtr); break;
		case 1: $r=PDFDoc_FDFExtract($this->_cPtr,$flag_or_pages_to_extract_or_annotations_or_annot_added); break;
		case 2: $r=PDFDoc_FDFExtract($this->_cPtr,$flag_or_pages_to_extract_or_annotations_or_annot_added,$flag_or_annot_modified); break;
		default: $r=PDFDoc_FDFExtract($this->_cPtr,$flag_or_pages_to_extract_or_annotations_or_annot_added,$flag_or_annot_modified,$annot_deleted);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FDFDoc($r);
		}
		return $r;
	}

	function FDFMerge($fdf_doc) {
		PDFDoc_FDFMerge($this->_cPtr,$fdf_doc);
	}

	function FDFUpdate($fdf_doc) {
		PDFDoc_FDFUpdate($this->_cPtr,$fdf_doc);
	}

	function GetOpenAction() {
		$r=PDFDoc_GetOpenAction($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function SetOpenAction($action) {
		PDFDoc_SetOpenAction($this->_cPtr,$action);
	}

	function AddFileAttachment($file_key,$embedded_file) {
		PDFDoc_AddFileAttachment($this->_cPtr,$file_key,$embedded_file);
	}

	function GetPageLabel($page_num) {
		$r=PDFDoc_GetPageLabel($this->_cPtr,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PageLabel($r);
		}
		return $r;
	}

	function SetPageLabel($page_num,$label) {
		PDFDoc_SetPageLabel($this->_cPtr,$page_num,$label);
	}

	function RemovePageLabel($page_num) {
		PDFDoc_RemovePageLabel($this->_cPtr,$page_num);
	}

	function IsTagged() {
		return PDFDoc_IsTagged($this->_cPtr);
	}

	function GetStructTree() {
		$r=PDFDoc_GetStructTree($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new STree($r);
		}
		return $r;
	}

	function HasOC() {
		return PDFDoc_HasOC($this->_cPtr);
	}

	function GetOCGs() {
		$r=PDFDoc_GetOCGs($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetOCGConfig() {
		$r=PDFDoc_GetOCGConfig($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Config($r);
		}
		return $r;
	}

	function AddHighlights($hilite) {
		PDFDoc_AddHighlights($this->_cPtr,$hilite);
	}

	function CreateIndirectName($name) {
		$r=PDFDoc_CreateIndirectName($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectArray() {
		$r=PDFDoc_CreateIndirectArray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectBool($value) {
		$r=PDFDoc_CreateIndirectBool($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectDict() {
		$r=PDFDoc_CreateIndirectDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectNull() {
		$r=PDFDoc_CreateIndirectNull($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectNumber($value) {
		$r=PDFDoc_CreateIndirectNumber($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectString($value_or_str,$size=null) {
		switch (func_num_args()) {
		case 1: $r=PDFDoc_CreateIndirectString($this->_cPtr,$value_or_str); break;
		default: $r=PDFDoc_CreateIndirectString($this->_cPtr,$value_or_str,$size);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function CreateIndirectStream($data,$filter_chain_or_data_size=null,$filter_chain=null) {
		switch (func_num_args()) {
		case 1: $r=PDFDoc_CreateIndirectStream($this->_cPtr,$data); break;
		case 2: $r=PDFDoc_CreateIndirectStream($this->_cPtr,$data,$filter_chain_or_data_size); break;
		default: $r=PDFDoc_CreateIndirectStream($this->_cPtr,$data,$filter_chain_or_data_size,$filter_chain);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetSDFDoc() {
		$r=PDFDoc_GetSDFDoc($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SDFDoc($r);
		}
		return $r;
	}

	function Lock() {
		PDFDoc_Lock($this->_cPtr);
	}

	function Unlock() {
		PDFDoc_Unlock($this->_cPtr);
	}

	function TryLock($milliseconds=0) {
		return PDFDoc_TryLock($this->_cPtr,$milliseconds);
	}

	function LockRead() {
		PDFDoc_LockRead($this->_cPtr);
	}

	function UnlockRead() {
		PDFDoc_UnlockRead($this->_cPtr);
	}

	function TryLockRead($milliseconds=0) {
		return PDFDoc_TryLockRead($this->_cPtr,$milliseconds);
	}

	function GetFileName() {
		return PDFDoc_GetFileName($this->_cPtr);
	}

	function GenerateThumbnails($size) {
		PDFDoc_GenerateThumbnails($this->_cPtr,$size);
	}

	function AppendVisualDiff($p1,$p2,$opts) {
		PDFDoc_AppendVisualDiff($this->_cPtr,$p1,$p2,$opts);
	}

	function SaveViewerOptimized($path_or_out_buf,$opts_or_out_buf_size,$opts=null) {
		switch (func_num_args()) {
		case 2: PDFDoc_SaveViewerOptimized($this->_cPtr,$path_or_out_buf,$opts_or_out_buf_size); break;
		default: PDFDoc_SaveViewerOptimized($this->_cPtr,$path_or_out_buf,$opts_or_out_buf_size,$opts);
		}
	}

	const e_unsigned = 0;

	const e_failure = PDFDoc_e_failure;

	const e_untrusted = PDFDoc_e_untrusted;

	const e_unsupported = PDFDoc_e_unsupported;

	const e_verified = PDFDoc_e_verified;

	function VerifySignedDigitalSignatures($in_opts) {
		return PDFDoc_VerifySignedDigitalSignatures($this->_cPtr,$in_opts);
	}

	function MergeXFDF($stream_or_xfdf,$opts=null) {
		PDFDoc_MergeXFDF($this->_cPtr,$stream_or_xfdf,$opts);
	}

	static function CreateInternal($impl) {
		$r=PDFDoc_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PDFDoc($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return PDFDoc_GetHandleInternal($this->_cPtr);
	}

	function __construct($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl=null,$buf_size=null) {
		if (is_resource($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl) && get_resource_type($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl) === '_p_pdftron__PDF__PDFDoc') {
			$this->_cPtr=$sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PDFDoc(); break;
		case 1: $this->_cPtr=new_PDFDoc($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl); break;
		default: $this->_cPtr=new_PDFDoc($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl,$buf_size);
		}
	}
}

class Caret extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos,$padding=null) {
		switch (func_num_args()) {
		case 2: $r=Caret_Create($doc,$pos); break;
		default: $r=Caret_Create($doc,$pos,$padding);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Caret($r);
		}
		return $r;
	}

	function GetSymbol() {
		return Caret_GetSymbol($this->_cPtr);
	}

	function SetSymbol($symbol) {
		Caret_SetSymbol($this->_cPtr,$symbol);
	}

	function __construct($d_or_ann_or_caret=null) {
		if (is_resource($d_or_ann_or_caret) && get_resource_type($d_or_ann_or_caret) === '_p_pdftron__PDF__Annots__Caret') {
			$this->_cPtr=$d_or_ann_or_caret;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Caret(); break;
		default: $this->_cPtr=new_Caret($d_or_ann_or_caret);
		}
	}
}

class Circle extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Circle_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Circle($r);
		}
		return $r;
	}

	function __construct($d_or_circle=null) {
		if (is_resource($d_or_circle) && get_resource_type($d_or_circle) === '_p_pdftron__PDF__Annots__Circle') {
			$this->_cPtr=$d_or_circle;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Circle(); break;
		default: $this->_cPtr=new_Circle($d_or_circle);
		}
	}
}

class HighlightAnnot extends TextMarkup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TextMarkup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TextMarkup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TextMarkup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=HighlightAnnot_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new HighlightAnnot($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_highlight) {
		if (is_resource($d_or_ann_or_highlight) && get_resource_type($d_or_ann_or_highlight) === '_p_pdftron__PDF__Annots__HighlightAnnot') {
			$this->_cPtr=$d_or_ann_or_highlight;
			return;
		}
		$this->_cPtr=new_HighlightAnnot($d_or_ann_or_highlight);
	}
}

class LineAnnot extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=LineAnnot_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new LineAnnot($r);
		}
		return $r;
	}

	function GetStartPoint() {
		$r=LineAnnot_GetStartPoint($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetStartPoint($sp) {
		LineAnnot_SetStartPoint($this->_cPtr,$sp);
	}

	function GetEndPoint() {
		$r=LineAnnot_GetEndPoint($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetEndPoint($ep) {
		LineAnnot_SetEndPoint($this->_cPtr,$ep);
	}

	const e_Square = 0;

	const e_Circle = LineAnnot_e_Circle;

	const e_Diamond = LineAnnot_e_Diamond;

	const e_OpenArrow = LineAnnot_e_OpenArrow;

	const e_ClosedArrow = LineAnnot_e_ClosedArrow;

	const e_Butt = LineAnnot_e_Butt;

	const e_ROpenArrow = LineAnnot_e_ROpenArrow;

	const e_RClosedArrow = LineAnnot_e_RClosedArrow;

	const e_Slash = LineAnnot_e_Slash;

	const e_None = LineAnnot_e_None;

	const e_Unknown = LineAnnot_e_Unknown;

	function GetStartStyle() {
		return LineAnnot_GetStartStyle($this->_cPtr);
	}

	function SetStartStyle($sst) {
		LineAnnot_SetStartStyle($this->_cPtr,$sst);
	}

	function GetEndStyle() {
		return LineAnnot_GetEndStyle($this->_cPtr);
	}

	function SetEndStyle($est) {
		LineAnnot_SetEndStyle($this->_cPtr,$est);
	}

	function GetLeaderLineLength() {
		return LineAnnot_GetLeaderLineLength($this->_cPtr);
	}

	function SetLeaderLineLength($length) {
		LineAnnot_SetLeaderLineLength($this->_cPtr,$length);
	}

	function GetLeaderLineExtensionLength() {
		return LineAnnot_GetLeaderLineExtensionLength($this->_cPtr);
	}

	function SetLeaderLineExtensionLength($length) {
		LineAnnot_SetLeaderLineExtensionLength($this->_cPtr,$length);
	}

	function GetShowCaption() {
		return LineAnnot_GetShowCaption($this->_cPtr);
	}

	function SetShowCaption($showCaption) {
		LineAnnot_SetShowCaption($this->_cPtr,$showCaption);
	}

	const e_LineArrow = 0;

	const e_LineDimension = LineAnnot_e_LineDimension;

	const e_null = LineAnnot_e_null;

	function GetIntentType() {
		return LineAnnot_GetIntentType($this->_cPtr);
	}

	function SetIntentType($it) {
		LineAnnot_SetIntentType($this->_cPtr,$it);
	}

	function GetLeaderLineOffset() {
		return LineAnnot_GetLeaderLineOffset($this->_cPtr);
	}

	function SetLeaderLineOffset($length) {
		LineAnnot_SetLeaderLineOffset($this->_cPtr,$length);
	}

	const e_Inline = 0;

	const e_Top = LineAnnot_e_Top;

	function GetCaptionPosition() {
		return LineAnnot_GetCaptionPosition($this->_cPtr);
	}

	function SetCaptionPosition($style) {
		LineAnnot_SetCaptionPosition($this->_cPtr,$style);
	}

	function GetTextHOffset() {
		return LineAnnot_GetTextHOffset($this->_cPtr);
	}

	function SetTextHOffset($offset) {
		LineAnnot_SetTextHOffset($this->_cPtr,$offset);
	}

	function GetTextVOffset() {
		return LineAnnot_GetTextVOffset($this->_cPtr);
	}

	function SetTextVOffset($offset) {
		LineAnnot_SetTextVOffset($this->_cPtr,$offset);
	}

	function __construct($d_or_ann_or_line=null) {
		if (is_resource($d_or_ann_or_line) && get_resource_type($d_or_ann_or_line) === '_p_pdftron__PDF__Annots__LineAnnot') {
			$this->_cPtr=$d_or_ann_or_line;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_LineAnnot(); break;
		default: $this->_cPtr=new_LineAnnot($d_or_ann_or_line);
		}
	}
}

class FreeText extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=FreeText_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new FreeText($r);
		}
		return $r;
	}

	function GetDefaultAppearance() {
		return FreeText_GetDefaultAppearance($this->_cPtr);
	}

	function SetDefaultAppearance($app_str) {
		FreeText_SetDefaultAppearance($this->_cPtr,$app_str);
	}

	function GetQuaddingFormat() {
		return FreeText_GetQuaddingFormat($this->_cPtr);
	}

	function SetQuaddingFormat($format) {
		FreeText_SetQuaddingFormat($this->_cPtr,$format);
	}

	function GetCalloutLinePoint1() {
		$r=FreeText_GetCalloutLinePoint1($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function GetCalloutLinePoint2() {
		$r=FreeText_GetCalloutLinePoint2($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function GetCalloutLinePoint3() {
		$r=FreeText_GetCalloutLinePoint3($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetCalloutLinePoints($p1,$p2,$p3=null) {
		switch (func_num_args()) {
		case 2: FreeText_SetCalloutLinePoints($this->_cPtr,$p1,$p2); break;
		default: FreeText_SetCalloutLinePoints($this->_cPtr,$p1,$p2,$p3);
		}
	}

	const e_FreeText = 0;

	const e_FreeTextCallout = FreeText_e_FreeTextCallout;

	const e_FreeTextTypeWriter = FreeText_e_FreeTextTypeWriter;

	const e_Unknown = FreeText_e_Unknown;

	function GetIntentName() {
		return FreeText_GetIntentName($this->_cPtr);
	}

	function SetIntentName($mode=null) {
		switch (func_num_args()) {
		case 0: FreeText_SetIntentName($this->_cPtr); break;
		default: FreeText_SetIntentName($this->_cPtr,$mode);
		}
	}

	function GetEndingStyle() {
		return FreeText_GetEndingStyle($this->_cPtr);
	}

	function SetEndingStyle($style_or_est) {
		FreeText_SetEndingStyle($this->_cPtr,$style_or_est);
	}

	function SetTextColor($color,$col_comp) {
		FreeText_SetTextColor($this->_cPtr,$color,$col_comp);
	}

	function GetTextColor() {
		$r=FreeText_GetTextColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetTextColorCompNum() {
		return FreeText_GetTextColorCompNum($this->_cPtr);
	}

	function SetLineColor($color,$col_comp) {
		FreeText_SetLineColor($this->_cPtr,$color,$col_comp);
	}

	function GetLineColor() {
		$r=FreeText_GetLineColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetLineColorCompNum() {
		return FreeText_GetLineColorCompNum($this->_cPtr);
	}

	function SetFontSize($font_size) {
		FreeText_SetFontSize($this->_cPtr,$font_size);
	}

	function GetFontSize() {
		return FreeText_GetFontSize($this->_cPtr);
	}

	function __construct($d_or_ann_or_freetext=null) {
		if (is_resource($d_or_ann_or_freetext) && get_resource_type($d_or_ann_or_freetext) === '_p_pdftron__PDF__Annots__FreeText') {
			$this->_cPtr=$d_or_ann_or_freetext;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_FreeText(); break;
		default: $this->_cPtr=new_FreeText($d_or_ann_or_freetext);
		}
	}
}

class Link extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	static function Create($doc,$pos,$action=null) {
		switch (func_num_args()) {
		case 2: $r=Link_Create($doc,$pos); break;
		default: $r=Link_Create($doc,$pos,$action);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Link($r);
		}
		return $r;
	}

	function RemoveAction() {
		Link_RemoveAction($this->_cPtr);
	}

	function GetAction() {
		$r=Link_GetAction($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function SetAction($action) {
		Link_SetAction($this->_cPtr,$action);
	}

	const e_none = 0;

	const e_invert = Link_e_invert;

	const e_outline = Link_e_outline;

	const e_push = Link_e_push;

	function GetHighlightingMode() {
		return Link_GetHighlightingMode($this->_cPtr);
	}

	function SetHighlightingMode($mode) {
		Link_SetHighlightingMode($this->_cPtr,$mode);
	}

	function GetQuadPointCount() {
		return Link_GetQuadPointCount($this->_cPtr);
	}

	function GetQuadPoint($idx) {
		$r=Link_GetQuadPoint($this->_cPtr,$idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new QuadPoint($r);
		}
		return $r;
	}

	function SetQuadPoint($idx,$qp) {
		Link_SetQuadPoint($this->_cPtr,$idx,$qp);
	}

	static function GetNormalizedUrl($url) {
		return Link_GetNormalizedUrl($url);
	}

	function __construct($d_or_ann_or_link=null) {
		if (is_resource($d_or_ann_or_link) && get_resource_type($d_or_ann_or_link) === '_p_pdftron__PDF__Annots__Link') {
			$this->_cPtr=$d_or_ann_or_link;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Link(); break;
		default: $this->_cPtr=new_Link($d_or_ann_or_link);
		}
	}
}

class Movie extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Movie_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Movie($r);
		}
		return $r;
	}

	function GetTitle() {
		return Movie_GetTitle($this->_cPtr);
	}

	function SetTitle($title) {
		Movie_SetTitle($this->_cPtr,$title);
	}

	function IsToBePlayed() {
		return Movie_IsToBePlayed($this->_cPtr);
	}

	function SetToBePlayed($isplay=true) {
		Movie_SetToBePlayed($this->_cPtr,$isplay);
	}

	function __construct($d_or_ann_or_movie=null) {
		if (is_resource($d_or_ann_or_movie) && get_resource_type($d_or_ann_or_movie) === '_p_pdftron__PDF__Annots__Movie') {
			$this->_cPtr=$d_or_ann_or_movie;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Movie(); break;
		default: $this->_cPtr=new_Movie($d_or_ann_or_movie);
		}
	}
}

class PolyLine extends LineAnnot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		LineAnnot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return LineAnnot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return LineAnnot::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=PolyLine_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PolyLine($r);
		}
		return $r;
	}

	function GetVertexCount() {
		return PolyLine_GetVertexCount($this->_cPtr);
	}

	function GetVertex($idx) {
		$r=PolyLine_GetVertex($this->_cPtr,$idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetVertex($idx,$pt) {
		PolyLine_SetVertex($this->_cPtr,$idx,$pt);
	}

	const e_PolygonCloud = 0;

	const e_PolyLineDimension = PolyLine_e_PolyLineDimension;

	const e_PolygonDimension = PolyLine_e_PolygonDimension;

	const e_Unknown = PolyLine_e_Unknown;

	function GetIntentName() {
		return PolyLine_GetIntentName($this->_cPtr);
	}

	function SetIntentName($mode) {
		PolyLine_SetIntentName($this->_cPtr,$mode);
	}

	function __construct($d_or_ann_or_polyline=null) {
		if (is_resource($d_or_ann_or_polyline) && get_resource_type($d_or_ann_or_polyline) === '_p_pdftron__PDF__Annots__PolyLine') {
			$this->_cPtr=$d_or_ann_or_polyline;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PolyLine(); break;
		default: $this->_cPtr=new_PolyLine($d_or_ann_or_polyline);
		}
	}
}

class Polygon extends PolyLine {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		PolyLine::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return PolyLine::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return PolyLine::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Polygon_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Polygon($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_polyline=null) {
		if (is_resource($d_or_ann_or_polyline) && get_resource_type($d_or_ann_or_polyline) === '_p_pdftron__PDF__Annots__Polygon') {
			$this->_cPtr=$d_or_ann_or_polyline;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Polygon(); break;
		default: $this->_cPtr=new_Polygon($d_or_ann_or_polyline);
		}
	}
}

class RedactionAnnot extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=RedactionAnnot_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RedactionAnnot($r);
		}
		return $r;
	}

	function GetQuadPointCount() {
		return RedactionAnnot_GetQuadPointCount($this->_cPtr);
	}

	function GetQuadPoint($idx) {
		$r=RedactionAnnot_GetQuadPoint($this->_cPtr,$idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new QuadPoint($r);
		}
		return $r;
	}

	function SetQuadPoint($idx,$qp) {
		RedactionAnnot_SetQuadPoint($this->_cPtr,$idx,$qp);
	}

	function GetAppFormXO() {
		$r=RedactionAnnot_GetAppFormXO($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetAppFormXO($formxo) {
		RedactionAnnot_SetAppFormXO($this->_cPtr,$formxo);
	}

	function GetOverlayText() {
		return RedactionAnnot_GetOverlayText($this->_cPtr);
	}

	function SetOverlayText($title) {
		RedactionAnnot_SetOverlayText($this->_cPtr,$title);
	}

	function GetUseRepeat() {
		return RedactionAnnot_GetUseRepeat($this->_cPtr);
	}

	function SetUseRepeat($userepeat=false) {
		RedactionAnnot_SetUseRepeat($this->_cPtr,$userepeat);
	}

	function GetOverlayTextAppearance() {
		return RedactionAnnot_GetOverlayTextAppearance($this->_cPtr);
	}

	function SetOverlayTextAppearance($app) {
		RedactionAnnot_SetOverlayTextAppearance($this->_cPtr,$app);
	}

	const e_LeftJustified = 0;

	const e_Centered = RedactionAnnot_e_Centered;

	const e_RightJustified = RedactionAnnot_e_RightJustified;

	const e_None = RedactionAnnot_e_None;

	function GetQuadForm() {
		return RedactionAnnot_GetQuadForm($this->_cPtr);
	}

	function SetQuadForm($form=null) {
		switch (func_num_args()) {
		case 0: RedactionAnnot_SetQuadForm($this->_cPtr); break;
		default: RedactionAnnot_SetQuadForm($this->_cPtr,$form);
		}
	}

	function __construct($d_or_ann_or_redaction=null) {
		if (is_resource($d_or_ann_or_redaction) && get_resource_type($d_or_ann_or_redaction) === '_p_pdftron__PDF__Annots__RedactionAnnot') {
			$this->_cPtr=$d_or_ann_or_redaction;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_RedactionAnnot(); break;
		default: $this->_cPtr=new_RedactionAnnot($d_or_ann_or_redaction);
		}
	}
}

class RubberStamp extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	const e_Approved = 0;

	const e_Experimental = RubberStamp_e_Experimental;

	const e_NotApproved = RubberStamp_e_NotApproved;

	const e_AsIs = RubberStamp_e_AsIs;

	const e_Expired = RubberStamp_e_Expired;

	const e_NotForPublicRelease = RubberStamp_e_NotForPublicRelease;

	const e_Confidential = RubberStamp_e_Confidential;

	const e_Final = RubberStamp_e_Final;

	const e_Sold = RubberStamp_e_Sold;

	const e_Departmental = RubberStamp_e_Departmental;

	const e_ForComment = RubberStamp_e_ForComment;

	const e_TopSecret = RubberStamp_e_TopSecret;

	const e_ForPublicRelease = RubberStamp_e_ForPublicRelease;

	const e_Draft = RubberStamp_e_Draft;

	const e_Unknown = RubberStamp_e_Unknown;

	static function Create($doc,$pos,$icon_or_form_xobject=null) {
		switch (func_num_args()) {
		case 2: $r=RubberStamp_Create($doc,$pos); break;
		default: $r=RubberStamp_Create($doc,$pos,$icon_or_form_xobject);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RubberStamp($r);
		}
		return $r;
	}

	function GetIcon() {
		return RubberStamp_GetIcon($this->_cPtr);
	}

	function GetIconName() {
		return RubberStamp_GetIconName($this->_cPtr);
	}

	function SetIcon($type_or_icon=null) {
		switch (func_num_args()) {
		case 0: RubberStamp_SetIcon($this->_cPtr); break;
		default: RubberStamp_SetIcon($this->_cPtr,$type_or_icon);
		}
	}

	function __construct($d_or_ann_or_rubberstamp=null) {
		if (is_resource($d_or_ann_or_rubberstamp) && get_resource_type($d_or_ann_or_rubberstamp) === '_p_pdftron__PDF__Annots__RubberStamp') {
			$this->_cPtr=$d_or_ann_or_rubberstamp;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_RubberStamp(); break;
		default: $this->_cPtr=new_RubberStamp($d_or_ann_or_rubberstamp);
		}
	}
}

class Screen extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Screen_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Screen($r);
		}
		return $r;
	}

	function GetTitle() {
		return Screen_GetTitle($this->_cPtr);
	}

	function SetTitle($title) {
		Screen_SetTitle($this->_cPtr,$title);
	}

	function GetAction() {
		$r=Screen_GetAction($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function SetAction($action) {
		Screen_SetAction($this->_cPtr,$action);
	}

	function GetBorderColorCompNum() {
		return Screen_GetBorderColorCompNum($this->_cPtr);
	}

	function GetBorderColor() {
		$r=Screen_GetBorderColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function SetBorderColor($col,$numcomp) {
		Screen_SetBorderColor($this->_cPtr,$col,$numcomp);
	}

	function GetBackgroundColorCompNum() {
		return Screen_GetBackgroundColorCompNum($this->_cPtr);
	}

	function GetBackgroundColor() {
		$r=Screen_GetBackgroundColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function SetBackgroundColor($col,$numcomp) {
		Screen_SetBackgroundColor($this->_cPtr,$col,$numcomp);
	}

	function GetStaticCaptionText() {
		return Screen_GetStaticCaptionText($this->_cPtr);
	}

	function SetStaticCaptionText($contents) {
		Screen_SetStaticCaptionText($this->_cPtr,$contents);
	}

	function GetRolloverCaptionText() {
		return Screen_GetRolloverCaptionText($this->_cPtr);
	}

	function SetRolloverCaptionText($contents) {
		Screen_SetRolloverCaptionText($this->_cPtr,$contents);
	}

	function GetMouseDownCaptionText() {
		return Screen_GetMouseDownCaptionText($this->_cPtr);
	}

	function SetMouseDownCaptionText($contents) {
		Screen_SetMouseDownCaptionText($this->_cPtr,$contents);
	}

	function GetStaticIcon() {
		$r=Screen_GetStaticIcon($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetStaticIcon($icon) {
		Screen_SetStaticIcon($this->_cPtr,$icon);
	}

	function GetRolloverIcon() {
		$r=Screen_GetRolloverIcon($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetRolloverIcon($icon) {
		Screen_SetRolloverIcon($this->_cPtr,$icon);
	}

	function GetMouseDownIcon() {
		$r=Screen_GetMouseDownIcon($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetMouseDownIcon($icon) {
		Screen_SetMouseDownIcon($this->_cPtr,$icon);
	}

	const e_NoIcon = 0;

	const e_NoCaption = Screen_e_NoCaption;

	const e_CBelowI = Screen_e_CBelowI;

	const e_CAboveI = Screen_e_CAboveI;

	const e_CRightILeft = Screen_e_CRightILeft;

	const e_CLeftIRight = Screen_e_CLeftIRight;

	const e_COverlayI = Screen_e_COverlayI;

	function GetIconCaptionRelation() {
		return Screen_GetIconCaptionRelation($this->_cPtr);
	}

	function SetIconCaptionRelation($icr) {
		Screen_SetIconCaptionRelation($this->_cPtr,$icr);
	}

	const e_Always = 0;

	const e_WhenBigger = Screen_e_WhenBigger;

	const e_WhenSmaller = Screen_e_WhenSmaller;

	const e_Never = Screen_e_Never;

	function GetScaleCondition() {
		return Screen_GetScaleCondition($this->_cPtr);
	}

	function SetScaleCondition($sc) {
		Screen_SetScaleCondition($this->_cPtr,$sc);
	}

	const e_Anamorphic = 0;

	const e_Proportional = Screen_e_Proportional;

	function GetScaleType() {
		return Screen_GetScaleType($this->_cPtr);
	}

	function SetScaleType($st) {
		Screen_SetScaleType($this->_cPtr,$st);
	}

	function GetHIconLeftOver() {
		return Screen_GetHIconLeftOver($this->_cPtr);
	}

	function SetHIconLeftOver($hl) {
		Screen_SetHIconLeftOver($this->_cPtr,$hl);
	}

	function GetVIconLeftOver() {
		return Screen_GetVIconLeftOver($this->_cPtr);
	}

	function SetVIconLeftOver($vl) {
		Screen_SetVIconLeftOver($this->_cPtr,$vl);
	}

	function GetFitFull() {
		return Screen_GetFitFull($this->_cPtr);
	}

	function SetFitFull($ff) {
		Screen_SetFitFull($this->_cPtr,$ff);
	}

	function __construct($d_or_ann_or_screen=null) {
		if (is_resource($d_or_ann_or_screen) && get_resource_type($d_or_ann_or_screen) === '_p_pdftron__PDF__Annots__Screen') {
			$this->_cPtr=$d_or_ann_or_screen;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Screen(); break;
		default: $this->_cPtr=new_Screen($d_or_ann_or_screen);
		}
	}
}

class Sound extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	const e_Speaker = 0;

	const e_Mic = Sound_e_Mic;

	const e_Unknown = Sound_e_Unknown;

	static function CreateWithData($doc,$pos,$source_data,$bits_per_sample,$sample_freq,$num_channels,$icon=null) {
		switch (func_num_args()) {
		case 6: $r=Sound_CreateWithData($doc,$pos,$source_data,$bits_per_sample,$sample_freq,$num_channels); break;
		default: $r=Sound_CreateWithData($doc,$pos,$source_data,$bits_per_sample,$sample_freq,$num_channels,$icon);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Sound($r);
		}
		return $r;
	}

	static function Create($doc,$pos,$icon=null) {
		switch (func_num_args()) {
		case 2: $r=Sound_Create($doc,$pos); break;
		default: $r=Sound_Create($doc,$pos,$icon);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Sound($r);
		}
		return $r;
	}

	function GetSoundStream() {
		$r=Sound_GetSoundStream($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetSoundStream($icon) {
		Sound_SetSoundStream($this->_cPtr,$icon);
	}

	function GetIcon() {
		return Sound_GetIcon($this->_cPtr);
	}

	function GetIconName() {
		return Sound_GetIconName($this->_cPtr);
	}

	function SetIcon($type=null) {
		switch (func_num_args()) {
		case 0: Sound_SetIcon($this->_cPtr); break;
		default: Sound_SetIcon($this->_cPtr,$type);
		}
	}

	function __construct($d_or_ann_or_sound=null) {
		if (is_resource($d_or_ann_or_sound) && get_resource_type($d_or_ann_or_sound) === '_p_pdftron__PDF__Annots__Sound') {
			$this->_cPtr=$d_or_ann_or_sound;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Sound(); break;
		default: $this->_cPtr=new_Sound($d_or_ann_or_sound);
		}
	}
}

class Square extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Square_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Square($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_square=null) {
		if (is_resource($d_or_ann_or_square) && get_resource_type($d_or_ann_or_square) === '_p_pdftron__PDF__Annots__Square') {
			$this->_cPtr=$d_or_ann_or_square;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Square(); break;
		default: $this->_cPtr=new_Square($d_or_ann_or_square);
		}
	}
}

class Squiggly extends TextMarkup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TextMarkup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TextMarkup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TextMarkup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Squiggly_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Squiggly($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_squiggly) {
		if (is_resource($d_or_ann_or_squiggly) && get_resource_type($d_or_ann_or_squiggly) === '_p_pdftron__PDF__Annots__Squiggly') {
			$this->_cPtr=$d_or_ann_or_squiggly;
			return;
		}
		$this->_cPtr=new_Squiggly($d_or_ann_or_squiggly);
	}
}

class StrikeOut extends TextMarkup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TextMarkup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TextMarkup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TextMarkup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=StrikeOut_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new StrikeOut($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_strikeout) {
		if (is_resource($d_or_ann_or_strikeout) && get_resource_type($d_or_ann_or_strikeout) === '_p_pdftron__PDF__Annots__StrikeOut') {
			$this->_cPtr=$d_or_ann_or_strikeout;
			return;
		}
		$this->_cPtr=new_StrikeOut($d_or_ann_or_strikeout);
	}
}

class Text extends Markup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Markup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Markup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Markup::__isset($var);
	}

	static function Create($doc,$pos,$contents=null) {
		switch (func_num_args()) {
		case 2: $r=Text_Create($doc,$pos); break;
		default: $r=Text_Create($doc,$pos,$contents);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Text($r);
		}
		return $r;
	}

	function IsOpen() {
		return Text_IsOpen($this->_cPtr);
	}

	function SetOpen($isopen) {
		Text_SetOpen($this->_cPtr,$isopen);
	}

	const e_Comment = 0;

	const e_Key = Text_e_Key;

	const e_Help = Text_e_Help;

	const e_NewParagraph = Text_e_NewParagraph;

	const e_Paragraph = Text_e_Paragraph;

	const e_Insert = Text_e_Insert;

	const e_Note = Text_e_Note;

	const e_Unknown = Text_e_Unknown;

	function GetIcon() {
		return Text_GetIcon($this->_cPtr);
	}

	function GetIconName() {
		return Text_GetIconName($this->_cPtr);
	}

	function SetIcon($icon=null) {
		switch (func_num_args()) {
		case 0: Text_SetIcon($this->_cPtr); break;
		default: Text_SetIcon($this->_cPtr,$icon);
		}
	}

	function GetState() {
		return Text_GetState($this->_cPtr);
	}

	function SetState($state=null) {
		switch (func_num_args()) {
		case 0: Text_SetState($this->_cPtr); break;
		default: Text_SetState($this->_cPtr,$state);
		}
	}

	function GetStateModel() {
		return Text_GetStateModel($this->_cPtr);
	}

	function SetStateModel($sm) {
		Text_SetStateModel($this->_cPtr,$sm);
	}

	function GetAnchorPosition() {
		$r=Text_GetAnchorPosition($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetAnchorPosition($pt) {
		Text_SetAnchorPosition($this->_cPtr,$pt);
	}

	function __construct($d_or_ann_or_text=null) {
		if (is_resource($d_or_ann_or_text) && get_resource_type($d_or_ann_or_text) === '_p_pdftron__PDF__Annots__Text') {
			$this->_cPtr=$d_or_ann_or_text;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Text(); break;
		default: $this->_cPtr=new_Text($d_or_ann_or_text);
		}
	}
}

class Underline extends TextMarkup {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		TextMarkup::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return TextMarkup::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return TextMarkup::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Underline_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Underline($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_underline) {
		if (is_resource($d_or_ann_or_underline) && get_resource_type($d_or_ann_or_underline) === '_p_pdftron__PDF__Annots__Underline') {
			$this->_cPtr=$d_or_ann_or_underline;
			return;
		}
		$this->_cPtr=new_Underline($d_or_ann_or_underline);
	}
}

class Watermark extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	static function Create($doc,$pos) {
		$r=Watermark_Create($doc,$pos);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Watermark($r);
		}
		return $r;
	}

	function __construct($d_or_ann_or_watermark=null) {
		if (is_resource($d_or_ann_or_watermark) && get_resource_type($d_or_ann_or_watermark) === '_p_pdftron__PDF__Annots__Watermark') {
			$this->_cPtr=$d_or_ann_or_watermark;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Watermark(); break;
		default: $this->_cPtr=new_Watermark($d_or_ann_or_watermark);
		}
	}
}

class Widget extends Annot {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Annot::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Annot::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Annot::__isset($var);
	}

	static function Create($doc,$pos,$field) {
		$r=Widget_Create($doc,$pos,$field);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Widget($r);
		}
		return $r;
	}

	function GetField() {
		$r=Widget_GetField($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Field($r);
		}
		return $r;
	}

	const e_none = 0;

	const e_invert = Widget_e_invert;

	const e_outline = Widget_e_outline;

	const e_push = Widget_e_push;

	const e_toggle = Widget_e_toggle;

	function GetHighlightingMode() {
		return Widget_GetHighlightingMode($this->_cPtr);
	}

	function SetHighlightingMode($mode=null) {
		switch (func_num_args()) {
		case 0: Widget_SetHighlightingMode($this->_cPtr); break;
		default: Widget_SetHighlightingMode($this->_cPtr,$mode);
		}
	}

	function GetAction() {
		$r=Widget_GetAction($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Action($r);
		}
		return $r;
	}

	function SetAction($action) {
		Widget_SetAction($this->_cPtr,$action);
	}

	function GetBorderColorCompNum() {
		return Widget_GetBorderColorCompNum($this->_cPtr);
	}

	function GetBorderColor() {
		$r=Widget_GetBorderColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function SetBorderColor($col,$compnum) {
		Widget_SetBorderColor($this->_cPtr,$col,$compnum);
	}

	function GetBackgroundColorCompNum() {
		return Widget_GetBackgroundColorCompNum($this->_cPtr);
	}

	function GetBackgroundColor() {
		$r=Widget_GetBackgroundColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function SetBackgroundColor($c_,$compnum) {
		Widget_SetBackgroundColor($this->_cPtr,$c_,$compnum);
	}

	function GetStaticCaptionText() {
		return Widget_GetStaticCaptionText($this->_cPtr);
	}

	function SetStaticCaptionText($contents) {
		Widget_SetStaticCaptionText($this->_cPtr,$contents);
	}

	function GetRolloverCaptionText() {
		return Widget_GetRolloverCaptionText($this->_cPtr);
	}

	function SetRolloverCaptionText($contents) {
		Widget_SetRolloverCaptionText($this->_cPtr,$contents);
	}

	function GetMouseDownCaptionText() {
		return Widget_GetMouseDownCaptionText($this->_cPtr);
	}

	function SetMouseDownCaptionText($contents) {
		Widget_SetMouseDownCaptionText($this->_cPtr,$contents);
	}

	function GetStaticIcon() {
		$r=Widget_GetStaticIcon($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetStaticIcon($icon) {
		Widget_SetStaticIcon($this->_cPtr,$icon);
	}

	function GetRolloverIcon() {
		$r=Widget_GetRolloverIcon($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetRolloverIcon($icon) {
		Widget_SetRolloverIcon($this->_cPtr,$icon);
	}

	function GetMouseDownIcon() {
		$r=Widget_GetMouseDownIcon($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function SetMouseDownIcon($icon) {
		Widget_SetMouseDownIcon($this->_cPtr,$icon);
	}

	const e_NoIcon = 0;

	const e_NoCaption = Widget_e_NoCaption;

	const e_CBelowI = Widget_e_CBelowI;

	const e_CAboveI = Widget_e_CAboveI;

	const e_CRightILeft = Widget_e_CRightILeft;

	const e_CLeftIRight = Widget_e_CLeftIRight;

	const e_COverlayI = Widget_e_COverlayI;

	function GetIconCaptionRelation() {
		return Widget_GetIconCaptionRelation($this->_cPtr);
	}

	function SetIconCaptionRelation($icr) {
		Widget_SetIconCaptionRelation($this->_cPtr,$icr);
	}

	const e_Always = 0;

	const e_WhenBigger = Widget_e_WhenBigger;

	const e_WhenSmaller = Widget_e_WhenSmaller;

	const e_Never = Widget_e_Never;

	function GetScaleCondition() {
		return Widget_GetScaleCondition($this->_cPtr);
	}

	function SetScaleCondition($sd) {
		Widget_SetScaleCondition($this->_cPtr,$sd);
	}

	const e_Anamorphic = 0;

	const e_Proportional = Widget_e_Proportional;

	function GetScaleType() {
		return Widget_GetScaleType($this->_cPtr);
	}

	function SetScaleType($st) {
		Widget_SetScaleType($this->_cPtr,$st);
	}

	function GetHIconLeftOver() {
		return Widget_GetHIconLeftOver($this->_cPtr);
	}

	function SetHIconLeftOver($hl) {
		Widget_SetHIconLeftOver($this->_cPtr,$hl);
	}

	function GetVIconLeftOver() {
		return Widget_GetVIconLeftOver($this->_cPtr);
	}

	function SetVIconLeftOver($vl) {
		Widget_SetVIconLeftOver($this->_cPtr,$vl);
	}

	function GetFitFull() {
		return Widget_GetFitFull($this->_cPtr);
	}

	function SetFitFull($ff) {
		Widget_SetFitFull($this->_cPtr,$ff);
	}

	function GetTextColor() {
		$r=Widget_GetTextColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function GetTextColorCompNum() {
		return Widget_GetTextColorCompNum($this->_cPtr);
	}

	function SetTextColor($color,$col_comp) {
		Widget_SetTextColor($this->_cPtr,$color,$col_comp);
	}

	function GetFontSize() {
		return Widget_GetFontSize($this->_cPtr);
	}

	function SetFontSize($font_size) {
		Widget_SetFontSize($this->_cPtr,$font_size);
	}

	function GetFont() {
		$r=Widget_GetFont($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Font($r);
		}
		return $r;
	}

	function SetFont($font) {
		Widget_SetFont($this->_cPtr,$font);
	}

	function __construct($d_or_ann_or_widget=null) {
		if (is_resource($d_or_ann_or_widget) && get_resource_type($d_or_ann_or_widget) === '_p_pdftron__PDF__Annots__Widget') {
			$this->_cPtr=$d_or_ann_or_widget;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Widget(); break;
		default: $this->_cPtr=new_Widget($d_or_ann_or_widget);
		}
	}
}

class SignatureWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__SignatureWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_SignatureWidget(); break;
		default: $this->_cPtr=new_SignatureWidget($d_or_annot);
		}
	}

	function GetDigitalSignatureField() {
		$r=SignatureWidget_GetDigitalSignatureField($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new DigitalSignatureField($r);
		}
		return $r;
	}

	function CreateSignatureAppearance($img) {
		SignatureWidget_CreateSignatureAppearance($this->_cPtr,$img);
	}

	static function Create($doc,$pos,$field_name_or_field=null) {
		switch (func_num_args()) {
		case 2: $r=SignatureWidget_Create($doc,$pos); break;
		default: $r=SignatureWidget_Create($doc,$pos,$field_name_or_field);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SignatureWidget($r);
		}
		return $r;
	}
}

class CheckBoxWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__CheckBoxWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_CheckBoxWidget(); break;
		default: $this->_cPtr=new_CheckBoxWidget($d_or_annot);
		}
	}

	static function Create($doc,$pos,$field_name_or_field=null) {
		switch (func_num_args()) {
		case 2: $r=CheckBoxWidget_Create($doc,$pos); break;
		default: $r=CheckBoxWidget_Create($doc,$pos,$field_name_or_field);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CheckBoxWidget($r);
		}
		return $r;
	}

	function IsChecked() {
		return CheckBoxWidget_IsChecked($this->_cPtr);
	}

	function SetChecked($checked) {
		CheckBoxWidget_SetChecked($this->_cPtr,$checked);
	}
}

class PushButtonWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__PushButtonWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_PushButtonWidget(); break;
		default: $this->_cPtr=new_PushButtonWidget($d_or_annot);
		}
	}

	static function Create($doc,$pos,$field_name_or_field=null) {
		switch (func_num_args()) {
		case 2: $r=PushButtonWidget_Create($doc,$pos); break;
		default: $r=PushButtonWidget_Create($doc,$pos,$field_name_or_field);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PushButtonWidget($r);
		}
		return $r;
	}
}

class TextWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__TextWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_TextWidget(); break;
		default: $this->_cPtr=new_TextWidget($d_or_annot);
		}
	}

	static function Create($doc,$pos,$field_name_or_field=null) {
		switch (func_num_args()) {
		case 2: $r=TextWidget_Create($doc,$pos); break;
		default: $r=TextWidget_Create($doc,$pos,$field_name_or_field);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TextWidget($r);
		}
		return $r;
	}

	function SetText($text) {
		TextWidget_SetText($this->_cPtr,$text);
	}

	function GetText() {
		return TextWidget_GetText($this->_cPtr);
	}
}

class ComboBoxWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__ComboBoxWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ComboBoxWidget(); break;
		default: $this->_cPtr=new_ComboBoxWidget($d_or_annot);
		}
	}

	static function Create($doc,$pos,$field_name_or_field=null) {
		switch (func_num_args()) {
		case 2: $r=ComboBoxWidget_Create($doc,$pos); break;
		default: $r=ComboBoxWidget_Create($doc,$pos,$field_name_or_field);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ComboBoxWidget($r);
		}
		return $r;
	}

	function AddOption($value) {
		ComboBoxWidget_AddOption($this->_cPtr,$value);
	}

	function AddOptions($opts) {
		ComboBoxWidget_AddOptions($this->_cPtr,$opts);
	}

	function GetOptions() {
		return ComboBoxWidget_GetOptions($this->_cPtr);
	}

	function ReplaceOptions($new_opts) {
		ComboBoxWidget_ReplaceOptions($this->_cPtr,$new_opts);
	}

	function SetSelectedOption($value) {
		ComboBoxWidget_SetSelectedOption($this->_cPtr,$value);
	}

	function GetSelectedOption() {
		return ComboBoxWidget_GetSelectedOption($this->_cPtr);
	}

	function RemoveOption($value) {
		ComboBoxWidget_RemoveOption($this->_cPtr,$value);
	}
}

class ListBoxWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__ListBoxWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ListBoxWidget(); break;
		default: $this->_cPtr=new_ListBoxWidget($d_or_annot);
		}
	}

	static function Create($doc,$pos,$field_name_or_field=null) {
		switch (func_num_args()) {
		case 2: $r=ListBoxWidget_Create($doc,$pos); break;
		default: $r=ListBoxWidget_Create($doc,$pos,$field_name_or_field);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ListBoxWidget($r);
		}
		return $r;
	}

	function AddOption($value) {
		ListBoxWidget_AddOption($this->_cPtr,$value);
	}

	function AddOptions($opts) {
		ListBoxWidget_AddOptions($this->_cPtr,$opts);
	}

	function SetSelectedOptions($selected_opts) {
		ListBoxWidget_SetSelectedOptions($this->_cPtr,$selected_opts);
	}

	function GetSelectedOptions() {
		return ListBoxWidget_GetSelectedOptions($this->_cPtr);
	}

	function GetOptions() {
		return ListBoxWidget_GetOptions($this->_cPtr);
	}

	function ReplaceOptions($new_opts) {
		ListBoxWidget_ReplaceOptions($this->_cPtr,$new_opts);
	}

	function RemoveOption($value) {
		ListBoxWidget_RemoveOption($this->_cPtr,$value);
	}
}

class RadioButtonWidget extends Widget {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Widget::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Widget::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Widget::__isset($var);
	}

	function __construct($d_or_annot=null) {
		if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__RadioButtonWidget') {
			$this->_cPtr=$d_or_annot;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_RadioButtonWidget(); break;
		default: $this->_cPtr=new_RadioButtonWidget($d_or_annot);
		}
	}

	function GetGroup() {
		$r=RadioButtonWidget_GetGroup($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RadioButtonGroup($r);
		}
		return $r;
	}

	function EnableButton() {
		RadioButtonWidget_EnableButton($this->_cPtr);
	}

	function IsEnabled() {
		return RadioButtonWidget_IsEnabled($this->_cPtr);
	}
}

class RadioButtonGroup {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Create($doc,$field_name=null) {
		switch (func_num_args()) {
		case 1: $r=RadioButtonGroup_Create($doc); break;
		default: $r=RadioButtonGroup_Create($doc,$field_name);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RadioButtonGroup($r);
		}
		return $r;
	}

	function Add($pos,$onstate="") {
		$r=RadioButtonGroup_Add($this->_cPtr,$pos,$onstate);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RadioButtonWidget($r);
		}
		return $r;
	}

	function GetNumButtons() {
		return RadioButtonGroup_GetNumButtons($this->_cPtr);
	}

	function GetButton($index) {
		$r=RadioButtonGroup_GetButton($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new RadioButtonWidget($r);
		}
		return $r;
	}

	function GetField() {
		$r=RadioButtonGroup_GetField($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Field($r);
		}
		return $r;
	}

	function AddGroupButtonsToPage($page) {
		RadioButtonGroup_AddGroupButtonsToPage($this->_cPtr,$page);
	}

	function __construct($field_or_group_or_impl) {
		if (is_resource($field_or_group_or_impl) && get_resource_type($field_or_group_or_impl) === '_p_pdftron__PDF__Annots__RadioButtonGroup') {
			$this->_cPtr=$field_or_group_or_impl;
			return;
		}
		$this->_cPtr=new_RadioButtonGroup($field_or_group_or_impl);
	}
}

class Element {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_elem') return Element_mp_elem_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_elem') return Element_mp_elem_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Element_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_null = 0;

	const e_path = Element_e_path;

	const e_text_begin = Element_e_text_begin;

	const e_text = Element_e_text;

	const e_text_new_line = Element_e_text_new_line;

	const e_text_end = Element_e_text_end;

	const e_image = Element_e_image;

	const e_inline_image = Element_e_inline_image;

	const e_shading = Element_e_shading;

	const e_form = Element_e_form;

	const e_group_begin = Element_e_group_begin;

	const e_group_end = Element_e_group_end;

	const e_marked_content_begin = Element_e_marked_content_begin;

	const e_marked_content_end = Element_e_marked_content_end;

	const e_marked_content_point = Element_e_marked_content_point;

	function GetType() {
		return Element_GetType($this->_cPtr);
	}

	function GetGState() {
		$r=Element_GetGState($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new GState($r);
		}
		return $r;
	}

	function GetCTM() {
		$r=Element_GetCTM($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetBBox() {
		$r=Element_GetBBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetParentStructElement() {
		$r=Element_GetParentStructElement($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SElement($r);
		}
		return $r;
	}

	function GetStructMCID() {
		return Element_GetStructMCID($this->_cPtr);
	}

	function IsOCVisible() {
		return Element_IsOCVisible($this->_cPtr);
	}

	function IsClippingPath() {
		return Element_IsClippingPath($this->_cPtr);
	}

	function IsStroked() {
		return Element_IsStroked($this->_cPtr);
	}

	function IsFilled() {
		return Element_IsFilled($this->_cPtr);
	}

	function IsWindingFill() {
		return Element_IsWindingFill($this->_cPtr);
	}

	function IsClipWindingFill() {
		return Element_IsClipWindingFill($this->_cPtr);
	}

	function GetPathData() {
		$r=Element_GetPathData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PathData($r);
		}
		return $r;
	}

	function SetPathData($data) {
		Element_SetPathData($this->_cPtr,$data);
	}

	function SetPathClip($clip) {
		Element_SetPathClip($this->_cPtr,$clip);
	}

	function SetPathStroke($stroke) {
		Element_SetPathStroke($this->_cPtr,$stroke);
	}

	function SetPathFill($fill) {
		Element_SetPathFill($this->_cPtr,$fill);
	}

	function SetWindingFill($winding_rule) {
		Element_SetWindingFill($this->_cPtr,$winding_rule);
	}

	function SetClipWindingFill($winding_rule) {
		Element_SetClipWindingFill($this->_cPtr,$winding_rule);
	}

	function GetXObject() {
		$r=Element_GetXObject($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetImageData() {
		$r=Element_GetImageData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Filter($r);
		}
		return $r;
	}

	function GetImageDataSize() {
		return Element_GetImageDataSize($this->_cPtr);
	}

	function GetImageColorSpace() {
		$r=Element_GetImageColorSpace($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorSpace($r);
		}
		return $r;
	}

	function GetImageWidth() {
		return Element_GetImageWidth($this->_cPtr);
	}

	function GetImageHeight() {
		return Element_GetImageHeight($this->_cPtr);
	}

	function GetDecodeArray() {
		$r=Element_GetDecodeArray($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetBitsPerComponent() {
		return Element_GetBitsPerComponent($this->_cPtr);
	}

	function GetComponentNum() {
		return Element_GetComponentNum($this->_cPtr);
	}

	function IsImageMask() {
		return Element_IsImageMask($this->_cPtr);
	}

	function IsImageInterpolate() {
		return Element_IsImageInterpolate($this->_cPtr);
	}

	function GetMask() {
		$r=Element_GetMask($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetImageRenderingIntent() {
		return Element_GetImageRenderingIntent($this->_cPtr);
	}

	function GetTextString() {
		return Element_GetTextString($this->_cPtr);
	}

	function GetTextData() {
		$r=Element_GetTextData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function GetTextDataSize() {
		return Element_GetTextDataSize($this->_cPtr);
	}

	function GetTextMatrix() {
		$r=Element_GetTextMatrix($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function GetCharIterator() {
		$r=Element_GetCharIterator($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CharIterator($r);
		}
		return $r;
	}

	function GetTextLength() {
		return Element_GetTextLength($this->_cPtr);
	}

	function GetPosAdjustment() {
		return Element_GetPosAdjustment($this->_cPtr);
	}

	function GetNewTextLineOffset() {
		$r=Element_GetNewTextLineOffset($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetNewTextLineOffset($dx,$dy) {
		Element_SetNewTextLineOffset($this->_cPtr,$dx,$dy);
	}

	function HasTextMatrix() {
		return Element_HasTextMatrix($this->_cPtr);
	}

	function SetTextData($buf_text_data,$text_data_size) {
		Element_SetTextData($this->_cPtr,$buf_text_data,$text_data_size);
	}

	function SetTextMatrix($mtx_or_a,$b=null,$c_=null,$d=null,$h=null,$v=null) {
		switch (func_num_args()) {
		case 1: Element_SetTextMatrix($this->_cPtr,$mtx_or_a); break;
		case 2: Element_SetTextMatrix($this->_cPtr,$mtx_or_a,$b); break;
		case 3: Element_SetTextMatrix($this->_cPtr,$mtx_or_a,$b,$c_); break;
		case 4: Element_SetTextMatrix($this->_cPtr,$mtx_or_a,$b,$c_,$d); break;
		case 5: Element_SetTextMatrix($this->_cPtr,$mtx_or_a,$b,$c_,$d,$h); break;
		default: Element_SetTextMatrix($this->_cPtr,$mtx_or_a,$b,$c_,$d,$h,$v);
		}
	}

	function SetPosAdjustment($adjust) {
		Element_SetPosAdjustment($this->_cPtr,$adjust);
	}

	function UpdateTextMetrics() {
		Element_UpdateTextMetrics($this->_cPtr);
	}

	function GetShading() {
		$r=Element_GetShading($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Shading($r);
		}
		return $r;
	}

	function GetMCPropertyDict() {
		$r=Element_GetMCPropertyDict($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetMCTag() {
		$r=Element_GetMCTag($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function __construct($c_or_impl=null) {
		if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__PDF__Element') {
			$this->_cPtr=$c_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Element(); break;
		default: $this->_cPtr=new_Element($c_or_impl);
		}
	}
}

class ElementBuilder {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_builder') return ElementBuilder_mp_builder_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_builder') return ElementBuilder_mp_builder_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ElementBuilder_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ElementBuilder') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ElementBuilder();
	}

	function Reset($gs=null) {
		switch (func_num_args()) {
		case 0: ElementBuilder_Reset($this->_cPtr); break;
		default: ElementBuilder_Reset($this->_cPtr,$gs);
		}
	}

	function CreateImage($img,$mtx_or_x=null,$y=null,$hscale=null,$vscale=null) {
		switch (func_num_args()) {
		case 1: $r=ElementBuilder_CreateImage($this->_cPtr,$img); break;
		case 2: $r=ElementBuilder_CreateImage($this->_cPtr,$img,$mtx_or_x); break;
		case 3: $r=ElementBuilder_CreateImage($this->_cPtr,$img,$mtx_or_x,$y); break;
		case 4: $r=ElementBuilder_CreateImage($this->_cPtr,$img,$mtx_or_x,$y,$hscale); break;
		default: $r=ElementBuilder_CreateImage($this->_cPtr,$img,$mtx_or_x,$y,$hscale,$vscale);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateGroupBegin() {
		$r=ElementBuilder_CreateGroupBegin($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateGroupEnd() {
		$r=ElementBuilder_CreateGroupEnd($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateShading($sh) {
		$r=ElementBuilder_CreateShading($this->_cPtr,$sh);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateForm($form_or_page,$doc=null) {
		switch (func_num_args()) {
		case 1: $r=ElementBuilder_CreateForm($this->_cPtr,$form_or_page); break;
		default: $r=ElementBuilder_CreateForm($this->_cPtr,$form_or_page,$doc);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateTextBegin($font=null,$font_sz=null) {
		switch (func_num_args()) {
		case 0: $r=ElementBuilder_CreateTextBegin($this->_cPtr); break;
		case 1: $r=ElementBuilder_CreateTextBegin($this->_cPtr,$font); break;
		default: $r=ElementBuilder_CreateTextBegin($this->_cPtr,$font,$font_sz);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateTextEnd() {
		$r=ElementBuilder_CreateTextEnd($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateTextRun($text_data,$font=null,$font_sz=null) {
		switch (func_num_args()) {
		case 1: $r=ElementBuilder_CreateTextRun($this->_cPtr,$text_data); break;
		case 2: $r=ElementBuilder_CreateTextRun($this->_cPtr,$text_data,$font); break;
		default: $r=ElementBuilder_CreateTextRun($this->_cPtr,$text_data,$font,$font_sz);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateUnicodeTextRun($text_data,$text_data_sz) {
		$r=ElementBuilder_CreateUnicodeTextRun($this->_cPtr,$text_data,$text_data_sz);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateShapedTextRun($text_data) {
		$r=ElementBuilder_CreateShapedTextRun($this->_cPtr,$text_data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateTextNewLine($dx=null,$dy=null) {
		switch (func_num_args()) {
		case 0: $r=ElementBuilder_CreateTextNewLine($this->_cPtr); break;
		case 1: $r=ElementBuilder_CreateTextNewLine($this->_cPtr,$dx); break;
		default: $r=ElementBuilder_CreateTextNewLine($this->_cPtr,$dx,$dy);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreatePath($points,$seg_types) {
		$r=ElementBuilder_CreatePath($this->_cPtr,$points,$seg_types);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateRect($x,$y,$width,$height) {
		$r=ElementBuilder_CreateRect($this->_cPtr,$x,$y,$width,$height);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateEllipse($x,$y,$width,$height) {
		$r=ElementBuilder_CreateEllipse($this->_cPtr,$x,$y,$width,$height);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function PathBegin() {
		ElementBuilder_PathBegin($this->_cPtr);
	}

	function PathEnd() {
		$r=ElementBuilder_PathEnd($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function MoveTo($x,$y) {
		ElementBuilder_MoveTo($this->_cPtr,$x,$y);
	}

	function LineTo($x,$y) {
		ElementBuilder_LineTo($this->_cPtr,$x,$y);
	}

	function CurveTo($cx1,$cy1,$cx2,$cy2,$x2,$y2) {
		ElementBuilder_CurveTo($this->_cPtr,$cx1,$cy1,$cx2,$cy2,$x2,$y2);
	}

	function ArcTo($x_or_xr,$y_or_yr,$width_or_rx,$height_or_isLargeArc,$start_or_sweep,$extent_or_endX,$endY=null) {
		switch (func_num_args()) {
		case 6: ElementBuilder_ArcTo($this->_cPtr,$x_or_xr,$y_or_yr,$width_or_rx,$height_or_isLargeArc,$start_or_sweep,$extent_or_endX); break;
		default: ElementBuilder_ArcTo($this->_cPtr,$x_or_xr,$y_or_yr,$width_or_rx,$height_or_isLargeArc,$start_or_sweep,$extent_or_endX,$endY);
		}
	}

	function Ellipse($x,$y,$width,$height) {
		ElementBuilder_Ellipse($this->_cPtr,$x,$y,$width,$height);
	}

	function Rect($x,$y,$width,$height) {
		ElementBuilder_Rect($this->_cPtr,$x,$y,$width,$height);
	}

	function ClosePath() {
		ElementBuilder_ClosePath($this->_cPtr);
	}

	function CreateMarkedContentBeginInlineProperties($tag) {
		$r=ElementBuilder_CreateMarkedContentBeginInlineProperties($this->_cPtr,$tag);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateMarkedContentBegin($tag,$property_dict) {
		$r=ElementBuilder_CreateMarkedContentBegin($this->_cPtr,$tag,$property_dict);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateMarkedContentEnd() {
		$r=ElementBuilder_CreateMarkedContentEnd($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateMarkedContentPointInlineProperties($tag) {
		$r=ElementBuilder_CreateMarkedContentPointInlineProperties($this->_cPtr,$tag);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function CreateMarkedContentPoint($tag,$property_dict) {
		$r=ElementBuilder_CreateMarkedContentPoint($this->_cPtr,$tag,$property_dict);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function Destroy() {
		ElementBuilder_Destroy($this->_cPtr);
	}
}

class ElementReader {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_reader') return ElementReader_mp_reader_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_reader') return ElementReader_mp_reader_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ElementReader_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Begin($page_or_content_stream,$ocg_context_or_resource_dict=null,$ocg_context=null) {
		switch (func_num_args()) {
		case 1: ElementReader_Begin($this->_cPtr,$page_or_content_stream); break;
		case 2: ElementReader_Begin($this->_cPtr,$page_or_content_stream,$ocg_context_or_resource_dict); break;
		default: ElementReader_Begin($this->_cPtr,$page_or_content_stream,$ocg_context_or_resource_dict,$ocg_context);
		}
	}

	function Next() {
		$r=ElementReader_Next($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function Current() {
		$r=ElementReader_Current($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Element($r);
		}
		return $r;
	}

	function FormBegin() {
		ElementReader_FormBegin($this->_cPtr);
	}

	function PatternBegin($fill_pattern,$reset_ctm_tfm=false) {
		ElementReader_PatternBegin($this->_cPtr,$fill_pattern,$reset_ctm_tfm);
	}

	function Type3FontBegin($char_data,$resource_dict=null) {
		switch (func_num_args()) {
		case 1: ElementReader_Type3FontBegin($this->_cPtr,$char_data); break;
		default: ElementReader_Type3FontBegin($this->_cPtr,$char_data,$resource_dict);
		}
	}

	function End() {
		return ElementReader_End($this->_cPtr);
	}

	function GetChangesIterator() {
		$r=ElementReader_GetChangesIterator($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new GSChangesIterator($r);
		}
		return $r;
	}

	function IsChanged($attrib) {
		return ElementReader_IsChanged($this->_cPtr,$attrib);
	}

	function ClearChangeList() {
		ElementReader_ClearChangeList($this->_cPtr);
	}

	function AppendResource($res) {
		ElementReader_AppendResource($this->_cPtr,$res);
	}

	function GetFont($name) {
		$r=ElementReader_GetFont($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetXObject($name) {
		$r=ElementReader_GetXObject($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetShading($name) {
		$r=ElementReader_GetShading($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetColorSpace($name) {
		$r=ElementReader_GetColorSpace($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetPattern($name) {
		$r=ElementReader_GetPattern($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetExtGState($name) {
		$r=ElementReader_GetExtGState($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function Destroy() {
		ElementReader_Destroy($this->_cPtr);
	}

	function __construct($impl=null) {
		if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__ElementReader') {
			$this->_cPtr=$impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ElementReader(); break;
		default: $this->_cPtr=new_ElementReader($impl);
		}
	}
}

class ElementWriter {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_writer') return ElementWriter_mp_writer_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_writer') return ElementWriter_mp_writer_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('ElementWriter_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_underlay = 0;

	const e_overlay = ElementWriter_e_overlay;

	const e_replacement = ElementWriter_e_replacement;

	function Begin($page_or_doc_or_stream_obj_to_update,$placement_or_compress=null,$page_coord_sys_or_resources=null,$compress=null,$resources=null) {
		switch (func_num_args()) {
		case 1: ElementWriter_Begin($this->_cPtr,$page_or_doc_or_stream_obj_to_update); break;
		case 2: ElementWriter_Begin($this->_cPtr,$page_or_doc_or_stream_obj_to_update,$placement_or_compress); break;
		case 3: ElementWriter_Begin($this->_cPtr,$page_or_doc_or_stream_obj_to_update,$placement_or_compress,$page_coord_sys_or_resources); break;
		case 4: ElementWriter_Begin($this->_cPtr,$page_or_doc_or_stream_obj_to_update,$placement_or_compress,$page_coord_sys_or_resources,$compress); break;
		default: ElementWriter_Begin($this->_cPtr,$page_or_doc_or_stream_obj_to_update,$placement_or_compress,$page_coord_sys_or_resources,$compress,$resources);
		}
	}

	function End() {
		$r=ElementWriter_End($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function WriteElement($element) {
		ElementWriter_WriteElement($this->_cPtr,$element);
	}

	function WritePlacedElement($element) {
		ElementWriter_WritePlacedElement($this->_cPtr,$element);
	}

	function Flush() {
		ElementWriter_Flush($this->_cPtr);
	}

	function WriteBuffer($data) {
		ElementWriter_WriteBuffer($this->_cPtr,$data);
	}

	function WriteString($str) {
		ElementWriter_WriteString($this->_cPtr,$str);
	}

	function WriteGStateChanges($element) {
		ElementWriter_WriteGStateChanges($this->_cPtr,$element);
	}

	function SetDefaultGState($reader) {
		ElementWriter_SetDefaultGState($this->_cPtr,$reader);
	}

	function Destroy() {
		ElementWriter_Destroy($this->_cPtr);
	}

	function __construct($impl=null) {
		if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__ElementWriter') {
			$this->_cPtr=$impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ElementWriter(); break;
		default: $this->_cPtr=new_ElementWriter($impl);
		}
	}
}

class Image2RGB extends Filter {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Filter::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Filter::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Filter::__isset($var);
	}

	function __construct($image_element_or_image_xobject_or_image) {
		if (is_resource($image_element_or_image_xobject_or_image) && get_resource_type($image_element_or_image_xobject_or_image) === '_p_pdftron__PDF__Image2RGB') {
			$this->_cPtr=$image_element_or_image_xobject_or_image;
			return;
		}
		$this->_cPtr=new_Image2RGB($image_element_or_image_xobject_or_image);
	}
}

class Image2RGBA extends Filter {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		Filter::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return Filter::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return Filter::__isset($var);
	}

	function __construct($image_element_or_image_xobject_or_image,$premultiply=false) {
		if (is_resource($image_element_or_image_xobject_or_image) && get_resource_type($image_element_or_image_xobject_or_image) === '_p_pdftron__PDF__Image2RGBA') {
			$this->_cPtr=$image_element_or_image_xobject_or_image;
			return;
		}
		$this->_cPtr=new_Image2RGBA($image_element_or_image_xobject_or_image,$premultiply);
	}
}

class Highlight {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'Highlight_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'Highlight_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Highlight_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($pg_or_hlt=null,$pos=null,$len=null) {
		if (is_resource($pg_or_hlt) && get_resource_type($pg_or_hlt) === '_p_pdftron__PDF__Highlight') {
			$this->_cPtr=$pg_or_hlt;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Highlight(); break;
		case 1: $this->_cPtr=new_Highlight($pg_or_hlt); break;
		case 2: $this->_cPtr=new_Highlight($pg_or_hlt,$pos); break;
		default: $this->_cPtr=new_Highlight($pg_or_hlt,$pos,$len);
		}
	}
}

class Highlights {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_highlights') return Highlights_mp_highlights_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_highlights') return Highlights_mp_highlights_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Highlights_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Load($file_name) {
		Highlights_Load($this->_cPtr,$file_name);
	}

	function Save($file_name) {
		Highlights_Save($this->_cPtr,$file_name);
	}

	function SaveToString() {
		return Highlights_SaveToString($this->_cPtr);
	}

	function Add($hlts) {
		Highlights_Add($this->_cPtr,$hlts);
	}

	function Clear() {
		Highlights_Clear($this->_cPtr);
	}

	function Begin($doc) {
		Highlights_Begin($this->_cPtr,$doc);
	}

	function HasNext() {
		return Highlights_HasNext($this->_cPtr);
	}

	function Next() {
		Highlights_Next($this->_cPtr);
	}

	function GetCurrentPageNumber() {
		return Highlights_GetCurrentPageNumber($this->_cPtr);
	}

	function GetCurrentQuads() {
		$r=Highlights_GetCurrentQuads($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorQuadPoint($r);
		}
		return $r;
	}

	function GetCurrentTextRange() {
		return Highlights_GetCurrentTextRange($this->_cPtr);
	}

	function Destroy() {
		Highlights_Destroy($this->_cPtr);
	}

	static function CreateInternal($impl) {
		$r=Highlights_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Highlights($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return Highlights_GetHandleInternal($this->_cPtr);
	}

	function __construct($hlts_or_impl=null) {
		if (is_resource($hlts_or_impl) && get_resource_type($hlts_or_impl) === '_p_pdftron__PDF__Highlights') {
			$this->_cPtr=$hlts_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Highlights(); break;
		default: $this->_cPtr=new_Highlights($hlts_or_impl);
		}
	}
}

class TextRange {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_textrange') return TextRange_mp_textrange_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_textrange') return TextRange_mp_textrange_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TextRange_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetPageNumber() {
		return TextRange_GetPageNumber($this->_cPtr);
	}

	function GetQuads() {
		$r=TextRange_GetQuads($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorQuadPoint($r);
		}
		return $r;
	}

	function GetText() {
		return TextRange_GetText($this->_cPtr);
	}

	function GetTextBefore($count) {
		return TextRange_GetTextBefore($this->_cPtr,$count);
	}

	function GetTextAfter($count) {
		return TextRange_GetTextAfter($this->_cPtr,$count);
	}

	function Destroy() {
		TextRange_Destroy($this->_cPtr);
	}

	static function CreateInternal($impl) {
		$r=TextRange_CreateInternal($impl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new TextRange($r);
		}
		return $r;
	}

	function GetHandleInternal() {
		return TextRange_GetHandleInternal($this->_cPtr);
	}

	function __construct($tr_or_impl=null) {
		if (is_resource($tr_or_impl) && get_resource_type($tr_or_impl) === '_p_pdftron__PDF__TextRange') {
			$this->_cPtr=$tr_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_TextRange(); break;
		default: $this->_cPtr=new_TextRange($tr_or_impl);
		}
	}
}

class OCROptions {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OCROptions') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_OCROptions();
	}

	function AddIgnoreZonesForPage($regions,$page_num) {
		$r=OCROptions_AddIgnoreZonesForPage($this->_cPtr,$regions,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function AddLang($lang) {
		$r=OCROptions_AddLang($this->_cPtr,$lang);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function AddTextZonesForPage($regions,$page_num) {
		$r=OCROptions_AddTextZonesForPage($this->_cPtr,$regions,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function AddDPI($dpi) {
		$r=OCROptions_AddDPI($this->_cPtr,$dpi);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function SetUsePDFPageCoords($value) {
		$r=OCROptions_SetUsePDFPageCoords($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function SetIgnoreExistingText($value) {
		$r=OCROptions_SetIgnoreExistingText($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function GetAutoRotate() {
		return OCROptions_GetAutoRotate($this->_cPtr);
	}

	function SetAutoRotate($value) {
		$r=OCROptions_SetAutoRotate($this->_cPtr,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new OCROptions($r);
		}
		return $r;
	}

	function GetInternalObj() {
		$r=OCROptions_GetInternalObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}
}

class OCRModule {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function IsModuleAvailable() {
		return OCRModule_IsModuleAvailable();
	}

	static function ImageToPDF($dst,$src,$options) {
		OCRModule_ImageToPDF($dst,$src,$options);
	}

	static function ProcessPDF($dst,$options) {
		OCRModule_ProcessPDF($dst,$options);
	}

	static function GetOCRJsonFromImage($dst,$src,$options) {
		return OCRModule_GetOCRJsonFromImage($dst,$src,$options);
	}

	static function GetOCRJsonFromPDF($src,$options) {
		return OCRModule_GetOCRJsonFromPDF($src,$options);
	}

	static function ApplyOCRJsonToPDF($dst,$json) {
		OCRModule_ApplyOCRJsonToPDF($dst,$json);
	}

	static function GetOCRXmlFromImage($dst,$src,$options) {
		return OCRModule_GetOCRXmlFromImage($dst,$src,$options);
	}

	static function GetOCRXmlFromPDF($src,$options) {
		return OCRModule_GetOCRXmlFromPDF($src,$options);
	}

	static function ApplyOCRXmlToPDF($dst,$xml) {
		OCRModule_ApplyOCRXmlToPDF($dst,$xml);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OCRModule') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_OCRModule();
	}
}

class CADModule {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function IsModuleAvailable() {
		return CADModule_IsModuleAvailable();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__CADModule') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CADModule();
	}
}

class AdvancedImagingModule {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function IsModuleAvailable() {
		return AdvancedImagingModule_IsModuleAvailable();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__AdvancedImagingModule') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_AdvancedImagingModule();
	}
}

class PDF2HtmlReflowParagraphsModule {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function IsModuleAvailable() {
		return PDF2HtmlReflowParagraphsModule_IsModuleAvailable();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PDF2HtmlReflowParagraphsModule') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PDF2HtmlReflowParagraphsModule();
	}
}

class PDF2WordModule {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function IsModuleAvailable() {
		return PDF2WordModule_IsModuleAvailable();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PDF2WordModule') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PDF2WordModule();
	}
}

class StructuredOutputModule {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function IsModuleAvailable() {
		return StructuredOutputModule_IsModuleAvailable();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__StructuredOutputModule') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_StructuredOutputModule();
	}
}

class Optimizer {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}
	function __construct($h) {
		$this->_cPtr=$h;
	}

	static function Optimize($doc,$settings=null) {
		switch (func_num_args()) {
		case 1: Optimizer_Optimize($doc); break;
		default: Optimizer_Optimize($doc,$settings);
		}
	}
}

class ImageSettings {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_retain = 0;

	const e_flate = ImageSettings_e_flate;

	const e_jpeg = ImageSettings_e_jpeg;

	const e_jpeg2000 = ImageSettings_e_jpeg2000;

	const e_none = ImageSettings_e_none;

	const e_off = 0;

	const e_default = ImageSettings_e_default;

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ImageSettings') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ImageSettings();
	}

	function SetImageDPI($maximum,$resampling) {
		ImageSettings_SetImageDPI($this->_cPtr,$maximum,$resampling);
	}

	function SetCompressionMode($mode) {
		ImageSettings_SetCompressionMode($this->_cPtr,$mode);
	}

	function SetDownsampleMode($mode) {
		ImageSettings_SetDownsampleMode($this->_cPtr,$mode);
	}

	function SetQuality($quality) {
		ImageSettings_SetQuality($this->_cPtr,$quality);
	}

	function ForceRecompression($force) {
		ImageSettings_ForceRecompression($this->_cPtr,$force);
	}

	function ForceChanges($force) {
		ImageSettings_ForceChanges($this->_cPtr,$force);
	}
}

class MonoImageSettings {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_jbig2 = 0;

	const e_flate = MonoImageSettings_e_flate;

	const e_none = MonoImageSettings_e_none;

	const e_ccitt = MonoImageSettings_e_ccitt;

	const e_off = 0;

	const e_default = MonoImageSettings_e_default;

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__MonoImageSettings') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_MonoImageSettings();
	}

	function SetImageDPI($maximum,$resampling) {
		MonoImageSettings_SetImageDPI($this->_cPtr,$maximum,$resampling);
	}

	function SetCompressionMode($mode) {
		MonoImageSettings_SetCompressionMode($this->_cPtr,$mode);
	}

	function SetDownsampleMode($mode) {
		MonoImageSettings_SetDownsampleMode($this->_cPtr,$mode);
	}

	function ForceRecompression($force) {
		MonoImageSettings_ForceRecompression($this->_cPtr,$force);
	}

	function ForceChanges($force) {
		MonoImageSettings_ForceChanges($this->_cPtr,$force);
	}

	function SetJBIG2Threshold($jbig2_threshold) {
		MonoImageSettings_SetJBIG2Threshold($this->_cPtr,$jbig2_threshold);
	}
}

class TextSettings {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TextSettings') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TextSettings();
	}

	function SubsetFonts($subset) {
		TextSettings_SubsetFonts($this->_cPtr,$subset);
	}

	function EmbedFonts($embed) {
		TextSettings_EmbedFonts($this->_cPtr,$embed);
	}
}

class OptimizerSettings {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'OptimizerSettings_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_color_image_settings') return new ImageSettings(OptimizerSettings_m_color_image_settings_get($this->_cPtr));
		if ($var === 'm_grayscale_image_settings') return new ImageSettings(OptimizerSettings_m_grayscale_image_settings_get($this->_cPtr));
		if ($var === 'm_mono_image_settings') return new MonoImageSettings(OptimizerSettings_m_mono_image_settings_get($this->_cPtr));
		if ($var === 'm_text_settings') return new TextSettings(OptimizerSettings_m_text_settings_get($this->_cPtr));
		if ($var === 'm_remove_custom') return OptimizerSettings_m_remove_custom_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('OptimizerSettings_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OptimizerSettings') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_OptimizerSettings();
	}

	function SetColorImageSettings($settings) {
		OptimizerSettings_SetColorImageSettings($this->_cPtr,$settings);
	}

	function SetGrayscaleImageSettings($settings) {
		OptimizerSettings_SetGrayscaleImageSettings($this->_cPtr,$settings);
	}

	function SetMonoImageSettings($settings) {
		OptimizerSettings_SetMonoImageSettings($this->_cPtr,$settings);
	}

	function SetTextSettings($settings) {
		OptimizerSettings_SetTextSettings($this->_cPtr,$settings);
	}

	function RemoveCustomEntries($should_remove) {
		OptimizerSettings_RemoveCustomEntries($this->_cPtr,$should_remove);
	}
}

class BitmapInfo {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'BitmapInfo_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'BitmapInfo_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('BitmapInfo_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($w_or_b,$h=null,$s=null,$d=null,$b=null) {
		if (is_resource($w_or_b) && get_resource_type($w_or_b) === '_p_pdftron__PDF__BitmapInfo') {
			$this->_cPtr=$w_or_b;
			return;
		}
		switch (func_num_args()) {
		case 1: $this->_cPtr=new_BitmapInfo($w_or_b); break;
		case 2: $this->_cPtr=new_BitmapInfo($w_or_b,$h); break;
		case 3: $this->_cPtr=new_BitmapInfo($w_or_b,$h,$s); break;
		case 4: $this->_cPtr=new_BitmapInfo($w_or_b,$h,$s,$d); break;
		default: $this->_cPtr=new_BitmapInfo($w_or_b,$h,$s,$d,$b);
		}
	}

	function GetBuffer() {
		$r=BitmapInfo_GetBuffer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}
}

class PDFDraw {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_draw') return PDFDraw_mp_draw_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_draw') return PDFDraw_mp_draw_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PDFDraw_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($dpi=92.0) {
		if (is_resource($dpi) && get_resource_type($dpi) === '_p_pdftron__PDF__PDFDraw') {
			$this->_cPtr=$dpi;
			return;
		}
		$this->_cPtr=new_PDFDraw($dpi);
	}

	function SetRasterizerType($type) {
		PDFDraw_SetRasterizerType($this->_cPtr,$type);
	}

	function SetDPI($dpi) {
		PDFDraw_SetDPI($this->_cPtr,$dpi);
	}

	function SetImageSize($width,$height,$preserve_aspect_ratio=true) {
		PDFDraw_SetImageSize($this->_cPtr,$width,$height,$preserve_aspect_ratio);
	}

	function SetPageBox($region) {
		PDFDraw_SetPageBox($this->_cPtr,$region);
	}

	function SetClipRect($clip_rect) {
		PDFDraw_SetClipRect($this->_cPtr,$clip_rect);
	}

	function SetFlipYAxis($flip_y) {
		PDFDraw_SetFlipYAxis($this->_cPtr,$flip_y);
	}

	function SetRotate($r_) {
		PDFDraw_SetRotate($this->_cPtr,$r_);
	}

	function SetDrawAnnotations($render_annots) {
		PDFDraw_SetDrawAnnotations($this->_cPtr,$render_annots);
	}

	function SetHighlightFields($highlight_fields) {
		PDFDraw_SetHighlightFields($this->_cPtr,$highlight_fields);
	}

	function SetAntiAliasing($enable_aa) {
		PDFDraw_SetAntiAliasing($this->_cPtr,$enable_aa);
	}

	function SetPathHinting($enable_hinting) {
		PDFDraw_SetPathHinting($this->_cPtr,$enable_hinting);
	}

	function SetThinLineAdjustment($pixel_grid_fit,$stroke_adjust) {
		PDFDraw_SetThinLineAdjustment($this->_cPtr,$pixel_grid_fit,$stroke_adjust);
	}

	function SetImageSmoothing($smoothing_enabled=true,$hq_image_resampling=false) {
		PDFDraw_SetImageSmoothing($this->_cPtr,$smoothing_enabled,$hq_image_resampling);
	}

	function SetCaching($enabled=true) {
		PDFDraw_SetCaching($this->_cPtr,$enabled);
	}

	function SetGamma($exp) {
		PDFDraw_SetGamma($this->_cPtr,$exp);
	}

	function SetOCGContext($ctx) {
		PDFDraw_SetOCGContext($this->_cPtr,$ctx);
	}

	function SetPrintMode($is_printing) {
		PDFDraw_SetPrintMode($this->_cPtr,$is_printing);
	}

	function SetDefaultPageColor($r_,$g,$b) {
		PDFDraw_SetDefaultPageColor($this->_cPtr,$r_,$g,$b);
	}

	function SetPageTransparent($is_transparent) {
		PDFDraw_SetPageTransparent($this->_cPtr,$is_transparent);
	}

	function SetOverprint($op) {
		PDFDraw_SetOverprint($this->_cPtr,$op);
	}

	function Export($page,$filename_or_stream,$format=null,$encoder_params=null) {
		switch (func_num_args()) {
		case 2: PDFDraw_Export($this->_cPtr,$page,$filename_or_stream); break;
		case 3: PDFDraw_Export($this->_cPtr,$page,$filename_or_stream,$format); break;
		default: PDFDraw_Export($this->_cPtr,$page,$filename_or_stream,$format,$encoder_params);
		}
	}

	const e_rgba = 0;

	const e_bgra = PDFDraw_e_bgra;

	const e_rgb = PDFDraw_e_rgb;

	const e_bgr = PDFDraw_e_bgr;

	const e_gray = PDFDraw_e_gray;

	const e_gray_alpha = PDFDraw_e_gray_alpha;

	const e_cmyk = PDFDraw_e_cmyk;

	function GetBitmap($page,$pix_fmt=null,$demult=false) {
		switch (func_num_args()) {
		case 1: $r=PDFDraw_GetBitmap($this->_cPtr,$page); break;
		default: $r=PDFDraw_GetBitmap($this->_cPtr,$page,$pix_fmt,$demult);
		}
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new BitmapInfo($r);
		}
		return $r;
	}

	function GetSeparationBitmaps($page) {
		$r=PDFDraw_GetSeparationBitmaps($this->_cPtr,$page);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorSeparation($r);
		}
		return $r;
	}

	function SetErrorReportProc($instance) {
		PDFDraw_SetErrorReportProc($this->_cPtr,$instance);
	}

	function SetColorPostProcessMode($mode) {
		PDFDraw_SetColorPostProcessMode($this->_cPtr,$mode);
	}

	function Destroy() {
		PDFDraw_Destroy($this->_cPtr);
	}
}

class PDFNet {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function EnableJavaScript($enable) {
		PDFNet_EnableJavaScript($enable);
	}

	static function IsJavaScriptEnabled() {
		return PDFNet_IsJavaScriptEnabled();
	}

	static function SetResourcesPath($path) {
		return PDFNet_SetResourcesPath($path);
	}

	static function GetResourcesPath() {
		return PDFNet_GetResourcesPath();
	}

	static function AddResourceSearchPath($path) {
		PDFNet_AddResourceSearchPath($path);
	}

	static function GetVersion() {
		return PDFNet_GetVersion();
	}

	const e_lcms = 0;

	const e_icm = PDFNet_e_icm;

	const e_no_cms = PDFNet_e_no_cms;

	static function SetColorManagement($t=null) {
		switch (func_num_args()) {
		case 0: PDFNet_SetColorManagement(); break;
		default: PDFNet_SetColorManagement($t);
		}
	}

	static function SetDefaultDeviceCMYKProfile($icc_filename_or_stream) {
		PDFNet_SetDefaultDeviceCMYKProfile($icc_filename_or_stream);
	}

	static function SetDefaultDeviceRGBProfile($icc_filename_or_stream) {
		PDFNet_SetDefaultDeviceRGBProfile($icc_filename_or_stream);
	}

	static function SetDefaultDiskCachingEnabled($use_disk) {
		PDFNet_SetDefaultDiskCachingEnabled($use_disk);
	}

	const e_Z_DEFAULT_COMPRESSION = -1;

	const e_Z_NO_COMPRESSION = 0;

	const e_Z_BEST_SPEED = 1;

	const e_Z_BEST_COMPRESSION = 9;

	static function SetDefaultFlateCompressionLevel($level) {
		PDFNet_SetDefaultFlateCompressionLevel($level);
	}

	static function SetViewerCache($max_cache_size,$on_disk) {
		PDFNet_SetViewerCache($max_cache_size,$on_disk);
	}

	const e_Identity = 0;

	const e_Japan1 = 1;

	const e_Japan2 = 2;

	const e_GB1 = 3;

	const e_CNS1 = 4;

	const e_Korea1 = 5;

	static function AddFontSubst($fontname_or_ordering,$fontpath) {
		return PDFNet_AddFontSubst($fontname_or_ordering,$fontpath);
	}

	static function SetTempPath($temp_path) {
		PDFNet_SetTempPath($temp_path);
	}

	static function SetPersistentCachePath($persistent_path) {
		PDFNet_SetPersistentCachePath($persistent_path);
	}

	static function GetSystemFontList() {
		return PDFNet_GetSystemFontList();
	}

	const e_LogLevel_Off = -1;

	const e_LogLevel_Fatal = 5;

	const e_LogLevel_Error = 4;

	const e_LogLevel_Warning = 3;

	const e_LogLevel_Info = 2;

	const e_LogLevel_Trace = 1;

	const e_LogLevel_Debug = 0;

	static function SetLogLevel($level=null) {
		switch (func_num_args()) {
		case 0: PDFNet_SetLogLevel(); break;
		default: PDFNet_SetLogLevel($level);
		}
	}

	static function AddPDFTronCustomHandler($custom_id) {
		PDFNet_AddPDFTronCustomHandler($custom_id);
	}

	static function GetVersionString() {
		return PDFNet_GetVersionString();
	}

	static function SetWriteAPIUsageLocally($write_usage) {
		PDFNet_SetWriteAPIUsageLocally($write_usage);
	}

	const e_continue = 0;

	const e_continue_unless_switching_to_demo = PDFNet_e_continue_unless_switching_to_demo;

	const e_stop = PDFNet_e_stop;

	static function SetConnectionErrorHandlingMode($mode) {
		PDFNet_SetConnectionErrorHandlingMode($mode);
	}

	static function SetConnectionErrorProc($instance) {
		PDFNet_SetConnectionErrorProc($instance);
	}

	static function Initialize($license_key=null,$json_string=null) {
		switch (func_num_args()) {
		case 0: PDFNet_Initialize(); break;
		case 1: PDFNet_Initialize($license_key); break;
		default: PDFNet_Initialize($license_key,$json_string);
		}
	}

	static function Terminate($termination_level=null) {
		switch (func_num_args()) {
		case 0: PDFNet_Terminate(); break;
		default: PDFNet_Terminate($termination_level);
		}
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDFNet') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PDFNet();
	}
}

class PDFView {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PDFView') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PDFView();
	}

	function SetDoc($doc) {
		PDFView_SetDoc($this->_cPtr,$doc);
	}

	function OpenUniversalDoc($conversion) {
		PDFView_OpenUniversalDoc($this->_cPtr,$conversion);
	}

	function CloseDoc() {
		PDFView_CloseDoc($this->_cPtr);
	}

	function GetDoc() {
		$r=PDFView_GetDoc($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new PDFDoc($r);
		}
		return $r;
	}

	function DocLock($cancel_threads) {
		PDFView_DocLock($this->_cPtr,$cancel_threads);
	}

	function DocUnlock() {
		PDFView_DocUnlock($this->_cPtr);
	}

	function DocTryLock($milliseconds=0) {
		return PDFView_DocTryLock($this->_cPtr,$milliseconds);
	}

	function DocLockRead() {
		PDFView_DocLockRead($this->_cPtr);
	}

	function DocUnlockRead() {
		PDFView_DocUnlockRead($this->_cPtr);
	}

	function DocTryLockRead($milliseconds=0) {
		return PDFView_DocTryLockRead($this->_cPtr,$milliseconds);
	}

	const e_single_page = 1;

	const e_single_continuous = PDFView_e_single_continuous;

	const e_facing = PDFView_e_facing;

	const e_facing_continuous = PDFView_e_facing_continuous;

	const e_facing_cover = PDFView_e_facing_cover;

	const e_facing_continuous_cover = PDFView_e_facing_continuous_cover;

	function SetPagePresentationMode($mode) {
		PDFView_SetPagePresentationMode($this->_cPtr,$mode);
	}

	function GetPagePresentationMode() {
		return PDFView_GetPagePresentationMode($this->_cPtr);
	}

	function SetColorPostProcessMode($mode) {
		PDFView_SetColorPostProcessMode($this->_cPtr,$mode);
	}

	function SetColorPostProcessMapFile($image_file_contents) {
		PDFView_SetColorPostProcessMapFile($this->_cPtr,$image_file_contents);
	}

	function GetPostProcessedColor($color) {
		$r=PDFView_GetPostProcessedColor($this->_cPtr,$color);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ColorPt($r);
		}
		return $r;
	}

	function SetColorPostProcessColors($white_color,$black_color) {
		PDFView_SetColorPostProcessColors($this->_cPtr,$white_color,$black_color);
	}

	function GetColorPostProcessMode() {
		return PDFView_GetColorPostProcessMode($this->_cPtr);
	}

	function GetCurrentPage() {
		return PDFView_GetCurrentPage($this->_cPtr);
	}

	function GetPageCount() {
		return PDFView_GetPageCount($this->_cPtr);
	}

	function GotoFirstPage() {
		return PDFView_GotoFirstPage($this->_cPtr);
	}

	function GotoLastPage() {
		return PDFView_GotoLastPage($this->_cPtr);
	}

	function GotoNextPage() {
		return PDFView_GotoNextPage($this->_cPtr);
	}

	function GotoPreviousPage() {
		return PDFView_GotoPreviousPage($this->_cPtr);
	}

	function SetCurrentPage($page_num) {
		return PDFView_SetCurrentPage($this->_cPtr,$page_num);
	}

	function ShowRect($page_num,$rect) {
		return PDFView_ShowRect($this->_cPtr,$page_num,$rect);
	}

	function GetVisiblePages() {
		$r=PDFView_GetVisiblePages($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorInt($r);
		}
		return $r;
	}

	function GetZoom() {
		return PDFView_GetZoom($this->_cPtr);
	}

	function SetZoom($zoom_or_x,$y=null,$zoom=null) {
		switch (func_num_args()) {
		case 1: $r=PDFView_SetZoom($this->_cPtr,$zoom_or_x); break;
		case 2: $r=PDFView_SetZoom($this->_cPtr,$zoom_or_x,$y); break;
		default: $r=PDFView_SetZoom($this->_cPtr,$zoom_or_x,$y,$zoom);
		}
		return $r;
	}

	function SmartZoom($x,$y) {
		return PDFView_SmartZoom($this->_cPtr,$x,$y);
	}

	function RotateClockwise() {
		PDFView_RotateClockwise($this->_cPtr);
	}

	function RotateCounterClockwise() {
		PDFView_RotateCounterClockwise($this->_cPtr);
	}

	function GetRotation() {
		return PDFView_GetRotation($this->_cPtr);
	}

	function GetPageNumberFromScreenPt($x,$y) {
		return PDFView_GetPageNumberFromScreenPt($this->_cPtr,$x,$y);
	}

	function ConvScreenPtToCanvasPt($pt) {
		$r=PDFView_ConvScreenPtToCanvasPt($this->_cPtr,$pt);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function ConvCanvasPtToScreenPt($pt) {
		$r=PDFView_ConvCanvasPtToScreenPt($this->_cPtr,$pt);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function ConvCanvasPtToPagePt($pt,$page_num=-1) {
		$r=PDFView_ConvCanvasPtToPagePt($this->_cPtr,$pt,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function ConvPagePtToCanvasPt($pt,$page_num=-1) {
		$r=PDFView_ConvPagePtToCanvasPt($this->_cPtr,$pt,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function ConvScreenPtToPagePt($pt,$page_num=-1) {
		$r=PDFView_ConvScreenPtToPagePt($this->_cPtr,$pt,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function ConvPagePtToScreenPt($pt,$page_num=-1) {
		$r=PDFView_ConvPagePtToScreenPt($this->_cPtr,$pt,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SnapToNearestInDoc($screen_pt) {
		$r=PDFView_SnapToNearestInDoc($this->_cPtr,$screen_pt);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Point($r);
		}
		return $r;
	}

	function SetSnappingMode($mode_flags) {
		PDFView_SetSnappingMode($this->_cPtr,$mode_flags);
	}

	function GetDeviceTransform($page_num=-1) {
		$r=PDFView_GetDeviceTransform($this->_cPtr,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Matrix2D($r);
		}
		return $r;
	}

	function SetErrorReportProc($instance) {
		PDFView_SetErrorReportProc($this->_cPtr,$instance);
	}

	function SetCurrentPageProc($instance) {
		PDFView_SetCurrentPageProc($this->_cPtr,$instance);
	}

	function SetJavaScriptEventCallBack($instance) {
		PDFView_SetJavaScriptEventCallBack($this->_cPtr,$instance);
	}

	function SetCurrentZoomProc($instance) {
		PDFView_SetCurrentZoomProc($this->_cPtr,$instance);
	}

	function ExecuteAction($action_or_action_param) {
		PDFView_ExecuteAction($this->_cPtr,$action_or_action_param);
	}

	function GetCanvasWidth() {
		return PDFView_GetCanvasWidth($this->_cPtr);
	}

	function GetCanvasHeight() {
		return PDFView_GetCanvasHeight($this->_cPtr);
	}

	function GetHScrollPos() {
		return PDFView_GetHScrollPos($this->_cPtr);
	}

	function GetVScrollPos() {
		return PDFView_GetVScrollPos($this->_cPtr);
	}

	function OnScroll($pix_dx,$pix_dy) {
		PDFView_OnScroll($this->_cPtr,$pix_dx,$pix_dy);
	}

	function SetHScrollPos($pos) {
		PDFView_SetHScrollPos($this->_cPtr,$pos);
	}

	function SetVScrollPos($pos) {
		PDFView_SetVScrollPos($this->_cPtr,$pos);
	}

	function OnSize($width,$height) {
		PDFView_OnSize($this->_cPtr,$width,$height);
	}

	function IsFinishedRendering($visible_region_only) {
		return PDFView_IsFinishedRendering($this->_cPtr,$visible_region_only);
	}

	function CancelRendering() {
		PDFView_CancelRendering($this->_cPtr);
	}

	function Update($all_or_update_or_annot_or_field=null,$page_num=null) {
		switch (func_num_args()) {
		case 0: PDFView_Update($this->_cPtr); break;
		case 1: PDFView_Update($this->_cPtr,$all_or_update_or_annot_or_field); break;
		default: PDFView_Update($this->_cPtr,$all_or_update_or_annot_or_field,$page_num);
		}
	}

	function UpdatePageLayout() {
		PDFView_UpdatePageLayout($this->_cPtr);
	}

	function GetBuffer() {
		$r=PDFView_GetBuffer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorUChar($r);
		}
		return $r;
	}

	function UpdateBuffer() {
		PDFView_UpdateBuffer($this->_cPtr);
	}

	function GetBufferWidth() {
		return PDFView_GetBufferWidth($this->_cPtr);
	}

	function GetBufferHeight() {
		return PDFView_GetBufferHeight($this->_cPtr);
	}

	function GetBufferStride() {
		return PDFView_GetBufferStride($this->_cPtr);
	}

	function HideAnnotation($annot) {
		PDFView_HideAnnotation($this->_cPtr,$annot);
	}

	function ShowAnnotation($annot) {
		PDFView_ShowAnnotation($this->_cPtr,$annot);
	}

	function SetDrawAnnotations($render_annots) {
		PDFView_SetDrawAnnotations($this->_cPtr,$render_annots);
	}

	function SetUrlExtraction($enabled) {
		PDFView_SetUrlExtraction($this->_cPtr,$enabled);
	}

	function GetLinkAt($x,$y) {
		return PDFView_GetLinkAt($this->_cPtr,$x,$y);
	}

	function SetHighlightFields($highlight_fields) {
		PDFView_SetHighlightFields($this->_cPtr,$highlight_fields);
	}

	function SetRequiredFieldBorderColor($new_border_color) {
		PDFView_SetRequiredFieldBorderColor($this->_cPtr,$new_border_color);
	}

	function SetAntiAliasing($enable_aa) {
		PDFView_SetAntiAliasing($this->_cPtr,$enable_aa);
	}

	function SetPathHinting($enable_hinting) {
		PDFView_SetPathHinting($this->_cPtr,$enable_hinting);
	}

	function SetThinLineAdjustment($pixel_grid_fit,$stroke_adjust) {
		PDFView_SetThinLineAdjustment($this->_cPtr,$pixel_grid_fit,$stroke_adjust);
	}

	function SetImageSmoothing($smoothing_enabled=true) {
		PDFView_SetImageSmoothing($this->_cPtr,$smoothing_enabled);
	}

	function SetCaching($enabled) {
		PDFView_SetCaching($this->_cPtr,$enabled);
	}

	function SetRasterizerType($type) {
		PDFView_SetRasterizerType($this->_cPtr,$type);
	}

	function SetGamma($exp) {
		PDFView_SetGamma($this->_cPtr,$exp);
	}

	function SetOverprint($op) {
		PDFView_SetOverprint($this->_cPtr,$op);
	}

	function SetOCGContext($ctx) {
		PDFView_SetOCGContext($this->_cPtr,$ctx);
	}

	function GetOCGContext() {
		$r=PDFView_GetOCGContext($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Context($r);
		}
		return $r;
	}

	function UpdateOCGContext() {
		PDFView_UpdateOCGContext($this->_cPtr);
	}

	function SetRenderBeginProc($instance) {
		PDFView_SetRenderBeginProc($this->_cPtr,$instance);
	}

	function SetRenderFinishProc($instance) {
		PDFView_SetRenderFinishProc($this->_cPtr,$instance);
	}

	const e_structural = 0;

	const e_rectangular = PDFView_e_rectangular;

	const e_structural_algorithm_2 = PDFView_e_structural_algorithm_2;

	function SetTextSelectionMode($tm) {
		PDFView_SetTextSelectionMode($this->_cPtr,$tm);
	}

	function SelectWithSnapping($x1,$y1,$x2_or_page1,$y2_or_x2,$snap_to_start_or_y2,$snap_to_end_or_page2,$snap_to_start=null,$snap_to_end=null) {
		switch (func_num_args()) {
		case 6: $r=PDFView_SelectWithSnapping($this->_cPtr,$x1,$y1,$x2_or_page1,$y2_or_x2,$snap_to_start_or_y2,$snap_to_end_or_page2); break;
		case 7: $r=PDFView_SelectWithSnapping($this->_cPtr,$x1,$y1,$x2_or_page1,$y2_or_x2,$snap_to_start_or_y2,$snap_to_end_or_page2,$snap_to_start); break;
		default: $r=PDFView_SelectWithSnapping($this->_cPtr,$x1,$y1,$x2_or_page1,$y2_or_x2,$snap_to_start_or_y2,$snap_to_end_or_page2,$snap_to_start,$snap_to_end);
		}
		return $r;
	}

	function SelectWithSmartSnapping($x1,$y1,$x2_or_page1,$y2_or_x2,$y2=null,$page2=null) {
		switch (func_num_args()) {
		case 4: $r=PDFView_SelectWithSmartSnapping($this->_cPtr,$x1,$y1,$x2_or_page1,$y2_or_x2); break;
		case 5: $r=PDFView_SelectWithSmartSnapping($this->_cPtr,$x1,$y1,$x2_or_page1,$y2_or_x2,$y2); break;
		default: $r=PDFView_SelectWithSmartSnapping($this->_cPtr,$x1,$y1,$x2_or_page1,$y2_or_x2,$y2,$page2);
		}
		return $r;
	}

	function Select($x1_or_highlights_or_select,$y1=null,$x2_or_page1=null,$y2_or_x2=null,$y2=null,$page2=null) {
		switch (func_num_args()) {
		case 1: $r=PDFView_Select($this->_cPtr,$x1_or_highlights_or_select); break;
		case 2: $r=PDFView_Select($this->_cPtr,$x1_or_highlights_or_select,$y1); break;
		case 3: $r=PDFView_Select($this->_cPtr,$x1_or_highlights_or_select,$y1,$x2_or_page1); break;
		case 4: $r=PDFView_Select($this->_cPtr,$x1_or_highlights_or_select,$y1,$x2_or_page1,$y2_or_x2); break;
		case 5: $r=PDFView_Select($this->_cPtr,$x1_or_highlights_or_select,$y1,$x2_or_page1,$y2_or_x2,$y2); break;
		default: $r=PDFView_Select($this->_cPtr,$x1_or_highlights_or_select,$y1,$x2_or_page1,$y2_or_x2,$y2,$page2);
		}
		return $r;
	}

	function CancelFindText() {
		PDFView_CancelFindText($this->_cPtr);
	}

	function SelectAll() {
		PDFView_SelectAll($this->_cPtr);
	}

	function HasSelection() {
		return PDFView_HasSelection($this->_cPtr);
	}

	function ClearSelection() {
		PDFView_ClearSelection($this->_cPtr);
	}

	function GetSelection($pagenum=-1) {
		$r=PDFView_GetSelection($this->_cPtr,$pagenum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Selection($r);
		}
		return $r;
	}

	function GetSelectionBeginPage() {
		return PDFView_GetSelectionBeginPage($this->_cPtr);
	}

	function GetSelectionEndPage() {
		return PDFView_GetSelectionEndPage($this->_cPtr);
	}

	function HasSelectionOnPage($ipage) {
		return PDFView_HasSelectionOnPage($this->_cPtr,$ipage);
	}

	function PrepareWords($page_num) {
		PDFView_PrepareWords($this->_cPtr,$page_num);
	}

	function WereWordsPrepared($page_num) {
		return PDFView_WereWordsPrepared($this->_cPtr,$page_num);
	}

	function IsThereTextInRect($x1,$y1,$x2,$y2) {
		return PDFView_IsThereTextInRect($this->_cPtr,$x1,$y1,$x2,$y2);
	}

	function PrepareAnnotsForMouse($page_num,$distance_threshold,$minimum_line_weight) {
		PDFView_PrepareAnnotsForMouse($this->_cPtr,$page_num,$distance_threshold,$minimum_line_weight);
	}

	function WereAnnotsForMousePrepared($page_num) {
		return PDFView_WereAnnotsForMousePrepared($this->_cPtr,$page_num);
	}

	function GetAnnotTypeUnder($x,$y) {
		return PDFView_GetAnnotTypeUnder($this->_cPtr,$x,$y);
	}

	function SetPageBorderVisibility($border_visible) {
		PDFView_SetPageBorderVisibility($this->_cPtr,$border_visible);
	}

	function SetPageTransparencyGrid($trans_grid_visible) {
		PDFView_SetPageTransparencyGrid($this->_cPtr,$trans_grid_visible);
	}

	function SetDefaultPageColor($r_,$g,$b) {
		PDFView_SetDefaultPageColor($this->_cPtr,$r_,$g,$b);
	}

	function SetBackgroundColor($r_,$g,$b,$a=255) {
		PDFView_SetBackgroundColor($this->_cPtr,$r_,$g,$b,$a);
	}

	function SetHorizontalAlign($align) {
		PDFView_SetHorizontalAlign($this->_cPtr,$align);
	}

	function SetVerticalAlign($align) {
		PDFView_SetVerticalAlign($this->_cPtr,$align);
	}

	function SetPageSpacing($horiz_col_space,$vert_col_space,$horiz_pad,$vert_pad) {
		PDFView_SetPageSpacing($this->_cPtr,$horiz_col_space,$vert_col_space,$horiz_pad,$vert_pad);
	}

	static function SetViewerCache($document,$max_cache_size,$on_disk) {
		PDFView_SetViewerCache($document,$max_cache_size,$on_disk);
	}

	function Destroy() {
		PDFView_Destroy($this->_cPtr);
	}

	function SetDevicePixelDensity($dpi,$scale_factor) {
		PDFView_SetDevicePixelDensity($this->_cPtr,$dpi,$scale_factor);
	}

	function GetScreenRectForAnnot($annot,$page_num=-1) {
		$r=PDFView_GetScreenRectForAnnot($this->_cPtr,$annot,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetAnnotationAt($x,$y,$distanceThreshold,$minimumLineWeight) {
		$r=PDFView_GetAnnotationAt($this->_cPtr,$x,$y,$distanceThreshold,$minimumLineWeight);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Annot($r);
		}
		return $r;
	}

	const e_fit_page = 0;

	const e_fit_width = PDFView_e_fit_width;

	const e_fit_height = PDFView_e_fit_height;

	const e_zoom = PDFView_e_zoom;

	const PVM_SIZE = PDFView_PVM_SIZE;

	function SetPageViewMode($mode) {
		PDFView_SetPageViewMode($this->_cPtr,$mode);
	}

	function GetPageViewMode() {
		return PDFView_GetPageViewMode($this->_cPtr);
	}

	function RefreshAndUpdate($view_change) {
		PDFView_RefreshAndUpdate($this->_cPtr,$view_change);
	}

	function SetPageRefViewMode($mode) {
		PDFView_SetPageRefViewMode($this->_cPtr,$mode);
	}

	function GetPageRefViewMode() {
		return PDFView_GetPageRefViewMode($this->_cPtr);
	}

	function SetupThumbnails($use_embedded,$generate_at_runtime,$use_disk_cache,$thumb_max_side_length,$max_abs_cache_size,$max_perc_cache_size) {
		PDFView_SetupThumbnails($this->_cPtr,$use_embedded,$generate_at_runtime,$use_disk_cache,$thumb_max_side_length,$max_abs_cache_size,$max_perc_cache_size);
	}

	function ClearThumbCache() {
		PDFView_ClearThumbCache($this->_cPtr);
	}

	function GetThumbAsync($page_num,$instance) {
		PDFView_GetThumbAsync($this->_cPtr,$page_num,$instance);
	}

	function GetThumbInCacheSize($page_num) {
		return PDFView_GetThumbInCacheSize($this->_cPtr,$page_num);
	}

	function GetThumbInCache($page_num,$buf,$out_width,$out_height) {
		return PDFView_GetThumbInCache($this->_cPtr,$page_num,$buf,$out_width,$out_height);
	}

	function CancelAllThumbRequests() {
		PDFView_CancelAllThumbRequests($this->_cPtr);
	}

	function SetRequestRenderInWorkerThreadProc($instance) {
		PDFView_SetRequestRenderInWorkerThreadProc($this->_cPtr,$instance);
	}

	function SetFindTextHandler($instance) {
		PDFView_SetFindTextHandler($this->_cPtr,$instance);
	}

	function FindTextAsync($search_str,$match_case,$match_whole_word,$search_up,$reg_exp) {
		PDFView_FindTextAsync($this->_cPtr,$search_str,$match_case,$match_whole_word,$search_up,$reg_exp);
	}

	function GetAnnotationsOnPage($page_num) {
		$r=PDFView_GetAnnotationsOnPage($this->_cPtr,$page_num);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorAnnot($r);
		}
		return $r;
	}

	function GetAnnotationListAt($x1,$y1,$x2,$y2) {
		$r=PDFView_GetAnnotationListAt($this->_cPtr,$x1,$y1,$x2,$y2);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorAnnot($r);
		}
		return $r;
	}

	function EnableUndoRedo() {
		PDFView_EnableUndoRedo($this->_cPtr);
	}

	function Undo() {
		return PDFView_Undo($this->_cPtr);
	}

	function Redo() {
		return PDFView_Redo($this->_cPtr);
	}

	function TakeSnapshot($meta_info) {
		PDFView_TakeSnapshot($this->_cPtr,$meta_info);
	}

	function GetNextUndoInfo() {
		return PDFView_GetNextUndoInfo($this->_cPtr);
	}

	function GetNextRedoInfo() {
		return PDFView_GetNextRedoInfo($this->_cPtr);
	}

	function CanUndo() {
		return PDFView_CanUndo($this->_cPtr);
	}

	function CanRedo() {
		return PDFView_CanRedo($this->_cPtr);
	}

	function RevertAllChanges() {
		PDFView_RevertAllChanges($this->_cPtr);
	}

	function GetExternalAnnotManager($author,$mode=null) {
		switch (func_num_args()) {
		case 1: $r=PDFView_GetExternalAnnotManager($this->_cPtr,$author); break;
		default: $r=PDFView_GetExternalAnnotManager($this->_cPtr,$author,$mode);
		}
		return $r;
	}
}

class PDFPrint {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function StartPrintJob($in_pdfdoc,$in_printerName,$in_jobName,$in_outputFileName,$in_pagesToPrint=null,$in_printerMode=null,$in_cancel=null,$in_context=null) {
		PDFPrint_StartPrintJob($in_pdfdoc,$in_printerName,$in_jobName,$in_outputFileName,$in_pagesToPrint,$in_printerMode,$in_cancel,$in_context);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PDFPrint') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PDFPrint();
	}
}

class PrinterMode {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'm_printerMode') return PrinterMode_m_printerMode_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'm_printerMode') return new Obj(PrinterMode_m_printerMode_get($this->_cPtr));
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('PrinterMode_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_custom = 0;

	const e_letter = PrinterMode_e_letter;

	const e_letter_small = PrinterMode_e_letter_small;

	const e_tabloid = PrinterMode_e_tabloid;

	const e_ledger = PrinterMode_e_ledger;

	const e_legal = PrinterMode_e_legal;

	const e_statement = PrinterMode_e_statement;

	const e_executive = PrinterMode_e_executive;

	const e_a3 = PrinterMode_e_a3;

	const e_a4 = PrinterMode_e_a4;

	const e_a4_small = PrinterMode_e_a4_small;

	const e_a5 = PrinterMode_e_a5;

	const e_b4_jis = PrinterMode_e_b4_jis;

	const e_b5_jis = PrinterMode_e_b5_jis;

	const e_folio = PrinterMode_e_folio;

	const e_quarto = PrinterMode_e_quarto;

	const e_10x14 = PrinterMode_e_10x14;

	const e_11x17 = PrinterMode_e_11x17;

	const e_note = PrinterMode_e_note;

	const e_envelope_9 = PrinterMode_e_envelope_9;

	const e_envelope_10 = PrinterMode_e_envelope_10;

	const e_envelope_11 = PrinterMode_e_envelope_11;

	const e_envelope_12 = PrinterMode_e_envelope_12;

	const e_envelope_14 = PrinterMode_e_envelope_14;

	const e_c_size_sheet = PrinterMode_e_c_size_sheet;

	const e_d_size_sheet = PrinterMode_e_d_size_sheet;

	const e_e_size_sheet = PrinterMode_e_e_size_sheet;

	const e_envelope_dl = PrinterMode_e_envelope_dl;

	const e_envelope_c5 = PrinterMode_e_envelope_c5;

	const e_envelope_c3 = PrinterMode_e_envelope_c3;

	const e_envelope_c4 = PrinterMode_e_envelope_c4;

	const e_envelope_c6 = PrinterMode_e_envelope_c6;

	const e_envelope_c65 = PrinterMode_e_envelope_c65;

	const e_envelope_b4 = PrinterMode_e_envelope_b4;

	const e_envelope_b5 = PrinterMode_e_envelope_b5;

	const e_envelope_b6 = PrinterMode_e_envelope_b6;

	const e_envelope_italy = PrinterMode_e_envelope_italy;

	const e_envelope_monarch = PrinterMode_e_envelope_monarch;

	const e_6_3_quarters_envelope = PrinterMode_e_6_3_quarters_envelope;

	const e_us_std_fanfold = PrinterMode_e_us_std_fanfold;

	const e_german_std_fanfold = PrinterMode_e_german_std_fanfold;

	const e_german_legal_fanfold = PrinterMode_e_german_legal_fanfold;

	const e_b4_iso = PrinterMode_e_b4_iso;

	const e_japanese_postcard = PrinterMode_e_japanese_postcard;

	const e_9x11 = PrinterMode_e_9x11;

	const e_10x11 = PrinterMode_e_10x11;

	const e_15x11 = PrinterMode_e_15x11;

	const e_envelope_invite = PrinterMode_e_envelope_invite;

	const e_reserved_48 = PrinterMode_e_reserved_48;

	const e_reserved_49 = PrinterMode_e_reserved_49;

	const e_letter_extra = PrinterMode_e_letter_extra;

	const e_legal_extra = PrinterMode_e_legal_extra;

	const e_tabloid_extra = PrinterMode_e_tabloid_extra;

	const e_a4_extra = PrinterMode_e_a4_extra;

	const e_letter_transverse = PrinterMode_e_letter_transverse;

	const e_a4_transverse = PrinterMode_e_a4_transverse;

	const e_letter_extra_transverse = PrinterMode_e_letter_extra_transverse;

	const e_supera_supera_a4 = PrinterMode_e_supera_supera_a4;

	const e_Superb_Superb_a3 = PrinterMode_e_Superb_Superb_a3;

	const e_letter_plus = PrinterMode_e_letter_plus;

	const e_a4_plus = PrinterMode_e_a4_plus;

	const e_a5_transverse = PrinterMode_e_a5_transverse;

	const e_b5_jis_transverse = PrinterMode_e_b5_jis_transverse;

	const e_a3_extra = PrinterMode_e_a3_extra;

	const e_a5_extra = PrinterMode_e_a5_extra;

	const e_b5_iso_extra = PrinterMode_e_b5_iso_extra;

	const e_a2 = PrinterMode_e_a2;

	const e_a3_transverse = PrinterMode_e_a3_transverse;

	const e_a3_extra_transverse = PrinterMode_e_a3_extra_transverse;

	const e_japanese_double_postcard = PrinterMode_e_japanese_double_postcard;

	const e_a6 = PrinterMode_e_a6;

	const e_japanese_envelope_kaku_2 = PrinterMode_e_japanese_envelope_kaku_2;

	const e_japanese_envelope_kaku_3 = PrinterMode_e_japanese_envelope_kaku_3;

	const e_japanese_envelope_chou_3 = PrinterMode_e_japanese_envelope_chou_3;

	const e_japanese_envelope_chou_4 = PrinterMode_e_japanese_envelope_chou_4;

	const e_letter_rotated = PrinterMode_e_letter_rotated;

	const e_a3_rotated = PrinterMode_e_a3_rotated;

	const e_a4_rotated = PrinterMode_e_a4_rotated;

	const e_a5_rotated = PrinterMode_e_a5_rotated;

	const e_b4_jis_rotated = PrinterMode_e_b4_jis_rotated;

	const e_b5_jis_rotated = PrinterMode_e_b5_jis_rotated;

	const e_japanese_postcard_rotated = PrinterMode_e_japanese_postcard_rotated;

	const e_double_japanese_postcard_rotated = PrinterMode_e_double_japanese_postcard_rotated;

	const e_a6_rotated = PrinterMode_e_a6_rotated;

	const e_japanese_envelope_kaku_2_rotated = PrinterMode_e_japanese_envelope_kaku_2_rotated;

	const e_japanese_envelope_kaku_3_rotated = PrinterMode_e_japanese_envelope_kaku_3_rotated;

	const e_japanese_envelope_chou_3_rotated = PrinterMode_e_japanese_envelope_chou_3_rotated;

	const e_japanese_envelope_chou_4_rotated = PrinterMode_e_japanese_envelope_chou_4_rotated;

	const e_b6_jis = PrinterMode_e_b6_jis;

	const e_b6_jis_rotated = PrinterMode_e_b6_jis_rotated;

	const e_12x11 = PrinterMode_e_12x11;

	const e_japanese_envelope_you_4 = PrinterMode_e_japanese_envelope_you_4;

	const e_japanese_envelope_you_4_rotated = PrinterMode_e_japanese_envelope_you_4_rotated;

	const e_prc_16k = PrinterMode_e_prc_16k;

	const e_prc_32k = PrinterMode_e_prc_32k;

	const e_prc_32k_big = PrinterMode_e_prc_32k_big;

	const e_prc_envelop_1 = PrinterMode_e_prc_envelop_1;

	const e_prc_envelop_2 = PrinterMode_e_prc_envelop_2;

	const e_prc_envelop_3 = PrinterMode_e_prc_envelop_3;

	const e_prc_envelop_4 = PrinterMode_e_prc_envelop_4;

	const e_prc_envelop_5 = PrinterMode_e_prc_envelop_5;

	const e_prc_envelop_6 = PrinterMode_e_prc_envelop_6;

	const e_prc_envelop_7 = PrinterMode_e_prc_envelop_7;

	const e_prc_envelop_8 = PrinterMode_e_prc_envelop_8;

	const e_prc_envelop_9 = PrinterMode_e_prc_envelop_9;

	const e_prc_envelop_10 = PrinterMode_e_prc_envelop_10;

	const e_prc_16k_rotated = PrinterMode_e_prc_16k_rotated;

	const e_prc_32k_rotated = PrinterMode_e_prc_32k_rotated;

	const e_prc_32k_big__rotated = PrinterMode_e_prc_32k_big__rotated;

	const e_prc_envelop_1_rotated = PrinterMode_e_prc_envelop_1_rotated;

	const e_prc_envelop_2_rotated = PrinterMode_e_prc_envelop_2_rotated;

	const e_prc_envelop_3_rotated = PrinterMode_e_prc_envelop_3_rotated;

	const e_prc_envelop_4_rotated = PrinterMode_e_prc_envelop_4_rotated;

	const e_prc_envelop_5_rotated = PrinterMode_e_prc_envelop_5_rotated;

	const e_prc_envelop_6_rotated = PrinterMode_e_prc_envelop_6_rotated;

	const e_prc_envelop_7_rotated = PrinterMode_e_prc_envelop_7_rotated;

	const e_prc_envelop_8_rotated = PrinterMode_e_prc_envelop_8_rotated;

	const e_prc_envelop_9_rotated = PrinterMode_e_prc_envelop_9_rotated;

	const e_prc_envelop_10_rotated = PrinterMode_e_prc_envelop_10_rotated;

	const e_Duplex_Auto = 0;

	const e_Duplex_None = 1;

	const e_Duplex_LongSide = 2;

	const e_Duplex_ShortSide = 3;

	const e_OutputQuality_Draft = -1;

	const e_OutputQuality_Low = -2;

	const e_OutputQuality_Medium = -3;

	const e_OutputQuality_High = -4;

	const e_OutputColor_Color = 0;

	const e_OutputColor_Grayscale = 1;

	const e_OutputColor_Monochrome = 2;

	const e_Orientation_Portrait = 0;

	const e_Orientation_Landscape = 1;

	const e_ScaleType_None = 0;

	const e_ScaleType_FitToOutputPage = 1;

	const e_ScaleType_ReduceToOutputPage = 2;

	const e_NUp_1_1 = 0;

	const e_NUp_2_1 = 1;

	const e_NUp_2_2 = 2;

	const e_NUp_3_2 = 3;

	const e_NUp_3_3 = 4;

	const e_NUp_4_4 = 5;

	const e_PageOrder_LeftToRightThenTopToBottom = 0;

	const e_PageOrder_RightToLeftThenTopToBottom = 1;

	const e_PageOrder_TopToBottomThenLeftToRight = 2;

	const e_PageOrder_BottomToTopThenLeftToRight = 3;

	const e_PrintContent_DocumentOnly = 0;

	const e_PrintContent_DocumentAndAnnotations = 1;

	const e_PrintContent_DocumentAnnotationsAndComments = 2;

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PrinterMode') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_PrinterMode();
	}

	function SetAutoCenter($autoCenter) {
		PrinterMode_SetAutoCenter($this->_cPtr,$autoCenter);
	}

	function SetAutoRotate($autoRotate) {
		PrinterMode_SetAutoRotate($this->_cPtr,$autoRotate);
	}

	function SetCollation($collation) {
		PrinterMode_SetCollation($this->_cPtr,$collation);
	}

	function SetCopyCount($copyCount) {
		PrinterMode_SetCopyCount($this->_cPtr,$copyCount);
	}

	function SetDPI($dpi) {
		PrinterMode_SetDPI($this->_cPtr,$dpi);
	}

	function SetDuplexing($mode) {
		PrinterMode_SetDuplexing($this->_cPtr,$mode);
	}

	function SetNUp($nup_or_x,$pageOrder_or_y=null,$pageOrder=null) {
		switch (func_num_args()) {
		case 1: PrinterMode_SetNUp($this->_cPtr,$nup_or_x); break;
		case 2: PrinterMode_SetNUp($this->_cPtr,$nup_or_x,$pageOrder_or_y); break;
		default: PrinterMode_SetNUp($this->_cPtr,$nup_or_x,$pageOrder_or_y,$pageOrder);
		}
	}

	function SetOrientation($orientation) {
		PrinterMode_SetOrientation($this->_cPtr,$orientation);
	}

	function SetOutputAnnot($printContent) {
		PrinterMode_SetOutputAnnot($this->_cPtr,$printContent);
	}

	function SetOutputColor($color) {
		PrinterMode_SetOutputColor($this->_cPtr,$color);
	}

	function SetOutputQuality($quality) {
		PrinterMode_SetOutputQuality($this->_cPtr,$quality);
	}

	function SetOutputPageBorder($printBorder) {
		PrinterMode_SetOutputPageBorder($this->_cPtr,$printBorder);
	}

	function SetPaperSize($size_or_paperSize=null) {
		switch (func_num_args()) {
		case 0: PrinterMode_SetPaperSize($this->_cPtr); break;
		default: PrinterMode_SetPaperSize($this->_cPtr,$size_or_paperSize);
		}
	}

	function SetScale($scale) {
		PrinterMode_SetScale($this->_cPtr,$scale);
	}

	function SetScaleType($scaleType) {
		PrinterMode_SetScaleType($this->_cPtr,$scaleType);
	}

	function SetUseRleImageCompression($useRleImageCompression) {
		PrinterMode_SetUseRleImageCompression($this->_cPtr,$useRleImageCompression);
	}
}

class HTML2PDF {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_html2pdf') return HTML2PDF_mp_html2pdf_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_html2pdf') return HTML2PDF_mp_html2pdf_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('HTML2PDF_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function InsertFromURL($url,$settings=null) {
		switch (func_num_args()) {
		case 1: HTML2PDF_InsertFromURL($this->_cPtr,$url); break;
		default: HTML2PDF_InsertFromURL($this->_cPtr,$url,$settings);
		}
	}

	function InsertFromHtmlString($html,$settings=null) {
		switch (func_num_args()) {
		case 1: HTML2PDF_InsertFromHtmlString($this->_cPtr,$html); break;
		default: HTML2PDF_InsertFromHtmlString($this->_cPtr,$html,$settings);
		}
	}

	function InsertTOC($settings=null) {
		switch (func_num_args()) {
		case 0: HTML2PDF_InsertTOC($this->_cPtr); break;
		default: HTML2PDF_InsertTOC($this->_cPtr,$settings);
		}
	}

	function Convert($doc) {
		return HTML2PDF_Convert($this->_cPtr,$doc);
	}

	function GetHTTPErrorCode() {
		return HTML2PDF_GetHTTPErrorCode($this->_cPtr);
	}

	function SetQuiet($quiet) {
		HTML2PDF_SetQuiet($this->_cPtr,$quiet);
	}

	function GetLog() {
		return HTML2PDF_GetLog($this->_cPtr);
	}

	static function SetModulePath($path) {
		HTML2PDF_SetModulePath($path);
	}

	static function IsModuleAvailable() {
		return HTML2PDF_IsModuleAvailable();
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__HTML2PDF') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_HTML2PDF();
	}

	function SetPaperSize($size_or_width,$height=null) {
		switch (func_num_args()) {
		case 1: HTML2PDF_SetPaperSize($this->_cPtr,$size_or_width); break;
		default: HTML2PDF_SetPaperSize($this->_cPtr,$size_or_width,$height);
		}
	}

	function SetLandscape($enable) {
		HTML2PDF_SetLandscape($this->_cPtr,$enable);
	}

	function SetDPI($dpi) {
		HTML2PDF_SetDPI($this->_cPtr,$dpi);
	}

	function SetOutline($enable,$depth=4) {
		HTML2PDF_SetOutline($this->_cPtr,$enable,$depth);
	}

	function DumpOutline($xml_file) {
		HTML2PDF_DumpOutline($this->_cPtr,$xml_file);
	}

	function SetPDFCompression($enable) {
		HTML2PDF_SetPDFCompression($this->_cPtr,$enable);
	}

	function SetMargins($top,$bottom,$left,$right) {
		HTML2PDF_SetMargins($this->_cPtr,$top,$bottom,$left,$right);
	}

	function SetHeader($header) {
		HTML2PDF_SetHeader($this->_cPtr,$header);
	}

	function SetFooter($footer) {
		HTML2PDF_SetFooter($this->_cPtr,$footer);
	}

	function SetImageDPI($dpi) {
		HTML2PDF_SetImageDPI($this->_cPtr,$dpi);
	}

	function SetImageQuality($quality) {
		HTML2PDF_SetImageQuality($this->_cPtr,$quality);
	}

	function SetCookieJar($path) {
		HTML2PDF_SetCookieJar($this->_cPtr,$path);
	}

	function Destroy() {
		HTML2PDF_Destroy($this->_cPtr);
	}
}

class Proxy {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return Proxy_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return Proxy_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Proxy_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Proxy') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Proxy();
	}

	const e_default = 0;

	const e_none = Proxy_e_none;

	const e_http = Proxy_e_http;

	const e_socks5 = Proxy_e_socks5;

	function SetType($type) {
		Proxy_SetType($this->_cPtr,$type);
	}

	function SetHost($host) {
		Proxy_SetHost($this->_cPtr,$host);
	}

	function SetPort($port) {
		Proxy_SetPort($this->_cPtr,$port);
	}

	function SetUsername($username) {
		Proxy_SetUsername($this->_cPtr,$username);
	}

	function SetPassword($password) {
		Proxy_SetPassword($this->_cPtr,$password);
	}

	function Destroy() {
		Proxy_Destroy($this->_cPtr);
	}
}

class WebPageSettings {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return WebPageSettings_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return WebPageSettings_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('WebPageSettings_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__WebPageSettings') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_WebPageSettings();
	}

	function SetPrintBackground($background) {
		WebPageSettings_SetPrintBackground($this->_cPtr,$background);
	}

	function SetLoadImages($load) {
		WebPageSettings_SetLoadImages($this->_cPtr,$load);
	}

	function SetAllowJavaScript($enable) {
		WebPageSettings_SetAllowJavaScript($this->_cPtr,$enable);
	}

	function SetSmartShrinking($enable) {
		WebPageSettings_SetSmartShrinking($this->_cPtr,$enable);
	}

	function SetMinimumFontSize($size) {
		WebPageSettings_SetMinimumFontSize($this->_cPtr,$size);
	}

	function SetDefaultEncoding($encoding) {
		WebPageSettings_SetDefaultEncoding($this->_cPtr,$encoding);
	}

	function SetUserStyleSheet($url) {
		WebPageSettings_SetUserStyleSheet($this->_cPtr,$url);
	}

	function SetAllowPlugins($enable) {
		WebPageSettings_SetAllowPlugins($this->_cPtr,$enable);
	}

	function SetPrintMediaType($print) {
		WebPageSettings_SetPrintMediaType($this->_cPtr,$print);
	}

	function SetIncludeInOutline($include) {
		WebPageSettings_SetIncludeInOutline($this->_cPtr,$include);
	}

	function SetUsername($username) {
		WebPageSettings_SetUsername($this->_cPtr,$username);
	}

	function SetPassword($password) {
		WebPageSettings_SetPassword($this->_cPtr,$password);
	}

	function SetJavaScriptDelay($msec) {
		WebPageSettings_SetJavaScriptDelay($this->_cPtr,$msec);
	}

	function SetZoom($zoom) {
		WebPageSettings_SetZoom($this->_cPtr,$zoom);
	}

	function SetBlockLocalFileAccess($block) {
		WebPageSettings_SetBlockLocalFileAccess($this->_cPtr,$block);
	}

	function SetStopSlowScripts($stop) {
		WebPageSettings_SetStopSlowScripts($this->_cPtr,$stop);
	}

	function SetDebugJavaScriptOutput($forward) {
		WebPageSettings_SetDebugJavaScriptOutput($this->_cPtr,$forward);
	}

	const e_abort = 0;

	const e_skip = WebPageSettings_e_skip;

	const e_ignore = WebPageSettings_e_ignore;

	function SetLoadErrorHandling($type) {
		WebPageSettings_SetLoadErrorHandling($this->_cPtr,$type);
	}

	function SetExternalLinks($convert) {
		WebPageSettings_SetExternalLinks($this->_cPtr,$convert);
	}

	function SetInternalLinks($convert) {
		WebPageSettings_SetInternalLinks($this->_cPtr,$convert);
	}

	function SetProduceForms($forms) {
		WebPageSettings_SetProduceForms($this->_cPtr,$forms);
	}

	function SetProxy($proxy) {
		WebPageSettings_SetProxy($this->_cPtr,$proxy);
	}

	function Destroy() {
		WebPageSettings_Destroy($this->_cPtr);
	}
}

class TOCSettings {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return TOCSettings_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return TOCSettings_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TOCSettings_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TOCSettings') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TOCSettings();
	}

	function SetDottedLines($enable) {
		TOCSettings_SetDottedLines($this->_cPtr,$enable);
	}

	function SetLinks($enable) {
		TOCSettings_SetLinks($this->_cPtr,$enable);
	}

	function SetCaptionText($caption) {
		TOCSettings_SetCaptionText($this->_cPtr,$caption);
	}

	function SetLevelIndentation($indentation) {
		TOCSettings_SetLevelIndentation($this->_cPtr,$indentation);
	}

	function SetTextSizeShrink($shrink) {
		TOCSettings_SetTextSizeShrink($this->_cPtr,$shrink);
	}

	function SetXsl($style_sheet) {
		TOCSettings_SetXsl($this->_cPtr,$style_sheet);
	}

	function Destroy() {
		TOCSettings_Destroy($this->_cPtr);
	}
}

class Stamper {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_impl') return Stamper_mp_impl_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_impl') return Stamper_mp_impl_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Stamper_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	const e_relative_scale = 1;

	const e_absolute_size = 2;

	const e_font_size = 3;

	const e_horizontal_left = -1;

	const e_horizontal_center = 0;

	const e_horizontal_right = 1;

	const e_vertical_bottom = -1;

	const e_vertical_center = 0;

	const e_vertical_top = 1;

	const e_align_left = -1;

	const e_align_center = 0;

	const e_align_right = 1;

	function StampImage($dest_doc,$src_img,$dest_pages) {
		Stamper_StampImage($this->_cPtr,$dest_doc,$src_img,$dest_pages);
	}

	function StampPage($dest_doc,$src_page,$dest_pages) {
		Stamper_StampPage($this->_cPtr,$dest_doc,$src_page,$dest_pages);
	}

	function StampText($dest_doc,$src_txt,$dest_pages) {
		Stamper_StampText($this->_cPtr,$dest_doc,$src_txt,$dest_pages);
	}

	function SetFont($font) {
		Stamper_SetFont($this->_cPtr,$font);
	}

	function SetFontColor($color) {
		Stamper_SetFontColor($this->_cPtr,$color);
	}

	function SetOpacity($opacity) {
		Stamper_SetOpacity($this->_cPtr,$opacity);
	}

	function SetRotation($rotation) {
		Stamper_SetRotation($this->_cPtr,$rotation);
	}

	function SetAsBackground($background) {
		Stamper_SetAsBackground($this->_cPtr,$background);
	}

	function SetAsAnnotation($annotation) {
		Stamper_SetAsAnnotation($this->_cPtr,$annotation);
	}

	function ShowsOnScreen($on_screen) {
		Stamper_ShowsOnScreen($this->_cPtr,$on_screen);
	}

	function ShowsOnPrint($on_print) {
		Stamper_ShowsOnPrint($this->_cPtr,$on_print);
	}

	function SetPosition($horizontal_distance,$vertical_distance,$use_percentage=false) {
		Stamper_SetPosition($this->_cPtr,$horizontal_distance,$vertical_distance,$use_percentage);
	}

	function SetAlignment($horizontal_alignment,$vertical_alignment) {
		Stamper_SetAlignment($this->_cPtr,$horizontal_alignment,$vertical_alignment);
	}

	function SetTextAlignment($text_alignment) {
		Stamper_SetTextAlignment($this->_cPtr,$text_alignment);
	}

	function SetSize($size_type,$a,$b) {
		Stamper_SetSize($this->_cPtr,$size_type,$a,$b);
	}

	static function DeleteStamps($doc,$page_set) {
		Stamper_DeleteStamps($doc,$page_set);
	}

	static function HasStamps($doc,$page_set) {
		return Stamper_HasStamps($doc,$page_set);
	}

	function Destroy() {
		Stamper_Destroy($this->_cPtr);
	}

	function __construct($size_type_or_impl,$a=null,$b=null) {
		if (is_resource($size_type_or_impl) && get_resource_type($size_type_or_impl) === '_p_pdftron__PDF__Stamper') {
			$this->_cPtr=$size_type_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 1: $this->_cPtr=new_Stamper($size_type_or_impl); break;
		case 2: $this->_cPtr=new_Stamper($size_type_or_impl,$a); break;
		default: $this->_cPtr=new_Stamper($size_type_or_impl,$a,$b);
		}
	}
}

class CharRange {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'index') return CharRange_index_set($this->_cPtr,$value);
		if ($var === 'length') return CharRange_length_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'index') return CharRange_index_get($this->_cPtr);
		if ($var === 'length') return CharRange_length_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('CharRange_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__CharRange') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CharRange();
	}
}

class TextExtractor {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TextExtractor') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TextExtractor();
	}

	const e_no_ligature_exp = 1;

	const e_no_dup_remove = 2;

	const e_punct_break = 4;

	const e_remove_hidden_text = 8;

	const e_no_invisible_text = 16;

	const e_no_watermarks = 128;

	const e_extract_using_zorder = 256;

	function Begin($page,$clip_ptr=null,$flags=0) {
		TextExtractor_Begin($this->_cPtr,$page,$clip_ptr,$flags);
	}

	function SetOCGContext($ctx) {
		TextExtractor_SetOCGContext($this->_cPtr,$ctx);
	}

	function GetWordCount() {
		return TextExtractor_GetWordCount($this->_cPtr);
	}

	function SetRightToLeftLanguage($rtl) {
		TextExtractor_SetRightToLeftLanguage($this->_cPtr,$rtl);
	}

	function GetRightToLeftLanguage() {
		return TextExtractor_GetRightToLeftLanguage($this->_cPtr);
	}

	function GetAsText($dehyphen=true) {
		return TextExtractor_GetAsText($this->_cPtr,$dehyphen);
	}

	function GetTextUnderAnnot($annot) {
		return TextExtractor_GetTextUnderAnnot($this->_cPtr,$annot);
	}

	const e_words_as_elements = 1;

	const e_output_bbox = 2;

	const e_output_style_info = 4;

	function GetAsXML($xml_output_flags=0) {
		return TextExtractor_GetAsXML($this->_cPtr,$xml_output_flags);
	}

	function GetHighlights($char_ranges) {
		$r=TextExtractor_GetHighlights($this->_cPtr,$char_ranges);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Highlights($r);
		}
		return $r;
	}

	function GetNumLines() {
		return TextExtractor_GetNumLines($this->_cPtr);
	}

	function GetFirstLine() {
		$r=TextExtractor_GetFirstLine($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Line($r);
		}
		return $r;
	}

	function Destroy() {
		TextExtractor_Destroy($this->_cPtr);
	}
}

class Style {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_style') return Style_mp_style_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_style') return Style_mp_style_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Style_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetFont() {
		$r=Style_GetFont($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Obj($r);
		}
		return $r;
	}

	function GetFontName() {
		return Style_GetFontName($this->_cPtr);
	}

	function GetFontSize() {
		return Style_GetFontSize($this->_cPtr);
	}

	function GetWeight() {
		return Style_GetWeight($this->_cPtr);
	}

	function IsItalic() {
		return Style_IsItalic($this->_cPtr);
	}

	function IsSerif() {
		return Style_IsSerif($this->_cPtr);
	}

	function GetColor() {
		$r=Style_GetColor($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorInt($r);
		}
		return $r;
	}

	function IsEqual($s) {
		return Style_IsEqual($this->_cPtr,$s);
	}

	function __construct($s_or_impl=null) {
		if (is_resource($s_or_impl) && get_resource_type($s_or_impl) === '_p_pdftron__PDF__Style') {
			$this->_cPtr=$s_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Style(); break;
		default: $this->_cPtr=new_Style($s_or_impl);
		}
	}
}

class Word {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_word') return Word_mp_word_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_word') return Word_mp_word_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Word_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetNumGlyphs() {
		return Word_GetNumGlyphs($this->_cPtr);
	}

	function GetBBox() {
		$r=Word_GetBBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetQuad() {
		$r=Word_GetQuad($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetGlyphQuad($glyph_idx) {
		$r=Word_GetGlyphQuad($this->_cPtr,$glyph_idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetCharStyle($char_idx) {
		$r=Word_GetCharStyle($this->_cPtr,$char_idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Style($r);
		}
		return $r;
	}

	function GetStyle() {
		$r=Word_GetStyle($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Style($r);
		}
		return $r;
	}

	function GetStringLen() {
		return Word_GetStringLen($this->_cPtr);
	}

	function GetString() {
		return Word_GetString($this->_cPtr);
	}

	function GetNextWord() {
		$r=Word_GetNextWord($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Word($r);
		}
		return $r;
	}

	function GetCurrentNum() {
		return Word_GetCurrentNum($this->_cPtr);
	}

	function IsValid() {
		return Word_IsValid($this->_cPtr);
	}

	function IsEqual($arg1) {
		return Word_IsEqual($this->_cPtr,$arg1);
	}

	function __construct($impl=null) {
		if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Word') {
			$this->_cPtr=$impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Word(); break;
		default: $this->_cPtr=new_Word($impl);
		}
	}
}

class Line {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_line') return Line_mp_line_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_line') return Line_mp_line_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Line_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function GetNumWords() {
		return Line_GetNumWords($this->_cPtr);
	}

	function IsSimpleLine() {
		return Line_IsSimpleLine($this->_cPtr);
	}

	function GetBBox() {
		$r=Line_GetBBox($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Rect($r);
		}
		return $r;
	}

	function GetQuad() {
		$r=Line_GetQuad($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new VectorDouble($r);
		}
		return $r;
	}

	function GetFirstWord() {
		$r=Line_GetFirstWord($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Word($r);
		}
		return $r;
	}

	function GetWord($word_idx) {
		$r=Line_GetWord($this->_cPtr,$word_idx);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Word($r);
		}
		return $r;
	}

	function GetNextLine() {
		$r=Line_GetNextLine($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Line($r);
		}
		return $r;
	}

	function GetCurrentNum() {
		return Line_GetCurrentNum($this->_cPtr);
	}

	function GetStyle() {
		$r=Line_GetStyle($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Style($r);
		}
		return $r;
	}

	function GetParagraphID() {
		return Line_GetParagraphID($this->_cPtr);
	}

	function GetFlowID() {
		return Line_GetFlowID($this->_cPtr);
	}

	function EndsWithHyphen() {
		return Line_EndsWithHyphen($this->_cPtr);
	}

	function IsValid() {
		return Line_IsValid($this->_cPtr);
	}

	function IsEqual($arg1) {
		return Line_IsEqual($this->_cPtr,$arg1);
	}

	function __construct($impl=null) {
		if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Line') {
			$this->_cPtr=$impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Line(); break;
		default: $this->_cPtr=new_Line($impl);
		}
	}
}

class SearchResult {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function IsFound() {
		return SearchResult_IsFound($this->_cPtr);
	}

	function IsDocEnd() {
		return SearchResult_IsDocEnd($this->_cPtr);
	}

	function IsPageEnd() {
		return SearchResult_IsPageEnd($this->_cPtr);
	}

	function GetPageNumber() {
		return SearchResult_GetPageNumber($this->_cPtr);
	}

	function GetMatch() {
		return SearchResult_GetMatch($this->_cPtr);
	}

	function GetAmbientString() {
		return SearchResult_GetAmbientString($this->_cPtr);
	}

	function GetHighlights() {
		$r=SearchResult_GetHighlights($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Highlights($r);
		}
		return $r;
	}

	function __construct($b=null,$rc=null,$r_=null,$a=null,$h=null) {
		if (is_resource($b) && get_resource_type($b) === '_p_pdftron__PDF__SearchResult') {
			$this->_cPtr=$b;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_SearchResult(); break;
		case 1: $this->_cPtr=new_SearchResult($b); break;
		case 2: $this->_cPtr=new_SearchResult($b,$rc); break;
		case 3: $this->_cPtr=new_SearchResult($b,$rc,$r_); break;
		case 4: $this->_cPtr=new_SearchResult($b,$rc,$r_,$a); break;
		default: $this->_cPtr=new_SearchResult($b,$rc,$r_,$a,$h);
		}
	}
}

class TextSearch {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_textsearch') return TextSearch_mp_textsearch_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_textsearch') return TextSearch_mp_textsearch_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('TextSearch_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TextSearch') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TextSearch();
	}

	const e_reg_expression = TextSearch_e_reg_expression;

	const e_case_sensitive = TextSearch_e_case_sensitive;

	const e_whole_word = TextSearch_e_whole_word;

	const e_search_up = TextSearch_e_search_up;

	const e_page_stop = TextSearch_e_page_stop;

	const e_highlight = TextSearch_e_highlight;

	const e_ambient_string = TextSearch_e_ambient_string;

	const e_raw_text_search = TextSearch_e_raw_text_search;

	const e_search_using_zorder = TextSearch_e_search_using_zorder;

	function Begin($doc,$pattern,$mode,$start_page=-1,$end_page=-1) {
		return TextSearch_Begin($this->_cPtr,$doc,$pattern,$mode,$start_page,$end_page);
	}

	function Run() {
		$r=TextSearch_Run($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SearchResult($r);
		}
		return $r;
	}

	function SetPattern($pattern) {
		return TextSearch_SetPattern($this->_cPtr,$pattern);
	}

	function GetMode() {
		return TextSearch_GetMode($this->_cPtr);
	}

	function SetMode($mode) {
		TextSearch_SetMode($this->_cPtr,$mode);
	}

	function SetRightToLeftLanguage($flag) {
		TextSearch_SetRightToLeftLanguage($this->_cPtr,$flag);
	}

	function GetCurrentPage() {
		return TextSearch_GetCurrentPage($this->_cPtr);
	}

	function SetOCGContext($context) {
		TextSearch_SetOCGContext($this->_cPtr,$context);
	}

	function Destroy() {
		TextSearch_Destroy($this->_cPtr);
	}
}

class Redactor {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	static function Redact($doc,$red_arr,$app=null,$ext_neg_mode=null,$page_coord_sys=null) {
		switch (func_num_args()) {
		case 2: Redactor_Redact($doc,$red_arr); break;
		case 3: Redactor_Redact($doc,$red_arr,$app); break;
		case 4: Redactor_Redact($doc,$red_arr,$app,$ext_neg_mode); break;
		default: Redactor_Redact($doc,$red_arr,$app,$ext_neg_mode,$page_coord_sys);
		}
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Redactor') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Redactor();
	}
}

class Redaction {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'mp_imp') return Redaction_mp_imp_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'mp_imp') return Redaction_mp_imp_get($this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Redaction_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function Destroy() {
		Redaction_Destroy($this->_cPtr);
	}

	function __construct($page_num_or_other_or_impl=null,$bbox=null,$negative=null,$text=null) {
		if (is_resource($page_num_or_other_or_impl) && get_resource_type($page_num_or_other_or_impl) === '_p_pdftron__PDF__Redaction') {
			$this->_cPtr=$page_num_or_other_or_impl;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Redaction(); break;
		case 1: $this->_cPtr=new_Redaction($page_num_or_other_or_impl); break;
		case 2: $this->_cPtr=new_Redaction($page_num_or_other_or_impl,$bbox); break;
		case 3: $this->_cPtr=new_Redaction($page_num_or_other_or_impl,$bbox,$negative); break;
		default: $this->_cPtr=new_Redaction($page_num_or_other_or_impl,$bbox,$negative,$text);
		}
	}
}

class Appearance {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'Appearance_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'TextFont') return new Font(Appearance_TextFont_get($this->_cPtr));
		if ($var === 'TextColor') return new ColorPt(Appearance_TextColor_get($this->_cPtr));
		if ($var === 'RedactedContentColor') return new ColorPt(Appearance_RedactedContentColor_get($this->_cPtr));
		if ($var === 'PositiveOverlayColor') return new ColorPt(Appearance_PositiveOverlayColor_get($this->_cPtr));
		if ($var === 'NegativeOverlayColor') return new ColorPt(Appearance_NegativeOverlayColor_get($this->_cPtr));
		$func = 'Appearance_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('Appearance_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Appearance') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Appearance();
	}
}

PDFNet::Initialize("demo:1632324626160:78c127af030000000051208472fc3e77c54236d909e877ad77db1a77d0");       // PDFNet must be initialized before accessing any PDFTron API
    //$doc = new PDFDoc();
    //$page = $doc->PageCreate(); // Start a new page
    //$doc->PagePushBack($page); // Add the page to document
    //$doc->Save("output.pdf", SDFDoc::e_linearized); // Save the document as a linearized PDF
    echo nl2br("Hello World!\n");

?>
