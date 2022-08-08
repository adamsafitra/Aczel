<?php
	$config['base_url'] = 'http://localhost/chat';
	base_url('./');
	
	$spdf = "paya";

	if (isset($_POST['nama'])) {
		$spdf = "Success";
	}

	echo ($spdf);

	$arrayName = array('paya' => 'tua', 'kadal' => 'menggila');
	basename(path);
	base64_encode(data);
	base64_decode(data);
	base_convert(number, frombase, tobase);
	bson_decode(bson);
	bson_encode(anything);
	get_browser();

	function __construct($foo = null){
		$this->foo = $foo;
	}
	/**
	case 'variable':
		# code...
		break;

		/**
		 * 
		 */
	class ClassName extends AnotherClass{
		function __construct(argument){
			# code...
		}
	}

	chdir(directory);
	checkdate(month, day, year);
	constant(name);
	copy(source, dest);

	do {
		# code...
	} while ( <= 10);

	define('', '');
	defined('');
	date(format);
	dcgettext(domain, message, category);
	define(name, value);
	die();
	dirname(path);
	
	/**
	 * undocumented class variable
	 *
	 * @var string
	 **/
	var $;

	/**
	 * undocumented class
	 *
	 * @package default
	 * @author 
	 **/
	class {
	} // END class 

	/**
	 * undocumented constant
	 **/
	define(, );

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	function (){

	}

	date_add();
	date_create();
	date_diff();
	date_format();
	date_modify();
	date_parse(date);
	date_interval_format();
	date_time_set();
	date_timezone_get();
	date_timestamp_get();
	date_create_from_format();
	http_date();
	http_post_data(url, data);
	http_date();
	http_get(http);
	http_redirect();
	http_request(method, url);
	http_build_cookie(cookie);
	http_build_query(query_data);
	http_post_data(url, data);
	http_put_data(url, data);
	http_put_file(url, file);
	http_put_stream(url, stream);
	http_response_code(code);
	http_send_data(data);
	http_send_status(status);
	echo "string";

	elseif (condition) {
		# code...
	}

	each(array);
	echo(arg1);
	empty(var);
	end(array);

	for ($i=0; $i < ; $i++) { 
		# code...
	}

	public function FunctionName($value=''){
		# code...
	}

	foreach ($variable as $key => $value) {
		# code...
	}

	fclose(handle);
	ftp_connect(host);
	$GLOBALS['variable'] = something;
	getallheaders();
	getdate();
	gethostbyaddr(ip_address);
	gethostbyname(hostname);
	gethostbynamel(hostname);
	gethostname();
	getimagesize(filename);
	gettext(message);
	hash(algo, data);
	header(string);
	hebrev(hebrew_text);
	hebrevc(hebrew_text);
	hexdec(hex_string);
	htmlentities(string);
	htmlspecialchars(string);

	if (condition) {
		# code...
	}

	$retVal = (condition) ? a : b ;
	
	include 'file';
	include_once 'file';
	
	if (condition) {
		# code...
	} else {
		# code...
	}
	
	iconv(in_charset, out_charset, str);
	idate(format);
	json_decode(json);
	json_encode(value);
	key(array);
	link(target, link);
	linkinfo(path);
	list(varname);
	localeconv();
	localtime();
	log(arg);
	md5(str);
	md5_file(filename);
	next(array);
	pack(format);
	passthru(command);
	phpcredits();
	phpinfo();
	phpversion();
	pi();
	require 'file';
	return;
	require_once 'file';
	return false;
	return true;
	rad2deg(number);
	rawurlencode(str);
	rawurldecode(str);
	readdir();
	readfile(filename);
	readlink(path);
	realpath(path);
	rename(oldname, newname);
	rmdir(dirname);

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
	
	scandir(directory);
	serialize(value);
	setcookie(name);
	setlocale(category, locale);
	setrawcookie(name);
	sha1(str);

	try {
		
	} catch (Exception $e) {
		
	}

	throw new Exception("Error Processing Request", 1);
	
	time();
	tmpfile();
	unlink(filename);
	unset(var);
	urldecode(str);
	urlencode(str);
	utf8_encode(data);
	utf8_decode(data);
	vfprintf(handle, format, args);
	virtual(filename);
	password_verify(password, hash);
	
	while ( <= 10) {
			# code...
	}
	
	xmlrpc_encode(value);
	xmlrpc_decode(xml);
	zip_open(filename);
	zip_read(zip);
	zip_close(zip);
	zip_entry_compressedsize(zip_entry);
	zip_entry_compressionmethod(zip_entry);
	zip_entry_filesize(zip_entry);
	zip_entry_name(zip_entry);
	zip_entry_open(zip, zip_entry);

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<form method="post" name="oo" id="pp">
			nama : <input type="text" name="nama" id="aa"> 
			<br/>
			alamat : <input type="text" name="alamat" id="bb">
			</br/>
			password : <input type="password" name="pass" id="cc">
			<br/>
			Jenis Kelamin :
			<input type="radio" name="jk" value="laki-laki" id="dd" /> Laki - Laki
			<input type="radio" name="jk" value="perempuan" id="ee" /> Perempuan
			<br/>
			bahas pemograman yang dikuasai :
			<input type="checkbox" name="web" id="ff"> Web
			<input type="checkbox" name="mobile" id="gg"> MOBILE
			<input type="checkbox" name="desk" id="hh"> DESKTOP
			<br/>
			kota asal :
			<select name="daerah" id="ii">
				<option id="jj">Semarang</option>
				<option id="kk">Bandung</option>
			</select>
			<br/>
			pesan anda :
			<textarea name="ll"></textarea>
			<br/>
			<input type="submit" value="proses" name="mm" id="nn">
			</form>
	</body>
</html>