<?php
/**
 * 清空缓存
 */
function sp_clear_cache(){
		$dirs = array ();
		// runtime/
		$rootdirs = sp_scan_dir( RUNTIME_PATH."*" );
		//$noneed_clear=array(".","..","Data");
		$noneed_clear=array(".","..");
		$rootdirs=array_diff($rootdirs, $noneed_clear);
		foreach ( $rootdirs as $dir ) {
			
			if ($dir != "." && $dir != "..") {
				$dir = RUNTIME_PATH . $dir;
				if (is_dir ( $dir )) {
					//array_push ( $dirs, $dir );
					$tmprootdirs = sp_scan_dir ( $dir."/*" );
					foreach ( $tmprootdirs as $tdir ) {
						if ($tdir != "." && $tdir != "..") {
							$tdir = $dir . '/' . $tdir;
							if (is_dir ( $tdir )) {
								array_push ( $dirs, $tdir );
							}else{
								@unlink($tdir);
							}
						}
					}
				}else{
					@unlink($dir);
				}
			}
		}
		$dirtool=new \Think\Dir("");
		foreach ( $dirs as $dir ) {
			$dirtool->delDir ( $dir );
		}
		
}
/**
 * 替代scan_dir的方法
 * @param string $pattern 检索模式 搜索模式 *.txt,*.doc; (同glog方法)
 * @param int $flags
 */
function sp_scan_dir($pattern,$flags=null){
	$files = array_map('basename',glob($pattern, $flags));
	return $files;
}
/**
 * 递归重组节点信息
 */
function node_merge($node,$pid=0){
	$arr=array();
	foreach ($node as $v) {
		if($v['pid']==$pid){
			$v['child']=node_merge($node,$v['id']);
			$arr[]=$v;
		}
	}
	return $arr;
}
/**
 * 递归重组节点信息
 */
function node_merges($node,$access=null,$pid=0){
	$arr=array();
	foreach ($node as $v) {
	   if(is_array($node)){
	   		$v['access']=in_array($v['id'], $access)?1:0;
		}
		if($v['pid']==$pid){
			$v['child']=node_merges($node,$access,$v['id']);

			$arr[]=$v;
		}
	}
	return $arr;
}

?>