<?php
/**
 * [WeEngine System] Copyright (c) 2014 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.we7.cc/ for more details.
 */
namespace We7\Table\Site;

class Styles extends \We7Table {
	protected $tableName = 'site_styles';
	protected $primaryKey = 'id';
	protected $field = array(
		'uniacid',
		'templateid',
		'name',
	);
	protected $default = array(
		'uniacid' => '',
		'templateid' => '',
		'name' => '',
	);

	public function getById($id) {
		global $_W;
		return $this->query->where('id', $id)->where('uniacid', $_W['uniacid'])->get();
	}

	public function searchWithTemplates() {
		return $this->query->from('site_styles', 'a')->select('a.*')->leftjoin('site_templates', 'b')->on(array('a.templateid' => 'b.id'));
	}

}