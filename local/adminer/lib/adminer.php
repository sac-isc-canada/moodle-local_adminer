<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.4.0-dev
*/error_reporting(6135);$hc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($hc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$Zf=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($Zf)$$W=$Zf;}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}a.text{text-decoration:none;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}.CodeMirror{border:1px inset #777;}.CodeMirror .error{background:#fee;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
/** Toggle visibility
* @param string
* @return boolean
*/
function toggle(id) {
	var el = document.getElementById(id);
	el.className = (el.className == 'hidden' ? '' : 'hidden');
	return true;
}

/** Set permanent cookie
* @param string
* @param number
* @param string optional
*/
function cookie(assign, days) {
	var date = new Date();
	date.setDate(date.getDate() + days);
	document.cookie = assign + '; expires=' + date;
}

/** Verify current Adminer version
*/
function verifyVersion() {
	cookie('adminer_version=0', 1);
	var script = document.createElement('script');
	script.src = location.protocol + '//www.adminer.org/version.php';
	document.body.appendChild(script);
}

/** Get value of select
* @param HTMLSelectElement
* @return string
*/
function selectValue(select) {
	var selected = select.options[select.selectedIndex];
	return ((selected.attributes.value || {}).specified ? selected.value : selected.text);
}

/** Set checked class
* @param HTMLInputElement
*/
function trCheck(el) {
	var tr = el.parentNode.parentNode;
	tr.className = tr.className.replace(/(^|\s)checked(\s|$)/, '$2') + (el.checked ? ' checked' : '');
}

/** Check all elements matching given name
* @param HTMLInputElement
* @param RegExp
*/
function formCheck(el, name) {
	var elems = el.form.elements;
	for (var i=0; i < elems.length; i++) {
		if (name.test(elems[i].name)) {
			elems[i].checked = el.checked;
			trCheck(elems[i]);
		}
	}
}

/** Check all rows in <table class="checkable">
*/
function tableCheck() {
	var tables = document.getElementsByTagName('table');
	for (var i=0; i < tables.length; i++) {
		if (/(^|\s)checkable(\s|$)/.test(tables[i].className)) {
			var trs = tables[i].getElementsByTagName('tr');
			for (var j=0; j < trs.length; j++) {
				trCheck(trs[j].firstChild.firstChild);
			}
		}
	}
}

/** Uncheck single element
* @param string
*/
function formUncheck(id) {
	var el = document.getElementById(id);
	el.checked = false;
	trCheck(el);
}

/** Get number of checked elements matching given name
* @param HTMLInputElement
* @param RegExp
* @return number
*/
function formChecked(el, name) {
	var checked = 0;
	var elems = el.form.elements;
	for (var i=0; i < elems.length; i++) {
		if (name.test(elems[i].name) && elems[i].checked) {
			checked++;
		}
	}
	return checked;
}

/** Select clicked row
* @param MouseEvent
*/
function tableClick(event) {
	var click = (!window.getSelection || getSelection().isCollapsed);
	var el = event.target || event.srcElement;
	while (!/^tr$/i.test(el.tagName)) {
		if (/^table$/i.test(el.tagName)) {
			return;
		}
		if (/^(a|input|textarea)$/i.test(el.tagName)) {
			click = false;
		}
		el = el.parentNode;
	}
	el = el.firstChild.firstChild;
	if (click) {
		el.click && el.click();
		el.onclick && el.onclick();
	}
	trCheck(el);
}

/** Set HTML code of an element
* @param string
* @param string undefined to set parentNode to &nbsp;
*/
function setHtml(id, html) {
	var el = document.getElementById(id);
	if (el) {
		if (html == undefined) {
			el.parentNode.innerHTML = '&nbsp;';
		} else {
			el.innerHTML = html;
		}
	}
}

/** Find node position
* @param Node
* @return number
*/
function nodePosition(el) {
	var pos = 0;
	while (el = el.previousSibling) {
		pos++;
	}
	return pos;
}

/** Go to the specified page
* @param string
* @param string
* @param [MouseEvent]
*/
function pageClick(href, page, event) {
	if (!isNaN(page) && page) {
		href += (page != 1 ? '&page=' + (page - 1) : '');
		location.href = href;
	}
}



/** Add row in select fieldset
* @param HTMLSelectElement
*/
function selectAddRow(field) {
	field.onchange = function () {
		selectFieldChange(field.form);
	};
	field.onchange();
	var row = field.parentNode.cloneNode(true);
	var selects = row.getElementsByTagName('select');
	for (var i=0; i < selects.length; i++) {
		selects[i].name = selects[i].name.replace(/[a-z]\[\d+/, '$&1');
		selects[i].selectedIndex = 0;
	}
	var inputs = row.getElementsByTagName('input');
	if (inputs.length) {
		inputs[0].name = inputs[0].name.replace(/[a-z]\[\d+/, '$&1');
		inputs[0].value = '';
		inputs[0].className = '';
	}
	field.parentNode.parentNode.appendChild(row);
}

/** Check whether the query will be executed with index
* @param HTMLFormElement
*/
function selectFieldChange(form) {
	var ok = (function () {
		var inputs = form.getElementsByTagName('input');
		for (var i=0; i < inputs.length; i++) {
			var input = inputs[i];
			if (/^fulltext/.test(input.name) && input.value) {
				return true;
			}
		}
		var ok = true;
		var selects = form.getElementsByTagName('select');
		for (var i=0; i < selects.length; i++) {
			var select = selects[i];
			var col = selectValue(select);
			var match = /^(where.+)col\]/.exec(select.name);
			if (match) {
				var op = selectValue(form[match[1] + 'op]']);
				var val = form[match[1] + 'val]'].value;
				if (col in indexColumns && (!/LIKE|REGEXP/.test(op) || (op == 'LIKE' && val.charAt(0) != '%'))) {
					return true;
				} else if (col || val) {
					ok = false;
				}
			}
			if (col && /^order/.test(select.name)) {
				if (!(col in indexColumns)) {
					 ok = false;
				}
				break;
			}
		}
		return ok;
	})();
	setHtml('noindex', (ok ? '' : '!'));
}



/** Send form by Ctrl+Enter on <select> and <textarea>
* @param KeyboardEvent
* @param [string]
* @return boolean
*/
function bodyKeydown(event, button) {
	var target = event.target || event.srcElement;
	if (event.ctrlKey && (event.keyCode == 13 || event.keyCode == 10) && !event.altKey && !event.metaKey && /select|textarea|input/i.test(target.tagName)) { // 13|10 - Enter, shiftKey allowed
		target.blur();
		if (button) {
			target.form[button].click();
		} else {
			target.form.submit();
		}
		return false;
	}
	return true;
}



/** Change focus by Ctrl+Up or Ctrl+Down
* @param KeyboardEvent
* @return boolean
*/
function editingKeydown(event) {
	if ((event.keyCode == 40 || event.keyCode == 38) && event.ctrlKey && !event.altKey && !event.metaKey) { // 40 - Down, 38 - Up, shiftKey allowed
		var target = event.target || event.srcElement;
		var sibling = (event.keyCode == 40 ? 'nextSibling' : 'previousSibling');
		var el = target.parentNode.parentNode[sibling];
		if (el && (/^tr$/i.test(el.tagName) || (el = el[sibling])) && /^tr$/i.test(el.tagName) && (el = el.childNodes[nodePosition(target.parentNode)]) && (el = el.childNodes[nodePosition(target)])) {
			el.focus();
		}
		return false;
	}
	if (event.shiftKey && !bodyKeydown(event, 'insert')) {
		eventStop(event);
		return false;
	}
	return true;
}

/** Disable maxlength for functions
* @param HTMLSelectElement
*/
function functionChange(select) {
	var input = select.form[select.name.replace(/^function/, 'fields')];
	if (selectValue(select)) {
		if (input.origMaxLength === undefined) {
			input.origMaxLength = input.maxLength;
		}
		input.removeAttribute('maxlength');
	} else if (input.origMaxLength >= 0) {
		input.maxLength = input.origMaxLength;
	}
}



/** Create AJAX request
* @param string
* @param function (XMLHttpRequest)
* @param [string]
* @return XMLHttpRequest or false in case of an error
*/
function ajax(url, callback, data) {
	var request = (window.XMLHttpRequest ? new XMLHttpRequest() : (window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : false));
	if (request) {
		request.open((data ? 'POST' : 'GET'), url);
		if (data) {
			request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		}
		request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		request.onreadystatechange = function () {
			if (request.readyState == 4) {
				callback(request);
			}
		};
		request.send(data);
	}
	return request;
}

/** Use setHtml(key, value) for JSON response
* @param string
* @return XMLHttpRequest or false in case of an error
*/
function ajaxSetHtml(url) {
	return ajax(url, function (request) {
		if (request.status) {
			var data = eval('(' + request.responseText + ')');
			for (var key in data) {
				setHtml(key, data[key]);
			}
		}
	});
}



/** Display edit field
* @param HTMLElement
* @param MouseEvent
* @param number display textarea instead of input, 2 - load long text
*/
function selectDblClick(td, event, text) {
	if (/input|textarea/i.test(td.firstChild.tagName)) {
		return;
	}
	var original = td.innerHTML;
	var input = document.createElement(text ? 'textarea' : 'input');
	input.onkeydown = function (event) {
		if (!event) {
			event = window.event;
		}
		if (event.keyCode == 27 && !(event.ctrlKey || event.shiftKey || event.altKey || event.metaKey)) { // 27 - Esc
			td.innerHTML = original;
		}
	};
	var pos = event.rangeOffset;
	var value = td.firstChild.alt || td.textContent || td.innerText;
	input.style.width = Math.max(td.clientWidth - 14, 20) + 'px'; // 14 = 2 * (td.border + td.padding + input.border)
	if (text) {
		var rows = 1;
		value.replace(/\n/g, function () {
			rows++;
		});
		input.rows = rows;
	}
	if (value == '\u00A0' || td.getElementsByTagName('i').length) { // &nbsp; or i - NULL
		value = '';
	}
	if (document.selection) {
		var range = document.selection.createRange();
		range.moveToPoint(event.clientX, event.clientY);
		var range2 = range.duplicate();
		range2.moveToElementText(td);
		range2.setEndPoint('EndToEnd', range);
		pos = range2.text.length;
	}
	td.innerHTML = '';
	td.appendChild(input);
	input.focus();
	if (text == 2) { // long text
		return ajax(location.href + '&' + encodeURIComponent(td.id) + '=', function (request) {
			if (request.status) {
				input.value = request.responseText;
				input.name = td.id;
			}
		});
	}
	input.value = value;
	input.name = td.id;
	input.selectionStart = pos;
	input.selectionEnd = pos;
	if (document.selection) {
		var range = document.selection.createRange();
		range.moveEnd('character', -input.value.length + pos);
		range.select();
	}
}



/** Stop event propagation
* @param Event
*/
function eventStop(event) {
	if (event.stopPropagation) {
		event.stopPropagation();
	} else {
		event.cancelBubble = true;
	}
}
// Adminer specific functions

var jushRoot = location.protocol + '//www.adminer.org/static/'; // global variable to allow simple customization

/** Load syntax highlighting
* @param string first three characters of database system version
*/
function bodyLoad(version) {
	if (jushRoot) {
		var script = document.createElement('script');
		script.src = jushRoot + 'jush.js';
		script.onload = function () {
			if (window.jush) { // IE runs in case of an error too
				jush.create_links = ' target="_blank" rel="noreferrer"';
				jush.urls.sql_sqlset = jush.urls.sql[0] = jush.urls.sqlset[0] = jush.urls.sqlstatus[0] = 'http://dev.mysql.com/doc/refman/' + version + '/en/$key';
				var pgsql = 'http://www.postgresql.org/docs/' + version + '/static/';
				jush.urls.pgsql_pgsqlset = jush.urls.pgsql[0] = pgsql + '$key';
				jush.urls.pgsqlset[0] = pgsql + 'runtime-config-$key.html#GUC-$1';
				jush.style(jushRoot + 'jush.css');
				if (window.jushLinks) {
					jush.custom_links = jushLinks;
				}
				jush.highlight_tag('code', 0);
			}
		};
		script.onreadystatechange = function () {
			if (/^(loaded|complete)$/.test(script.readyState)) {
				script.onload();
			}
		};
		document.body.appendChild(script);
	}
}

/** Get value of dynamically created form field
* @param HTMLFormElement
* @param string
* @return HTMLElement
*/
function formField(form, name) {
	// required in IE < 8, form.elements[name] doesn't work
	for (var i=0; i < form.length; i++) {
		if (form[i].name == name) {
			return form[i];
		}
	}
}

/** Try to change input type to password or to text
* @param HTMLInputElement
* @param boolean
*/
function typePassword(el, disable) {
	try {
		el.type = (disable ? 'text' : 'password');
	} catch (e) {
	}
}

function loginDriver(driver) {
	var trs = driver.parentNode.parentNode.parentNode.rows;
	for (var i=1; i < trs.length - 1; i++) {
		trs[i].className = (/sqlite/.test(driver.value) ? 'hidden' : '');
	}
}



/** Handle Tab and Esc in textarea
* @param HTMLTextAreaElement
* @param KeyboardEvent
* @return boolean
*/
function textareaKeydown(target, event) {
	if (!event.shiftKey && !event.altKey && !event.ctrlKey && !event.metaKey) {
		if (event.keyCode == 9) { // 9 - Tab
			// inspired by http://pallieter.org/Projects/insertTab/
			if (target.setSelectionRange) {
				var start = target.selectionStart;
				var scrolled = target.scrollTop;
				target.value = target.value.substr(0, start) + '\t' + target.value.substr(target.selectionEnd);
				target.setSelectionRange(start + 1, start + 1);
				target.scrollTop = scrolled;
				return false; //! still loses focus in Opera, can be solved by handling onblur
			} else if (target.createTextRange) {
				document.selection.createRange().text = '\t';
				return false;
			}
		}
		if (event.keyCode == 27) { // 27 - Esc
			var els = target.form.elements;
			for (var i=1; i < els.length; i++) {
				if (els[i-1] == target) {
					els[i].focus();
					break;
				}
			}
			return false;
		}
	}
	return true;
}



var added = '.', rowCount;

/** Check if val is equal to a-delimiter-b where delimiter is '_', '' or big letter
* @param string
* @param string
* @param string
* @return boolean
*/
function delimiterEqual(val, a, b) {
	return (val == a + '_' + b || val == a + b || val == a + b.charAt(0).toUpperCase() + b.substr(1));
}

/** Escape string to use as identifier
* @param string
* @return string
*/
function idfEscape(s) {
	return s.replace(/`/, '``');
}

/** Detect foreign key
* @param HTMLInputElement
*/
function editingNameChange(field) {
	var name = field.name.substr(0, field.name.length - 7);
	var type = formField(field.form, name + '[type]');
	var opts = type.options;
	var candidate; // don't select anything with ambiguous match (like column `id`)
	var val = field.value;
	for (var i = opts.length; i--; ) {
		var match = /(.+)`(.+)/.exec(opts[i].value);
		if (!match) { // common type
			if (candidate && i == opts.length - 2 && val == opts[candidate].value.replace(/.+`/, '') && name == 'fields[1]') { // single target table, link to column, first field - probably `id`
				return;
			}
			break;
		}
		var table = match[1];
		var column = match[2];
		var tables = [ table, table.replace(/s$/, ''), table.replace(/es$/, '') ];
		for (var j=0; j < tables.length; j++) {
			table = tables[j];
			if (val == column || val == table || delimiterEqual(val, table, column) || delimiterEqual(val, column, table)) {
				if (candidate) {
					return;
				}
				candidate = i;
				break;
			}
		}
	}
	if (candidate) {
		type.selectedIndex = candidate;
		type.onchange();
	}
}

/** Add table row for next field
* @param HTMLInputElement
* @param boolean
* @param boolean
* @return boolean
*/
function editingAddRow(button, allowed, focus) {
	if (allowed && rowCount >= allowed) {
		return false;
	}
	var match = /(\d+)(\.\d+)?/.exec(button.name);
	var x = match[0] + (match[2] ? added.substr(match[2].length) : added) + '1';
	var row = button.parentNode.parentNode;
	var row2 = row.cloneNode(true);
	var tags = row.getElementsByTagName('select');
	var tags2 = row2.getElementsByTagName('select');
	for (var i=0; i < tags.length; i++) {
		tags2[i].name = tags[i].name.replace(/([0-9.]+)/, x);
		tags2[i].selectedIndex = tags[i].selectedIndex;
	}
	tags = row.getElementsByTagName('input');
	tags2 = row2.getElementsByTagName('input');
	var input = tags2[0]; // IE loose tags2 after insertBefore()
	for (var i=0; i < tags.length; i++) {
		if (tags[i].name == 'auto_increment_col') {
			tags2[i].value = x;
			tags2[i].checked = false;
		}
		tags2[i].name = tags[i].name.replace(/([0-9.]+)/, x);
		if (/\[(orig|field|comment|default)/.test(tags[i].name)) {
			tags2[i].value = '';
		}
		if (/\[(has_default)/.test(tags[i].name)) {
			tags2[i].checked = false;
		}
	}
	tags[0].onchange = function () {
		editingNameChange(tags[0]);
	};
	row.parentNode.insertBefore(row2, row.nextSibling);
	if (focus) {
		input.onchange = function () {
			editingNameChange(input);
		};
		input.focus();
	}
	added += '0';
	rowCount++;
	return true;
}

/** Remove table row for field
* @param HTMLInputElement
* @return boolean
*/
function editingRemoveRow(button) {
	var field = formField(button.form, button.name.replace(/drop_col(.+)/, 'fields$1[field]'));
	field.parentNode.removeChild(field);
	button.parentNode.parentNode.style.display = 'none';
	return true;
}

var lastType = '';

/** Clear length and hide collation or unsigned
* @param HTMLSelectElement
*/
function editingTypeChange(type) {
	var name = type.name.substr(0, type.name.length - 6);
	var text = selectValue(type);
	for (var i=0; i < type.form.elements.length; i++) {
		var el = type.form.elements[i];
		if (el.name == name + '[length]' && !(
			(/(char|binary)$/.test(lastType) && /(char|binary)$/.test(text))
			|| (/(enum|set)$/.test(lastType) && /(enum|set)$/.test(text))
		)) {
			el.value = '';
		}
		if (lastType == 'timestamp' && el.name == name + '[has_default]' && /timestamp/i.test(formField(type.form, name + '[default]').value)) {
			el.checked = false;
		}
		if (el.name == name + '[collation]') {
			el.className = (/(char|text|enum|set)$/.test(text) ? '' : 'hidden');
		}
		if (el.name == name + '[unsigned]') {
			el.className = (/(int|float|double|decimal)$/.test(text) ? '' : 'hidden');
		}
		if (el.name == name + '[on_delete]') {
			el.className = (/`/.test(text) ? '' : 'hidden');
		}
	}
}

/** Edit enum or set
* @param HTMLInputElement
*/
function editingLengthFocus(field) {
	var td = field.parentNode;
	if (/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))) {
		var edit = document.getElementById('enum-edit');
		var val = field.value;
		edit.value = (/^'.+','.+'$/.test(val) ? val.substr(1, val.length - 2).replace(/','/g, "\n").replace(/''/g, "'") : val);
		td.appendChild(edit);
		field.style.display = 'none';
		edit.style.display = 'inline';
		edit.focus();
	}
}

/** Finish editing of enum or set
* @param HTMLTextAreaElement
*/
function editingLengthBlur(edit) {
	var field = edit.parentNode.firstChild;
	var val = edit.value;
	field.value = (/\n/.test(val) ? "'" + val.replace(/\n+$/, '').replace(/'/g, "''").replace(/\n/g, "','") + "'" : val);
	field.style.display = 'inline';
	edit.style.display = 'none';
}

/** Show or hide selected table column
* @param boolean
* @param number
*/
function columnShow(checked, column) {
	var trs = document.getElementById('edit-fields').getElementsByTagName('tr');
	for (var i=0; i < trs.length; i++) {
		trs[i].getElementsByTagName('td')[column].className = (checked ? '' : 'hidden');
	}
}

/** Display partition options
* @param HTMLSelectElement
*/
function partitionByChange(el) {
	var partitionTable = /RANGE|LIST/.test(selectValue(el));
	el.form['partitions'].className = (partitionTable || !el.selectedIndex ? 'hidden' : '');
	document.getElementById('partition-table').className = (partitionTable ? '' : 'hidden');
}

/** Add next partition row
* @param HTMLInputElement
*/
function partitionNameChange(el) {
	var row = el.parentNode.parentNode.cloneNode(true);
	row.firstChild.firstChild.value = '';
	el.parentNode.parentNode.parentNode.appendChild(row);
	el.onchange = function () {};
}



/** Add row for foreign key
* @param HTMLSelectElement
*/
function foreignAddRow(field) {
	field.onchange = function () { };
	var row = field.parentNode.parentNode.cloneNode(true);
	var selects = row.getElementsByTagName('select');
	for (var i=0; i < selects.length; i++) {
		selects[i].name = selects[i].name.replace(/\]/, '1$&');
		selects[i].selectedIndex = 0;
	}
	field.parentNode.parentNode.parentNode.appendChild(row);
}



/** Add row for indexes
* @param HTMLSelectElement
*/
function indexesAddRow(field) {
	field.onchange = function () { };
	var parent = field.parentNode.parentNode;
	var row = parent.cloneNode(true);
	var selects = row.getElementsByTagName('select');
	for (var i=0; i < selects.length; i++) {
		selects[i].name = selects[i].name.replace(/indexes\[\d+/, '$&1');
		selects[i].selectedIndex = 0;
	}
	var inputs = row.getElementsByTagName('input');
	for (var i=0; i < inputs.length; i++) {
		inputs[i].name = inputs[i].name.replace(/indexes\[\d+/, '$&1');
		inputs[i].value = '';
	}
	parent.parentNode.appendChild(row);
}

/** Change column in index
* @param HTMLSelectElement
* @param string name prefix
*/
function indexesChangeColumn(field, prefix) {
	var columns = field.parentNode.parentNode.getElementsByTagName('select');
	var names = [];
	for (var i=0; i < columns.length; i++) {
		var value = selectValue(columns[i]);
		if (value) {
			names.push(value);
		}
	}
	field.form[field.name.replace(/\].*/, '][name]')].value = prefix + names.join('_');
}

/** Add column for index
* @param HTMLSelectElement
* @param string name prefix
*/
function indexesAddColumn(field, prefix) {
	field.onchange = function () {
		indexesChangeColumn(field, prefix);
	};
	var select = field.form[field.name.replace(/\].*/, '][type]')];
	if (!select.selectedIndex) {
		select.selectedIndex = 3;
		select.onchange();
	}
	var column = field.parentNode.cloneNode(true);
	select = column.getElementsByTagName('select')[0];
	select.name = select.name.replace(/\]\[\d+/, '$&1');
	select.selectedIndex = 0;
	var input = column.getElementsByTagName('input')[0];
	input.name = input.name.replace(/\]\[\d+/, '$&1');
	input.value = '';
	field.parentNode.parentNode.appendChild(column);
	field.onchange();
}



var that, x, y; // em and tablePos defined in schema.inc.php

/** Get mouse position
* @param HTMLElement
* @param MouseEvent
*/
function schemaMousedown(el, event) {
	if ((event.which ? event.which : event.button) == 1) {
		that = el;
		x = event.clientX - el.offsetLeft;
		y = event.clientY - el.offsetTop;
	}
}

/** Move object
* @param MouseEvent
*/
function schemaMousemove(ev) {
	if (that !== undefined) {
		ev = ev || event;
		var left = (ev.clientX - x) / em;
		var top = (ev.clientY - y) / em;
		var divs = that.getElementsByTagName('div');
		var lineSet = { };
		for (var i=0; i < divs.length; i++) {
			if (divs[i].className == 'references') {
				var div2 = document.getElementById((/^refs/.test(divs[i].id) ? 'refd' : 'refs') + divs[i].id.substr(4));
				var ref = (tablePos[divs[i].title] ? tablePos[divs[i].title] : [ div2.parentNode.offsetTop / em, 0 ]);
				var left1 = -1;
				var id = divs[i].id.replace(/^ref.(.+)-.+/, '$1');
				if (divs[i].parentNode != div2.parentNode) {
					left1 = Math.min(0, ref[1] - left) - 1;
					divs[i].style.left = left1 + 'em';
					divs[i].getElementsByTagName('div')[0].style.width = -left1 + 'em';
					var left2 = Math.min(0, left - ref[1]) - 1;
					div2.style.left = left2 + 'em';
					div2.getElementsByTagName('div')[0].style.width = -left2 + 'em';
				}
				if (!lineSet[id]) {
					var line = document.getElementById(divs[i].id.replace(/^....(.+)-.+$/, 'refl$1'));
					var top1 = top + divs[i].offsetTop / em;
					var top2 = top + div2.offsetTop / em;
					if (divs[i].parentNode != div2.parentNode) {
						top2 += ref[0] - top;
						line.getElementsByTagName('div')[0].style.height = Math.abs(top1 - top2) + 'em';
					}
					line.style.left = (left + left1) + 'em';
					line.style.top = Math.min(top1, top2) + 'em';
					lineSet[id] = true;
				}
			}
		}
		that.style.left = left + 'em';
		that.style.top = top + 'em';
	}
}

/** Finish move
* @param MouseEvent
* @param string
*/
function schemaMouseup(ev, db) {
	if (that !== undefined) {
		ev = ev || event;
		tablePos[that.firstChild.firstChild.firstChild.data] = [ (ev.clientY - y) / em, (ev.clientX - x) / em ];
		that = undefined;
		var s = '';
		for (var key in tablePos) {
			s += '_' + key + ':' + Math.round(tablePos[key][0] * 10000) / 10000 + 'x' + Math.round(tablePos[key][1] * 10000) / 10000;
		}
		s = encodeURIComponent(s.substr(1));
		var link = document.getElementById('schema-link');
		link.href = link.href.replace(/[^=]+$/, '') + s;
		cookie('adminer_schema-' + db + '=' + s, 30); //! special chars in db
	}
}
<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($r){$Xc=substr($r,-1);return
str_replace($Xc.$Xc,$Xc,substr($r,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($Ae,$hc=false){if(get_magic_quotes_gpc()){while(list($v,$W)=each($Ae)){foreach($W
as$Tc=>$V){unset($Ae[$v][$Tc]);if(is_array($V)){$Ae[$v][stripslashes($Tc)]=$V;$Ae[]=&$Ae[$v][stripslashes($Tc)];}else$Ae[$v][stripslashes($Tc)]=($hc?$V:stripslashes($V));}}}}function
bracket_escape($r,$Ca=false){static$Of=array(':'=>':1',']'=>':2','['=>':3');return
strtr($r,($Ca?array_flip($Of):$Of));}function
h($L){return
htmlspecialchars(str_replace("\0","",$L),ENT_QUOTES);}function
nbsp($L){return(trim($L)!=""?h($L):"&nbsp;");}function
nl_br($L){return
str_replace("\n","<br>",$L);}function
checkbox($_,$X,$Na,$Vc="",$Nd="",$Sc=false){static$q=0;$q++;$F="<input type='checkbox' name='$_' value='".h($X)."'".($Na?" checked":"").($Nd?' onclick="'.h($Nd).'"':'').($Sc?" class='jsonly'":"")." id='checkbox-$q'>";return($Vc!=""?"<label for='checkbox-$q'>$F".h($Vc)."</label>":$F);}function
optionlist($Rd,$af=null,$eg=false){$F="";foreach($Rd
as$Tc=>$V){$Sd=array($Tc=>$V);if(is_array($V)){$F.='<optgroup label="'.h($Tc).'">';$Sd=$V;}foreach($Sd
as$v=>$W)$F.='<option'.($eg||is_string($v)?' value="'.h($v).'"':'').(($eg||is_string($v)?(string)$v:$W)===$af?' selected':'').'>'.h($W);if(is_array($V))$F.='</optgroup>';}return$F;}function
html_select($_,$Rd,$X="",$Md=true){if($Md)return"<select name='".h($_)."'".(is_string($Md)?' onchange="'.h($Md).'"':"").">".optionlist($Rd,$X)."</select>";$F="";foreach($Rd
as$v=>$W)$F.="<label><input type='radio' name='".h($_)."' value='".h($v)."'".($v==$X?" checked":"").">".h($W)."</label>";return$F;}function
confirm($gb=""){return" onclick=\"return confirm('".lang(0).($gb?" (' + $gb + ')":"")."');\"";}function
print_fieldset($q,$cd,$kg=false,$Nd=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($Nd)."return !toggle('fieldset-$q');\">$cd</a></legend><div id='fieldset-$q'".($kg?"":" class='hidden'").">\n";}function
bold($Ha){return($Ha?" class='active'":"");}function
odd($F=' class="odd"'){static$p=0;if(!$F)$p=-1;return($p++%
2?$F:'');}function
js_escape($L){return
addcslashes($L,"\r\n'\\/");}function
json_row($v,$W=null){static$ic=true;if($ic)echo"{";if($v!=""){echo($ic?"":",")."\n\t\"".addcslashes($v,"\r\n\"\\").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$ic=false;}else{echo"\n}\n";$ic=true;}}function
ini_bool($Kc){$W=ini_get($Kc);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$F;if($F===null)$F=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$F;}function
q($L){global$g;return$g->quote($L);}function
get_vals($D,$e=0){global$g;$F=array();$E=$g->query($D);if(is_object($E)){while($G=$E->fetch_row())$F[]=$G[$e];}return$F;}function
get_key_vals($D,$h=null){global$g;if(!is_object($h))$h=$g;$F=array();$E=$h->query($D);if(is_object($E)){while($G=$E->fetch_row())$F[$G[0]]=$G[1];}return$F;}function
get_rows($D,$h=null,$k="<p class='error'>"){global$g;$cb=(is_object($h)?$h:$g);$F=array();$E=$cb->query($D);if(is_object($E)){while($G=$E->fetch_assoc())$F[]=$G;}elseif(!$E&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.adminer_error()."\n";return$F;}function
unique_array($G,$t){foreach($t
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$F=array();foreach($s["columns"]as$v){if(!isset($G[$v]))continue
2;$F[$v]=$G[$v];}return$F;}}$F=array();foreach($G
as$v=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$v))$F[$v]=$W;}return$F;}function
where($Z){global$u;$F=array();foreach((array)$Z["where"]as$v=>$W)$F[]=idf_escape(bracket_escape($v,1)).(($u=="sql"&&ereg('\\.',$W))||$u=="mssql"?" LIKE ".exact_value(addcslashes($W,"%_\\")):" = ".exact_value($W));foreach((array)$Z["null"]as$v)$F[]=idf_escape($v)." IS NULL";return
implode(" AND ",$F);}function
where_check($W){parse_str($W,$Ma);remove_slashes(array(&$Ma));return
where($Ma);}function
where_link($p,$e,$X,$Od="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($X!==null?$Od:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($X);}function
cookie($_,$X){global$ba;$ge=array($_,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ge[]=true;return
call_user_func_array('setcookie',$ge);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function&get_session($v){return$_SESSION[$v][DRIVER][SERVER][$_GET["username"]];}function
set_session($v,$W){$_SESSION[$v][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($xb,$J,$U,$j=null){global$yb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($yb))."|username|".($j!==null?"db|":"").session_name()),$z);return"$z[1]?".(sid()?SID."&":"").($xb!="server"||$J!=""?urlencode($xb)."=".urlencode($J)."&":"")."username=".urlencode($U).($j!=""?"&db=".urlencode($j):"").($z[2]?"&$z[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
adminer_redirect($gd,$rd=null){if($rd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($gd!==null?$gd:$_SERVER["REQUEST_URI"]))][]=$rd;}if($gd!==null){if($gd=="")$gd=".";header("Location: $gd");exit;}}function
query_redirect($D,$gd,$rd,$Fe=true,$Wb=true,$dc=false){global$g,$k,$b;if($Wb)$dc=!$g->query($D);$jf="";if($D)$jf=$b->messageQuery("$D;");if($dc){$k=adminer_error().$jf;return
false;}if($Fe)adminer_redirect($gd,$rd.$jf);return
true;}function
queries($D=null){global$g;static$De=array();if($D===null)return
implode(";\n",$De);$De[]=(ereg(';$',$D)?"DELIMITER ;;\n$D;\nDELIMITER ":$D);return$g->query($D);}function
apply_queries($D,$P,$Rb='table'){foreach($P
as$N){if(!queries("$D ".$Rb($N)))return
false;}return
true;}function
queries_redirect($gd,$rd,$Fe){return
query_redirect(queries(),$gd,$rd,$Fe,false,!$Fe);}function
remove_from_uri($fe=""){return
substr(preg_replace("~(?<=[?&])($fe".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($ee,$lb){return" ".($ee==$lb?$ee+1:'<a href="'.h(remove_from_uri("page").($ee?"&page=$ee":"")).'">'.($ee+1)."</a>");}function
get_file($v,$qb=false){$fc=$_FILES[$v];if(!$fc||$fc["error"])return$fc["error"];$F=file_get_contents($qb&&ereg('\\.gz$',$fc["name"])?"compress.zlib://$fc[tmp_name]":($qb&&ereg('\\.bz2$',$fc["name"])?"compress.bzip2://$fc[tmp_name]":$fc["tmp_name"]));if($qb){$kf=substr($F,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$kf,$Le))$F=iconv("utf-16","utf-8",$F);elseif($kf=="\xEF\xBB\xBF")$F=substr($F,3);}return$F;}function
upload_error($k){$pd=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?lang(1).($pd?" ".lang(2,$pd):""):lang(3));}function
repeat_pattern($ne,$w){return
str_repeat("$ne{0,65535}",$w/65535)."$ne{0,".($w
%
65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($L,$w=80,$qf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$w).")($)?)u",$L,$z))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$w).")($)?)",$L,$z);return
h($z[1]).$qf.(isset($z[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($Ae,$Fc=array()){while(list($v,$W)=each($Ae)){if(is_array($W)){foreach($W
as$Tc=>$V)$Ae[$v."[$Tc]"]=$V;}elseif(!in_array($v,$Fc))echo'<input type="hidden" name="'.h($v).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($N){global$b;$F=array();foreach($b->foreignKeys($N)as$n){foreach($n["source"]as$W)$F[$W][]=$n;}return$F;}function
enum_input($S,$za,$l,$X,$Ib=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$kd);$F=($Ib!==null?"<label><input type='$S'$za value='$Ib'".((is_array($X)?in_array($Ib,$X):$X===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($kd[1]as$p=>$W){$W=stripcslashes(str_replace("''","'",$W));$Na=(is_int($X)?$X==$p+1:(is_array($X)?in_array($p+1,$X):$X===$W));$F.=" <label><input type='$S'$za value='".($p+1)."'".($Na?' checked':'').'>'.h($b->editVal($W,$l)).'</label>';}return$F;}function
input($l,$X,$o){global$T,$b,$u;$_=h(bracket_escape($l["field"]));echo"<td class='function'>";$Ne=($u=="mssql"&&$l["auto_increment"]);if($Ne&&!$_POST["save"])$o=null;$tc=(isset($_GET["select"])||$Ne?array("orig"=>lang(5)):array())+$b->editFunctions($l);$za=" name='fields[$_]'";if($l["type"]=="enum")echo
nbsp($tc[""])."<td>".$b->editInput($_GET["edit"],$l,$za,$X);else{$ic=0;foreach($tc
as$v=>$W){if($v===""||!$W)break;$ic++;}$Md=($ic?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($ic > f.selectedIndex) f.selectedIndex = $ic;\"":"");$za.=$Md;echo(count($tc)>1?html_select("function[$_]",$tc,$o===null||in_array($o,$tc)||isset($tc[$o])?$o:"","functionChange(this);"):nbsp(reset($tc))).'<td>';$Mc=$b->editInput($_GET["edit"],$l,$za,$X);if($Mc!="")echo$Mc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$kd);foreach($kd[1]as$p=>$W){$W=stripcslashes(str_replace("''","'",$W));$Na=(is_int($X)?($X>>$p)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$_][$p]' value='".(1<<$p)."'".($Na?' checked':'')."$Md>".h($b->editVal($W,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$_'$Md>";elseif(ereg('text|lob',$l["type"]))echo"<textarea ".($u!="sqlite"||ereg("\n",$X)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$za>".h($X).'</textarea>';else{$qd=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$z)?((ereg("binary",$l["type"])?2:1)*$z[1]+($z[3]?1:0)+($z[2]&&!$l["unsigned"]?1:0)):($T[$l["type"]]?$T[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input value='".h($X)."'".($qd?" maxlength='$qd'":"").(ereg('char|binary',$l["type"])&&$qd>20?" size='40'":"")."$za>";}}}function
process_input($l){global$b;$r=bracket_escape($l["field"]);$o=$_POST["function"][$r];$X=$_POST["fields"][$r];if($l["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($l["auto_increment"]&&$X=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$X);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$fc=get_file("fields-$r");if(!is_string($fc))return
false;return
q($fc);}return$b->processInput($l,$X,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$oc=false;foreach(table_status()as$N=>$O){$_=$b->tableName($O);if(isset($O["Engine"])&&$_!=""&&(!$_POST["tables"]||in_array($N,$_POST["tables"]))){$E=$g->query("SELECT".limit("1 FROM ".table($N)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($N),array())),1));if($E->fetch_row()){if(!$oc){echo"<ul>\n";$oc=true;}echo"<li><a href='".h(ME."select=".urlencode($N)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$_</a>\n";}}}echo($oc?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($Ec,$zd=false){global$b;$F=$b->dumpHeaders($Ec,$zd);$ce=$_POST["output"];if($ce!="text")header("Content-Disposition: attachment; filename=".friendly_url($Ec!=""?$Ec:(SERVER!=""?SERVER:"localhost")).".$F".($ce!="file"&&!ereg('[^0-9a-z]',$ce)?".$ce":""));session_write_close();return$F;}function
dump_csv($G){foreach($G
as$v=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$G[$v]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$G)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file(){$ub=ini_get("upload_tmp_dir");if(!$ub){if(function_exists('sys_get_temp_dir'))$ub=sys_get_temp_dir();else{$gc=@tempnam("","");if(!$gc)return
false;$ub=dirname($gc);unlink($gc);}}$gc="$ub/adminer.key";$F=@file_get_contents($gc);if($F)return$F;$qc=@fopen($gc,"w");if($qc){$F=md5(uniqid(mt_rand(),true));fwrite($qc,$F);fclose($qc);}return$F;}function
is_mail($Fb){$ya='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$wb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ne="$ya+(\\.$ya+)*@($wb?\\.)+$wb";return
preg_match("(^$ne(,\\s*$ne)*\$)i",$Fb);}function
is_url($L){$wb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($wb?\\.)+$wb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$L,$z)?strtolower($z[1]):"");}global$b,$g,$yb,$Db,$Mb,$k,$tc,$yc,$ba,$Lc,$u,$ca,$Wc,$Ld,$of,$Q,$R,$T,$bg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$ge=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ge[]=true;call_user_func_array('session_set_cookie_params',$ge);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$hc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Wc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','ru'=>'Русский язык','uk'=>'Українська','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية','fa'=>'فارسی','bn'=>'বাংলা',);function
get_lang(){global$ca;return$ca;}function
lang($r,$Fd=null){global$ca,$R;$Pf=$R[$r];if(is_array($Pf)){$qe=($Fd==1?0:($ca=='cs'||$ca=='sk'?($Fd&&$Fd<5?1:2):($ca=='fr'?(!$Fd?0:1):($ca=='pl'?($Fd
%
10>1&&$Fd
%
10<5&&$Fd/10
%
10!=1?1:2):($ca=='sl'?($Fd
%
100==1?0:($Fd
%
100==2?1:($Fd
%
100==3||$Fd
%
100==4?2:3))):($ca=='lt'?($Fd
%
10==1&&$Fd
%
100!=11?0:($Fd
%
10>1&&$Fd/10
%
10!=1?1:2)):($ca=='ru'||$ca=='uk'?($Fd
%
10==1&&$Fd
%
100!=11?0:($Fd
%
10>1&&$Fd
%
10<5&&$Fd/10
%
10!=1?1:2)):1)))))));$Pf=$Pf[$qe];}$xa=func_get_args();array_shift($xa);return
vsprintf(($Pf!==null?$Pf:$r),$xa);}function
switch_lang(){global$ca,$Wc;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$Wc,$ca,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$ca="en";if(isset($Wc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Wc[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$pa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$kd,PREG_SET_ORDER);foreach($kd
as$z)$pa[$z[1]]=(isset($z[3])?$z[3]:1);arsort($pa);foreach($pa
as$v=>$C){if(isset($Wc[$v])){$ca=$v;break;}$v=preg_replace('~-.*~','',$v);if(!isset($pa[$v])&&isset($Wc[$v])){$ca=$v;break;}}}switch($ca){case"en":$R=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','System','Server','Username','Password','Database','Login','Permanent login','Select data','Show structure','Alter view','Alter table','New item','Last page','Edit',array('%d byte','%d bytes'),'Select','Functions','Aggregation','Search','anywhere','Sort','descending','Limit','Text length','Action','Full table scan','SQL command','open','save','Alter database','Alter schema','Create schema','Database schema','Privileges','Dump','Logout','database','schema','Create new table','select','ltr','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Invalid database.','Databases have been dropped.','Select database','Create new database','Process list','Variables','Status','%s version: %s through PHP extension %s','Logged as: %s','Collation','Tables','Drop','Refresh','Schema','Invalid schema.','No rows.','%.3f s','Foreign keys','collation','ON DELETE','Column name','Parameter name','Type','Length','Options','Auto Increment','Default values','Comment','Add next','Move up','Move down','Remove','View','Table','Column','Indexes','Alter indexes','Source','Target','ON UPDATE','Alter','Add foreign key','Triggers','Add trigger','Permanent link','Export','Output','Format','Routines','Events','Data','Create user','Error in query',array('%d row','%d rows'),array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),'No commands to execute.',array('%d query executed OK.','%d queries executed OK.'),'File upload','File uploads are disabled.','Execute','Stop on error','Show only errors','From server','Webserver file %s','Run file','History','Clear','Edit all','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Insert','Save','Save and continue edit','Save and insert next','Delete','Table has been dropped.','Table has been altered.','Table has been created.','Create table','Maximum number of allowed fields exceeded. Please increase %s and %s.','Table name','engine','Partition by','Partitions','Partition name','Values','Indexes have been altered.','Index Type','Column (length)','Name','Database has been dropped.','Database has been renamed.','Database has been created.','Database has been altered.','Create database','Schema has been dropped.','Schema has been created.','Schema has been altered.','Call',array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),'Foreign key has been dropped.','Foreign key has been altered.','Foreign key has been created.','Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.','Foreign key','Target table','Change','Add column','View has been dropped.','View has been altered.','View has been created.','Create view','Event has been dropped.','Event has been altered.','Event has been created.','Alter event','Create event','Start','End','Every','On completion preserve','Routine has been dropped.','Routine has been altered.','Routine has been created.','Alter function','Alter procedure','Create function','Create procedure','Return type','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Type has been dropped.','Type has been created.','Alter type','Create type','Trigger has been dropped.','Trigger has been altered.','Trigger has been created.','Alter trigger','Create trigger','Time','Event','User has been dropped.','User has been altered.','User has been created.','Hashed','Routine','Grant','Revoke',array('%d process has been killed.','%d processes have been killed.'),'%d in total','Kill',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','edit','Relations','Use edit link to modify this value.','Page','last','whole result','Clone','Import',',','Tables have been truncated.','Tables have been moved.','Tables have been copied.','Tables have been dropped.','Tables have been optimized.','Tables and views','Search data in tables','Engine','Data Length','Index Length','Data Free','Rows','Analyze','Optimize','Check','Repair','Truncate','Move to other database','Move','Copy','Sequences','Schedule','At given time',array('%d e-mail has been sent.','%d e-mails have been sent.'));break;case"cs":$R=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Systém','Server','Uživatel','Heslo','Databáze','Přihlásit se','Trvalé přihlášení','Vypsat data','Zobrazit strukturu','Pozměnit pohled','Pozměnit tabulku','Nová položka','Poslední stránka','Upravit',array('%d bajt','%d bajty','%d bajtů'),'Vypsat','Funkce','Agregace','Vyhledat','kdekoliv','Seřadit','sestupně','Limit','Délka textů','Akce','Průchod celé tabulky','SQL příkaz','otevřít','uložit','Pozměnit databázi','Pozměnit schéma','Vytvořit schéma','Schéma databáze','Oprávnění','Export','Odhlásit','databáze','schéma','Vytvořit novou tabulku','vypsat','ltr','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Nesprávná databáze.','Databáze byly odstraněny.','Vybrat databázi','Vytvořit novou databázi','Seznam procesů','Proměnné','Stav','Verze %s: %s přes PHP extenzi %s','Přihlášen jako: %s','Porovnávání','Tabulky','Odstranit','Obnovit','Schéma','Nesprávné schéma.','Žádné řádky.','%.3f s','Cizí klíče','porovnávání','Při smazání','Název sloupce','Název parametru','Typ','Délka','Volby','Auto Increment','Výchozí hodnoty','Komentář','Přidat další','Přesunout nahoru','Přesunout dolů','Odebrat','Pohled','Tabulka','Sloupec','Indexy','Pozměnit indexy','Zdroj','Cíl','Při změně','Změnit','Přidat cizí klíč','Triggery','Přidat trigger','Trvalý odkaz','Export','Výstup','Formát','Procedury a funkce','Události','Data','Vytvořit uživatele','Chyba v dotazu',array('%d řádek','%d řádky','%d řádků'),array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),'Žádné příkazy k vykonání.',array('%d příkaz proběhl v pořádku.','%d příkazy proběhly v pořádku.','%d příkazů proběhlo v pořádku.'),'Nahrání souboru','Nahrávání souborů není povoleno.','Provést','Zastavit při chybě','Zobrazit pouze chyby','Ze serveru','Soubor %s na webovém serveru','Spustit soubor','Historie','Vyčistit','Upravit vše','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Vložit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat','Tabulka byla odstraněna.','Tabulka byla změněna.','Tabulka byla vytvořena.','Vytvořit tabulku','Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','Název tabulky','úložiště','Rozdělit podle','Oddíly','Název oddílu','Hodnoty','Indexy byly změněny.','Typ indexu','Sloupec (délka)','Název','Databáze byla odstraněna.','Databáze byla přejmenována.','Databáze byla vytvořena.','Databáze byla změněna.','Vytvořit databázi','Schéma bylo odstraněno.','Schéma bylo vytvořeno.','Schéma bylo změněno.','Zavolat',array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),'Cizí klíč byl odstraněn.','Cizí klíč byl změněn.','Cizí klíč byl vytvořen.','Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.','Cizí klíč','Cílová tabulka','Změnit','Přidat sloupec','Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.','Vytvořit pohled','Událost byla odstraněna.','Událost byla změněna.','Událost byla vytvořena.','Pozměnit událost','Vytvořit událost','Začátek','Konec','Každých','Po dokončení zachovat','Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.','Změnit funkci','Změnit proceduru','Vytvořit funkci','Vytvořit proceduru','Návratový typ','Sekvence byla odstraněna.','Sekvence byla vytvořena.','Sekvence byla změněna.','Pozměnit sekvenci','Vytvořit sekvenci','Typ byl odstraněn.','Typ byl vytvořen.','Pozměnit typ','Vytvořit typ','Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.','Změnit trigger','Vytvořit trigger','Čas','Událost','Uživatel byl odstraněn.','Uživatel byl změněn.','Uživatel byl vytvořen.','Zahašované','Procedura','Povolit','Zakázat',array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),'%d celkem','Ukončit',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední','celý výsledek','Klonovat','Import',' ','Tabulky byly vyprázdněny.','Tabulky byly přesunuty.','Tabulky byly zkopírovány.','Tabulky byly odstraněny.','Tabulky byly optimalizovány.','Tabulky a pohledy','Vyhledat data v tabulkách','Úložiště','Velikost dat','Velikost indexů','Volné místo','Řádků','Analyzovat','Optimalizovat','Zkontrolovat','Opravit','Vyprázdnit','Přesunout do jiné databáze','Přesunout','Zkopírovat','Sekvence','Plán','V daný čas','ne');break;case"sk":$R=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Systém','Server','Používateľ','Heslo','Databáza','Prihlásiť sa','Trvalé prihlásenie','Vypísať dáta','Zobraziť štruktúru','Zmeniť pohľad','Zmeniť tabuľku','Nová položka','Posledná stránka','Upraviť',array('%d bajt','%d bajty','%d bajtov'),'Vypísať','Funkcie','Agregácia','Vyhľadať','kdekoľvek','Zotriediť','zostupne','Limit','Dĺžka textov','Akcia','Full table scan','SQL príkaz','otvoriť','uložiť','Zmeniť databázu','Pozmeniť schému','Vytvoriť schému','Schéma databázy','Oprávnenia','Export','Odhlásiť','databáza','schéma','Vytvoriť novú tabuľku','vypísať','ltr','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Nesprávna databáza.','Databázy boli odstránené.','Vybrať databázu','Vytvoriť novú databázu','Zoznam procesov','Premenné','Stav','Verzia %s: %s cez PHP rozšírenie %s','Prihlásený ako: %s','Porovnávanie','Tabuľky','Odstrániť','Obnoviť','Schéma','Neplatné schéma.','Žiadne riadky.','%.3f s','Cudzie kľúče','porovnávanie','ON DELETE','Názov stĺpca','Názov parametra','Typ','Dĺžka','Voľby','Auto Increment','Východzie hodnoty','Komentár','Pridať ďalší','Presunúť hore','Presunúť dolu','Odobrať','Pohľad','Tabuľka','Stĺpec','Indexy','Zmeniť indexy','Zdroj','Cieľ','ON UPDATE','Zmeniť','Pridať cudzí kľúč','Triggery','Pridať trigger','Permanentný odkaz','Export','Výstup','Formát','Procedúry','Udalosti','Dáta','Vytvoriť používateľa','Chyba v dotaze',array('%d riadok','%d riadky','%d riadkov'),array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),'Žiadne príkazy na vykonanie.',array('Bol vykonaný %d dotaz.','Boli vykonané %d dotazy.','Bolo vykonaných %d dotazov.'),'Nahranie súboru','Nahrávánie súborov nie je povolené.','Vykonať','Zastaviť pri chybe','Zobraziť iba chyby','Zo serveru','Súbor %s na webovom serveri','Spustiť súbor','História','Vyčistiť','Upraviť všetko','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Vložiť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','Tabuľka bola odstránená.','Tabuľka bola zmenená.','Tabuľka bola vytvorená.','Vytvoriť tabuľku','Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','Názov tabuľky','úložisko','Rozdeliť podľa','Oddiely','Názov oddielu','Hodnoty','Indexy boli zmenené.','Typ indexu','Stĺpec (dĺžka)','Názov','Databáza bola odstránená.','Databáza bola premenovaná.','Databáza bola vytvorená.','Databáza bola zmenená.','Vytvoriť databázu','Schéma bola odstránená.','Schéma bola vytvorená.','Schéma bola zmenená.','Zavolať',array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),'Cudzí kľúč bol odstránený.','Cudzí kľúč bol zmenený.','Cudzí kľúč bol vytvorený.','Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.','Cudzí kľúč','Cieľová tabuľka','Zmeniť','Pridať stĺpec','Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.','Vytvoriť pohľad','Udalosť bola odstránená.','Udalosť bola zmenená.','Udalosť bola vytvorená.','Upraviť udalosť','Vytvoriť udalosť','Začiatok','Koniec','Každých','Po dokončení zachovat','Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.','Zmeniť funkciu','Zmeniť procedúru','Vytvoriť funkciu','Vytvoriť procedúru','Návratový typ','Sekvencia bola odstránená.','Sekvencia bola vytvorená.','Sekvencia bola zmenená.','Pozmeniť sekvenciu','Vytvoriť sekvenciu','Typ bol odstránený.','Typ bol vytvorený.','Pozmeniť typ','Vytvoriť typ','Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.','Zmeniť trigger','Vytvoriť trigger','Čas','Udalosť','Používateľ bol odstránený.','Používateľ bol zmenený.','Používateľ bol vytvorený.','Zahašované','Procedúra','Povoliť','Zakázať',array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),'%d celkom','Ukončiť','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný','celý výsledok','Klonovať','Import',' ','Tabuľka bola vyprázdnená.','Tabuľka bola presunutá.','Tabuľky boli skopírované.','Tabuľka bola odstránená.','Tables have been optimized.','Tabuľky a pohľady','Vyhľadať dáta v tabuľkách','Typ','Veľkosť dát','Veľkosť indexu','Voľné miesto','Riadky','Analyzovať','Optimalizovať','Skontrolovať','Opraviť','Vyprázdniť','Presunúť do inej databázy','Presunúť','Kopírovať','Sekvencia','Plán','V stanovený čas','HH:MM:SS');break;case"nl":$R=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Databasesysteem','Server','Gebruikersnaam','Wachtwoord','Database','Inloggen','Blijf aangemeld','Gegevens selecteren','Toon structuur','View aanpassen','Tabel aanpassen','Nieuw item','Laatste pagina','Bewerk',array('%d byte','%d bytes'),'Kies','Functies','Totalen','Zoeken','overal','Sorteren','Aflopend','Beperk','Tekst lengte','Acties','Full table scan','SQL opdracht','openen','opslaan','Database aanpassen','Schema wijzigen','Schema maken','Database schema','Rechten','Exporteer','Uitloggen','database','schema','Nieuwe tabel','kies','ltr','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Ongeldige database.','Databases verwijderd.','Database selecteren','Nieuwe database','Proceslijst','Variabelen','Status','%s versie: %s met PHP extensie %s','Aangemeld als: %s','Collatie','Tabellen','Verwijderen','Vernieuwen','Schema','Ongeldig schema.','Geen rijen.','%.3f s','Foreign keys','collation','ON DELETE','Kolomnaam','Parameternaam','Type','Lengte','Opties','Auto nummering','Standaard waarden','Commentaar','Volgende toevoegen','Omhoog','Omlaag','Verwijderen','View','Tabel','Kolom','Indexen','Indexen aanpassen','Bron','Doel','ON UPDATE','Aanpassen','Foreign key aanmaken','Triggers','Trigger aanmaken','Permanente link','Exporteren','Uitvoer','Formaat','Procedures','Events','Data','Gebruiker aanmaken','Fout in query',array('%d rij','%d rijen'),array('Query uitgevoerd, %d rij geraakt.','Query uitgevoerd, %d rijen geraakt.'),'Geen opdrachten uit te voeren.',array('%d query succesvol uitgevoerd.','%d querys succesvol uitgevoerd'),'Bestand uploaden','Bestanden uploaden is uitgeschakeld.','Uitvoeren','Stoppen bij fout','Enkel fouten tonen','Van server','Webserver bestand %s','Bestand uitvoeren','Geschiedenis','Wissen','Alles bewerken','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Toevoegen','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen','Tabel verwijderd.','Tabel aangepast.','Tabel aangemaakt.','Tabel aanmaken','Maximum aantal velden bereikt. Verhoog %s en %s.','Tabelnaam','engine','Partitioneren op','Partities','Partitie naam','Waarden','Index aangepast.','Index type','Kolom (lengte)','Naam','Database verwijderd.','Database hernoemd.','Database aangemaakt.','Database aangepast.','Database aanmaken','Schema verwijderd.','Schema aangemaakt.','Schema gewijzigd.','Uitvoeren',array('Procedure uitgevoerd, %d rij geraakt.','Procedure uitgevoerd, %d rijen geraakt.'),'Foreign key verwijderd.','Foreign key aangepast.','Foreign key aangemaakt.','Bron- en doelkolommen moeten van hetzelfde data type zijn, er moet een index bestaan op de gekozen kolommen en er moet gerelateerde data bestaan.','Foreign key','Doeltabel','Veranderen','Kolom toevoegen','View verwijderd.','View aangepast.','View aangemaakt.','View aanmaken','Event werd verwijderd.','Event werd aangepast.','Event werd aangemaakt.','Event aanpassen','Event aanmaken','Start','Stop','Iedere','Bewaren na voltooiing','Procedure verwijderd.','Procedure aangepast.','Procedure aangemaakt.','Functie aanpassen','Procedure aanpassen','Functie aanmaken','Procedure aanmaken','Return type','Sequence verwijderd.','Sequence aangemaakt.','Sequence gewijzigd.','Sequence wijzigen','Sequence maken','Type verwijderd.','Type aangemaakt.','Type wijzigen','Type maken','Trigger verwijderd.','Trigger aangepast.','Trigger aangemaakt.','Trigger aanpassen','Trigger aanmaken','Time','Event','Gebruiker verwijderd.','Gebruiker aangepast.','Gebruiker aangemaakt.','Gehashed','Routine','Toekennen','Intrekken',array('%d proces gestopt.','%d processen gestopt.'),'%d in totaal','Stoppen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste','volledig resultaat','Dupliceer','Importeren','.','Tabellen werden geleegd.','Tabellen werden verplaatst.','De tabellen zijn gekopieerd.','Tabellen werden verwijderd.','Tables have been optimized.','Tabellen en views','Zoeken in database','Engine','Data lengte','Index lengte','Data Vrij','Rijen','Analyseer','Optimaliseer','Controleer','Herstel','Legen','Verplaats naar andere database','Verplaats','Kopieren','Sequences','Schedule','Op aangegeven tijd','HH:MM:SS');break;case"es":$R=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Motor de base de datos','Servidor','Usuario','Contraseña','Base de datos','Login','Guardar contraseña','Visualizar contenido','Mostrar estructura','Modificar vista','Modifique estructura','Nuevo Registro','Ultima página','Modificar',array('%d byte','%d bytes'),'Mostrar','Funciones','Agregaciones','Condición','donde sea','Ordenar','descendiente','Limit','Longitud de texto','Acción','Full table scan','Comando SQL','mostrar','archivo','Modificar Base de datos','Modificar esquema','Crear esquema','Esquema de base de datos','Privilegios','Export','Logout','base de datos','esquema','Nueva tabla','registros','ltr','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Base de datos inválida.','Bases de datos eliminadas.','Seleccionar Base de datos','Ingrese nueva base de datos','Lista de procesos','Variables','Estado','Versión %s: %s a través de extensión PHP %s','Logeado como: %s','Colación','Tablas','Eliminar','Refrescar','Esquema','Esquema inválido.','No existen registros.','%.3f s','Claves foráneas','colación','ON DELETE','Nombre de columna','Nombre de Parámetro','Tipo','Longitud','Opciones','Incremento automático','Valores predeterminados','Comentario','Agregar','Mover arriba','Mover abajo','Eliminar','Vistas','Tabla','Columna','Indices','Modificar indices','Origen','Destino','ON UPDATE','Modificar','Agregar clave foránea','Triggers','Agregar trigger','Enlace permanente','Exportar','Salida','Formato','Procedimientos','Eventos','Datos','Crear Usuario','Error en consulta',array('%d registro','%d registros'),array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'No hay comando para ejecutar.',array('%d sentencia sql ejecutada correctamente.','%d sentencias sql ejecutadas correctamente.'),'Importar archivo','Importación de archivos deshablilitado.','Ejecutar','Parar en caso de error','Mostrar solamente errores','Desde servidor','Archivo de servidor web %s','Ejecutar Archivo','History','Vaciar','Editar todos','Registro eliminado.','Registro modificado.','Registro%s insertado.','Agregar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar','Tabla eliminada.','Tabla modificada.','Tabla creada.','Cree tabla','Cantida máxima de campos permitidos excedidos. Por favor aumente %s y %s.','Nombre de la tabla','motor','Particionar por','Particiones','Nombre de Partición','Valores','Indices modificados.','Tipo de índice','Columna (longitud)','Nombre','Base de datos eliminada.','Base de datos renombrada.','Base de datos creada.','Base de datos modificada.','Crear Base de datos','Esquema eliminado.','Esquema creado.','Esquema modificado.','Llamar',array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'Clave externa eliminada.','Clave externa modificada.','Clave externa creada.','Las columnas de origen y destino deben ser del mismo tipo, debe existir un índice entre las columnas del destino y el registro referenciado debe existir.','Clave externa','Tabla de destino','Modificar','Agregar columna','Vista eliminada.','Vista modificada.','Vista creada.','Cear vista','Evento eliminado.','Evento modificado.','Evento creado.','Modificar Evento','Crear Evento','Inicio','Fin','Cada','Al completar preservar','Procedimiento eliminado.','Procedimiento modificado.','Procedimiento creado.','Modificar Función','Modificar procedimiento','Crear función','Crear procedimiento','Tipo de valor de regreso','Secuencia eliminada.','Secuencia creada.','Secuencia modificada.','Modificar secuencia','Crear secuencias','Tipo eliminado.','Tipo creado.','Modificar tipo','Crear tipo','Trigger eliminado.','Trigger modificado.','Trigger creado.','Modificar Trigger','Agregar Trigger','Tiempo','Evento','Usuario eliminado.','Usuario modificado.','Usuario creado.','Hash','Rutina','Conceder','Impedir',array('%d proceso detenido.','%d procesos detenidos.'),'%d en total','Detener',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último','resultado completo','Clonar','Importar',' ','Tablas vaciadas (truncate).','Se movieron las tablas.','Tablas copiadas.','Tablas eliminadas.','Tables have been optimized.','Tablas y vistas','Buscar datos en tablas','Motor','Longitud de datos','Longitud de índice','Espacio libre','Registros','Analizar','Optimizar','Comprobar','Reparar','Vaciar','Mover a otra base de datos','Mover','Copiar','Secuencias','Agenda','A hora determinada','HH:MM:SS');break;case"de":$R=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Datenbank System','Server','Benutzer','Passwort','Datenbank','Login','Passwort speichern','Daten auswählen','Struktur anzeigen','View ändern','Tabelle ändern','Neuer Datensatz','Letzte Seite','Ändern',array('%d Byte','%d Bytes'),'Daten zeigen von','Funktionen','Agregationen','Suchen','beliebig','Ordnen','absteigend','Begrenzung','Textlänge','Aktion','Full table scan','SQL-Query','anzeigen','Datei','Datenbank ändern','Schema ändern','Neues Schema','Datenbankschema','Rechte','Export','Abmelden','Datenbank','Schema','Neue Tabelle','zeigen','ltr','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datenbank ungültig.','Datenbanken entfernt.','Datenbank auswählen','Neue Datenbank','Prozessliste','Variablen','Status','Version %s: %s, mit PHP-Erweiterung %s','Angemeldet als: %s','Collation','Tabellen','Entfernen','Aktualisieren','Schema','Schema nicht gültig.','Keine Daten.','%.3f s','Fremdschlüssel','Kollation','ON DELETE','Spaltenname','Name des Parameters','Typ','Länge','Optionen','Auto-Inkrement','Vorgabewerte festlegen','Kommentar','Hinzufügen','Nach oben','Nach unten','Entfernen','View','Tabelle','Spalte','Indizes','Indizes ändern','Ursprung','Ziel','ON UPDATE','Ändern','Fremdschlüssel hinzufügen','Trigger','Trigger hinzufügen','Dauerhafter Link','Exportieren','Ergebnis','Format','Prozeduren','Ereignisse','Daten','Neuer Benutzer','Fehler in der SQL-Abfrage',array('%d Datensatz','%d Datensätze'),array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),'Kein Kommando vorhanden.',array('SQL-Query erfolgreich ausgeführt.','%d SQL-Queries erfolgreich ausgeführt.'),'Datei importieren','Importieren von Dateien abgeschaltet.','Ausführen','Bei Fehler anhalten','Nur Fehler anzeigen','Im Server','Webserver Datei %s','Datei ausführen','History','Entleeren','Alle ändern','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Hinzufügen','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','Tabelle entfernt.','Tabelle geändert.','Tabelle erstellt.','Neue Tabelle erstellen','Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','Name der Tabelle','Motor','Partitionieren um','Partitionen','Name der Partition','Werte','Indizes geändert.','Index-Typ','Spalte (Länge)','Name','Datenbank entfernt.','Datenbank umbenannt.','Datenbank erstellt.','Datenbank geändert.','Neue Datenbank','Schema wurde gelöscht.','Neues Schema erstellt.','Schema geändert.','Aufrufen',array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),'Fremdschlüssel entfernt.','Fremdschlüssel geändert.','Fremdschlüssel erstellt.','Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.','Fremdschlüssel','Zieltabelle','Ändern','Spalte hinzufügen','View entfernt.','View geändert.','View erstellt.','Neue View erstellen','Ereignis entfernt.','Ereignis geändert.','Ereignis erstellt.','Ereignis ändern','Ereignis erstellen','Start','Ende','Jede','Nach der Ausführung erhalten','Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.','Funktion ändern','Prozedur ändern','Neue Funktion','Neue Prozedur','Typ des Rückgabewertes','Sequenz gelöscht.','Neue Sequenz erstellt.','Sequenz geändert.','Sequenz ändern','Neue Sequenz','Typ gelöscht.','Typ erstellt.','Typ ändern','Typ erstellen','Trigger entfernt.','Trigger geändert.','Trigger erstellt.','Trigger ändern','Trigger hinzufügen','Zeitpunkt','Ereignis','Benutzer entfernt.','Benutzer geändert.','Benutzer erstellt.','Hashed','Rutine','Erlauben','Verbieten',array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),'%d insgesamt','Anhalten','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte','Gesamtergebnis','Klonen','Importieren',' ','Tabellen sind entleert worden (truncate).','Tabellen verschoben.','Tabellen wurden kopiert.','Tabellen wurden entfernt (drop).','Tables have been optimized.','Tabellen und Views','Suche in Tabellen','Motor','Datengrösse','Indexgrösse','Freier Bereich','Datensätze','Analysieren','Optimieren','Prüfen','Reparieren','Entleeren (truncate)','In andere Datenbank verschieben','Verschieben','Kopieren','Sequenz','Zeitplan','Zur angegebenen Zeit','HH:MM:SS');break;case"fr":$R=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Système','Serveur','Utilisateur','Mot de passe','Base de données','Authentification','Authentification permanente','Afficher les données','Afficher la structure','Modifier une vue','Modifier la table','Nouvel élément','Dernière page','Modifier',array('%d octet','%d octets'),'Select','Fonctions','Agrégation','Rechercher','n\'importe où','Trier','décroissant','Limite','Longueur du texte','Action','Full table scan','Requête SQL','ouvrir','sauvegarder','Modifier la base de données','Modifier le schéma','Créer un schéma','Schéma de la base de données','Privilèges','Exporter','Déconnexion','base de données','schéma','Créer une nouvelle table','select','ltr','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','Base de données invalide.','Les bases de données ont été supprimées.','Sélectionner la base de données','Créer une base de données','Liste des processus','Variables','Statut','Version de %s : %s via l\'extension PHP %s','Authentifié en tant que : %s','Interclassement','Tables','Supprimer','Rafraîchir','Schéma','Schéma invalide.','Aucun résultat.','%.3f s','Clés étrangères','interclassement','ON DELETE','Nom de la colonne','Nom du paramètre','Type','Longueur','Options','Auto increment','Valeurs par défaut','Commentaire','Ajouter le prochain','Déplacer vers le haut','Déplacer vers le bas','Effacer','Vue','Table','Colonne','Index','Modifier les index','Source','Cible','ON UPDATE','Modifier','Ajouter une clé étrangère','Triggers','Ajouter un trigger','Lien permanent','Exporter','Sortie','Format','Routines','Évènements','Données','Créer un utilisateur','Erreur dans la requête',array('%d ligne','%d lignes'),array('Requête exécutée avec succès, %d ligne modifiée.','Requête exécutée avec succès, %d lignes modifiées.'),'Aucune commande à exécuter.',array('%d requête exécutée avec succès.','%d requêtes exécutées avec succès.'),'Importer un fichier','L\'importation de fichier est désactivée.','Exécuter','Arrêter en cas d\'erreur','Montrer seulement les erreurs','Depuis le serveur','Fichier %s du serveur Web','Exécuter le fichier','Historique','Effacer','Tout modifier','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Insérer','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer','La table a été effacée.','La table a été modifiée.','La table a été créée.','Créer une table','Le nombre maximum de champs est dépassé. Veuillez augmenter %s et %s.','Nom de la table','moteur','Partitionner par','Partitions','Nom de la partition','Valeurs','Index modifiés.','Type d\'index','Colonne (longueur)','Nom','La base de données a été supprimée.','La base de données a été renommée.','La base de données a été créée.','La base de données a été modifiée.','Créer une base de données','Le schéma a été supprimé.','Le schéma a été créé.','Le schéma a été modifié.','Appeler',array('La routine a été exécutée, %d ligne modifiée.','La routine a été exécutée, %d lignes modifiées.'),'La clé étrangère a été effacée.','La clé étrangère a été modifiée.','La clé étrangère a été créée.','Les colonnes de source et de destination doivent être du même type, il doit y avoir un index sur les colonnes de destination et les données référencées doivent exister.','Clé étrangère','Table visée','Modifier','Ajouter une colonne','La vue a été effacée.','La vue a été modifiée.','La vue a été créée.','Créer une vue','L\'évènement a été supprimé.','L\'évènement a été modifié.','L\'évènement a été créé.','Modifier un évènement','Créer un évènement','Démarrer','Terminer','Chaque','Conserver quand complété','La routine a été supprimée.','La routine a été modifiée.','La routine a été créée.','Modifier la fonction','Modifier la procédure','Créer une fonction','Créer une procédure','Type de retour','La séquence a été supprimée.','La séquence a été créée.','La séquence a été modifiée.','Modifier la séquence','Créer une séquence','Le type a été supprimé.','Le type a été créé.','Modifier le type','Créer un type','Le trigger a été supprimé.','Le trigger a été modifié.','Le trigger a été créé.','Modifier un trigger','Ajouter un trigger','Temps','Évènement','L\'utilisateur a été effacé.','L\'utilisateur a été modifié.','L\'utilisateur a été créé.','Haché','Routine','Grant','Revoke',array('%d processus a été arrêté.','%d processus ont été arrêtés.'),'%d au total','Arrêter',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière','résultat entier','Cloner','Importer',',','Les tables ont été tronquées.','Les tables ont été déplacées.','Les tables ont été copiées.','Les tables ont été effacées.','Tables have been optimized.','Tables et vues','Rechercher dans les tables','Moteur','Longueur des données','Longueur de l\'index','Espace inutilisé','Lignes','Analyser','Optimiser','Vérifier','Réparer','Tronquer','Déplacer vers une autre base de données','Déplacer','Copier','Séquences','Horaire','À un moment précis','HH:MM:SS');break;case"it":$R=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Sistema','Server','Utente','Password','Database','Autenticazione','Login permanente','Visualizza dati','Visualizza struttura','Modifica vista','Modifica tabella','Nuovo elemento','Ultima pagina','Modifica',array('%d byte','%d bytes'),'Seleziona','Funzioni','Aggregazione','Cerca','ovunque','Ordina','discendente','Limite','Lunghezza testo','Azione','Full table scan','Comando SQL','apri','salva','Modifica database','Modifica schema','Crea schema','Schema database','Privilegi','Dump','Esci','database','schema','Crea nuova tabella','seleziona','ltr','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Database non valido.','Database eliminati.','Seleziona database','Crea nuovo database','Elenco processi','Variabili','Stato','Versione %s: %s via estensione PHP %s','Autenticato come: %s','Collazione','Tabelle','Elimina','Aggiorna','Schema','Schema non valido.','Nessuna riga.','%.3f s','Chiavi esterne','collazione','ON DELETE','Nome colonna','Nome parametro','Tipo','Lunghezza','Opzioni','Auto incremento','Valori predefiniti','Commento','Aggiungi altro','Sposta su','Sposta giu','Rimuovi','Vedi','Tabella','Colonna','Indici','Modifica indici','Sorgente','Obiettivo','ON UPDATE','Modifica','Aggiungi foreign key','Trigger','Aggiungi trigger','Link permanente','Esporta','Risultato','Formato','Routine','Eventi','Dati','Crea utente','Errore nella query',array('%d riga','%d righe'),array('Esecuzione della query OK, %d riga interessata.','Esecuzione della query OK, %d righe interessate.'),'Nessun commando da eseguire.',array('%d query eseguita con successo.','%d query eseguite con successo.'),'Caricamento file','Caricamento file disabilitato.','Esegui','Stop su errore','Mostra solo gli errori','Dal server','Webserver file %s','Esegui file','Storico','Pulisci','Modifica tutto','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Inserisci','Salva','Salva e continua','Salva e inserisci un altro','Elimina','Tabella eliminata.','Tabella modificata.','Tabella creata.','Crea tabella','Troppi campi. Per favore aumentare %s e %s.','Nome tabella','motore','Partiziona per','Partizioni','Nome partizione','Valori','Indici modificati.','Tipo indice','Colonna (lunghezza)','Nome','Database eliminato.','Database rinominato.','Database creato.','Database modificato.','Crea database','Schema eliminato.','Schema creato.','Schema modificato.','Chiama',array('Routine chiamata, %d riga interessata.','Routine chiamata, %d righe interessate.'),'Foreign key eliminata.','Foreign key modificata.','Foreign key creata.','Le colonne sorgente e destinazione devono essere dello stesso tipo e ci deve essere un indice sulla colonna di destinazione e sui dati referenziati.','Foreign key','Tabella obiettivo','Cambia','Aggiungi colonna','Vista eliminata.','Vista modificata.','Vista creata.','Crea vista','Evento eliminato.','Evento modificato.','Evento creato.','Modifica evento','Crea evento','Inizio','Fine','Ogni','Al termine preservare','Routine eliminata.','Routine modificata.','Routine creata.','Modifica funzione','Modifica procedura','Crea funzione','Crea procedura','Return type','Sequenza eliminata.','Sequenza creata.','Sequenza modificata.','Modifica sequenza','Crea sequenza','Tipo definito dall\'utente eliminato.','Tipo definito dall\'utente creato.','Modifica tipo definito dall\'utente','Crea tipo definito dall\'utente','Trigger eliminato.','Trigger modificato.','Trigger creato.','Modifica trigger','Crea trigger','Orario','Evento','Utente eliminato.','Utente modificato.','Utente creato.','Hashed','Routine','Permetti','Revoca',array('%d processo interrotto.','%d processi interrotti.'),'%d in totale','Interrompi',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima','intero risultato','Clona','Importa','.','Le tabelle sono state svuotate.','Le tabelle sono state spostate.','Le tabelle sono state copiate.','Le tabelle sono state eliminate.','Tables have been optimized.','Tabelle e viste','Cerca nelle tabelle','Motore','Lunghezza dato','Lunghezza indice','Dati liberi','Righe','Analizza','Ottimizza','Controlla','Ripara','Svuota','Sposta in altro database','Sposta','Copia','Sequenza','Pianifica','A tempo prestabilito','HH:MM:SS');break;case"et":$R=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Andmebaasimootor','Server','Kasutajanimi','Parool','Andmebaas','Logi sisse','Jäta mind meelde','Vaata andmeid','Näita struktuuri','Muuda vaadet (VIEW)','Muuda tabeli struktuuri','Lisa kirje','Viimane lehekülg','Muuda',array('%d bait','%d baiti'),'Kuva','Funktsioonid','Liitmine','Otsi','vahet pole','Sorteeri','kahanevalt','Piira','Teksti pikkus','Tegevus','Full table scan','SQL-Päring','näita brauseris','salvesta failina','Muuda andmebaasi','Muuda struktuuri','Loo struktuur','Andmebaasi skeem','Õigused','Ekspordi','Logi välja','andmebaas','struktuur','Loo uus tabel','kuva','ltr','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Tundmatu andmebaas.','Andmebaasid on edukalt kustutatud.','Vali andmebaas','Loo uus andmebaas','Protsesside nimekiri','Muutujad','Staatus','%s versioon: %s, kasutatud PHP moodul: %s','Sisse logitud: %s','Tähetabel','Tabelid','Kustuta','Uuenda','Struktuur','Sobimatu skeema.','Sissekanded puuduvad.','%.3f s','Võõrvõtmed (foreign key)','tähetabel','ON DELETE','Veeru nimi','Parameetri nimi','Tüüp','Pikkus','Valikud','Automaatselt suurenev','Vaikimisi väärtused','Kommentaar','Lisa järgmine','Liiguta ülespoole','Liiguta allapoole','Eemalda','Vaata','Tabel','Veerg','Indeksid','Muuda indekseid','Allikas','Sihtkoht','ON UPDATE','Muuda','Lisa võõrvõti','Päästikud (trigger)','Lisa päästik (TRIGGER)','Püsilink','Ekspordi','Väljund','Formaat','Protseduurid','Sündmused (EVENTS)','Andmed','Loo uus kasutaja','Päringus esines viga','%d rida','Päring õnnestus, mõjutatatud ridu: %d.','Käsk puudub.',array('%d päring edukalt käivitatud.','%d päringut edukalt käivitatud.'),'Faili üleslaadimine','Failide üleslaadimine on keelatud.','Käivita','Peatuda vea esinemisel','Kuva vaid veateateid','Serverist','Fail serveris: %s','Käivita fail','Ajalugu','Puhasta','Muuda kõiki','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Sisesta','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Tabel on edukalt kustutatud.','Tabeli andmed on edukalt muudetud.','Tabel on edukalt loodud.','Loo uus tabel','Maksimaalne väljade arv ületatud. Palun suurendage %s ja %s.','Tabeli nimi','andmebaasimootor','Partitsiooni','Partitsioonid','Partitsiooni nimi','Väärtused','Indeksite andmed on edukalt uuendatud.','Indeksi tüüp','Veerg (pikkus)','Nimi','Andmebaas on edukalt kustutatud.','Andmebaas on edukalt ümber nimetatud.','Andmebaas on edukalt loodud.','Andmebaasi struktuuri uuendamine õnnestus.','Loo uus andmebaas','Struktuur on edukalt kustutatud.','Struktuur on edukalt loodud.','Struktuur on edukalt muudetud.','Käivita','Protseduur täideti edukalt, mõjutatud ridu: %d.','Võõrvõti on edukalt kustutatud.','Võõrvõtme andmed on edukalt muudetud.','Võõrvõri on edukalt loodud.','Lähte- ja sihtveerud peavad eksisteerima ja omama sama andmetüüpi, sihtveergudel peab olema määratud indeks ning viidatud andmed peavad eksisteerima.','Võõrvõti','Siht-tabel','Muuda','Lisa veerg','Vaade (VIEW) on edukalt kustutatud.','Vaade (VIEW) on edukalt muudetud.','Vaade (VIEW) on edukalt loodud.','Loo uus vaade (VIEW)','Sündmus on edukalt kustutatud.','Sündmuse andmed on edukalt uuendatud.','Sündmus on edukalt loodud.','Muuda sündmuse andmeid','Loo uus sündmus (EVENT)','Alusta','Lõpeta','Iga','Lõpetamisel jäta sündmus alles','Protseduur on edukalt kustutatud.','Protseduuri andmed on edukalt muudetud.','Protseduur on edukalt loodud.','Muuda funktsiooni','Muuda protseduuri','Loo uus funktsioon','Loo uus protseduur','Tagastustüüp','Jada on edukalt kustutatud.','Jada on edukalt loodud.','Jada on edukalt muudetud.','Muuda jada','Loo jada','Tüüp on edukalt kustutatud.','Tüüp on edukalt loodud.','Muuda tüüpi','Loo tüüp','Päästik on edukalt kustutatud.','Päästiku andmed on edukalt uuendatud.','Uus päästik on edukalt loodud.','Muuda päästiku andmeid','Loo uus päästik (TRIGGER)','Aeg','Sündmus','Kasutaja on edukalt kustutatud.','Kasutaja andmed on edukalt muudetud.','Kasutaja on edukalt lisatud.','Häshitud (Hashed)','Protseduur','Anna','Eemalda',array('Protsess on edukalt peatatud (%d).','Valitud protsessid (%d) on edukalt peatatud.'),'Kokku: %d','Peata','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','Täielikud tulemused','Kloon','Impordi',',','Validud tabelid on edukalt tühjendatud.','Valitud tabelid on edukalt liigutatud.','Tabelid on edukalt kopeeritud.','Valitud tabelid on edukalt kustutatud.','Tables have been optimized.','Tabelid ja vaated','Otsi kogu andmebaasist','Implementatsioon','Andmete pikkus','Indeksi pikkus','Vaba ruumi','Ridu','Analüüsi','Optimeeri','Kontrolli','Paranda','Tühjenda','Liiguta teise andmebaasi','Liiguta','Kopeeri','Jadad (sequences)','Ajakava','Antud ajahetkel','HH:MM:SS');break;case"hu":$R=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Adatbázis','Szerver','Felhasználó','Jelszó','Adatbázis','Belépés','Emlékezz rám','Tartalom','Struktúra','Nézet módosítása','Tábla módosítása','Új tétel','Utolsó oldal','Szerkeszt',array('%d bájt','%d bájt','%d bájt'),'Kiválasztás','Funkciók','Aggregálás','Keresés','bárhol','Sorba rendezés','csökkenő','korlát','Szöveg hossz','Művelet','Full table scan','SQL parancs','megnyit','ment','Adatbázis módosítása','Séma módosítása','Séma létrehozása','Adatbázis séma','Privilégiumok','Exportálás','Kilépés','adatbázis','séma','Új tábla','kiválasztás','ltr','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','Érvénytelen adatbázis.','Adatbázis eldobva.','Adatbázis kiválasztása','Új adatbázis','Folyamatok','Változók','Állapot','%s verzió: %s, PHP: %s','Belépve: %s','Egybevetés','Táblák','Eldob','Frissítés','Séma','Érvénytelen séma.','Nincs megjeleníthető eredmény.','%.3f másodperc','Idegen kulcs','egybevetés','törléskor','Oszlop neve','Paraméter neve','Típus','Hossz','Opciók','Automatikus növelés','Alapértelmezett értékek','Megjegyzés','Következő hozzáadása','Felfelé','Lefelé','Eltávolítás','Nézet','Tábla','Oszlop','Indexek','Index módosítása','Forrás','Cél','frissítéskor','Módosítás','Idegen kulcs hozzadása','Trigger','Trigger hozzáadása','Hivatkozás','Export','Kimenet','Formátum','Rutinok','Esemény','Adat','Felhasználó hozzáadása','Hiba a lekérdezésben',array('%d sor','%d sor','%d sor'),array('Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.'),'Nincs végrehajtható parancs.','%d sikeres lekérdezés.','Fájl feltöltése','A fájl feltöltés le van tiltva.','Végrehajt','Hiba esetén megáll','Csak a hibák mutatása','Szerverről','Webszerver fájl %s','Fájl futtatása','Történet','Törlés','Összes szerkesztése','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Beszúr','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés','A tábla eldobva.','A tábla módosult.','A tábla létrejött.','Tábla létrehozása','A maximális mezőszámot elérted. Növeld meg ezeket: %s, %s.','Tábla név','motor','Particionálás ezzel','Particiók','Partició neve','Értékek','Az indexek megváltoztak.','Index típusa','Oszop (méret)','Név','Az adatbázis eldobva.','Az adadtbázis átnevezve.','Az adatbázis létrejött.','Az adatbázis módosult.','Adatbázis létrehozása','Séma eldobva.','Séma létrejött.','Séma módosult.','Meghív',array('Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.'),'Idegen kulcs eldobva.','Idegen kulcs módosult.','Idegen kulcs létrejött.','A forrás és cél oszlopoknak azonos típusúak legyenek, a cél oszlopok indexeltek legyenek, és a hivatkozott adatnak léteznie kell.','Idegen kulcs','Cél tábla','Változtat','Oszlop hozzáadása','A nézet eldobva.','A nézet módosult.','A nézet létrejött.','Nézet létrehozása','Az esemény eldobva.','Az esemény módosult.','Az esemény létrejött.','Esemény módosítása','Esemény létrehozása','Kezd','Vége','Minden','Befejezéskor megőrzi','A rutin eldobva.','A rutin módosult.','A rutin létrejött.','Funkció módosítása','Eljárás módosítása','Funkció létrehozása','Eljárás létrehozása','Visszatérési érték','Sorozat eldobva.','Sorozat létrejött.','Sorozat módosult.','Sorozat módosítása','Sorozat létrehozása','Típus eldobva.','Típus létrehozva.','Típus módosítása','Típus létrehozása','A trigger eldobva.','A trigger módosult.','A trigger létrejött.','Trigger módosítása','Trigger létrehozása','Idő','Esemény','A felhasználó eldobva.','A felhasználó módosult.','A felhasználó létrejött.','Hashed','Rutin','Engedélyezés','Visszavonás',array('%d folyamat leállítva.','%d folyamat leállítva.','%d folyamat leállítva.'),'összesen %d','Leállít',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó','összes eredményt mutatása','Klónoz','Importálás',' ','A tábla felszabadítva.','Táblák áthelyezve.','Táblák átmásolva.','Táblák eldobva.','Tables have been optimized.','Táblák és nézetek','Keresés a táblákban','Motor','Méret','Index hossz','Adat szabad','Oszlop','Elemzés','Optimalizál','Ellenőrzés','Javít','Felszabadít','Áthelyezés másik adatbázisba','Áthelyez','Másolás','Sorozatok','Ütemzés','Megadott időben','óó:pp:mm');break;case"pl":$R=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Rodzaj bazy','Serwer','Użytkownik','Hasło','Baza danych','Zaloguj się','Zapamiętaj sesję','Pokaż dane','Struktura tabeli','Zmień perspektywę','Zmień tabelę','Nowy rekord','Ostatnia strona','Edytuj',array('%d bajt','%d bajty','%d bajtów'),'pokaż','Funkcje','Agregacje','Szukaj','gdziekolwiek','Sortuj','malejąco','Limit','Długość tekstu','Czynność','Full table scan','Zapytanie SQL','otwórz','zapisz','Zmień bazę danych','Zmień schemat','Utwórz schemat','Schemat bazy danych','Uprawnienia użytkowników','Eksport','Wyloguj','baza danych','schemat','Utwórz nową tabelę','przeglądaj','ltr','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Nie znaleziono bazy danych.','Bazy danych zostały usunięte.','Wybierz bazę danych','Utwórz nową bazę danych','Lista procesów','Zmienne','Status','Wersja %s: %s za pomocą %s','Zalogowany jako: %s','Porównywanie znaków','Tabele','Usuń','Odśwież','Schemat','Nieprawidłowy schemat.','Brak rekordów.','%.3f s','Klucze obce','porównywanie znaków','W przypadku usunięcia','Nazwa kolumny','Nazwa parametru','Typ','Długość','Opcje','Auto Increment','Wartości domyślne','Komentarz','Dodaj następny','Przesuń w górę','Przesuń w dół','Usuń','Perspektywa','Tabela','Kolumna','Indeksy','Zmień indeksy','Źródło','Cel','W przypadku zmiany','Zmień','Dodaj klucz obcy','Wyzwalacze','Dodaj wyzwalacz','Trwały link','Eksport','Rezultat','Format','Procedury i funkcje','Wydarzenia','Dane','Dodaj użytkownika','Błąd w zapytaniu',array('%d rekord','%d rekordy','%d rekordów'),array('Zapytanie wykonane pomyślnie, zmieniono %d rekord.','Zapytanie wykonane pomyślnie, zmieniono %d rekordy.','Zapytanie wykonane pomyślnie, zmieniono %d rekordów.'),'Nic do wykonania.',array('Pomyślnie wykonano %d zapytanie.','Pomyślnie wykonano %d zapytania.','Pomyślnie wykonano %d zapytań.'),'Wgranie pliku','Wgrywanie plików jest wyłączone.','Wykonaj','Zatrzymaj w przypadku błędu','Pokaż tylko błędy','Z serwera','Plik %s na serwerze','Uruchom z pliku','Historia','Wyczyść','Edytuj wszystkie','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Dodaj','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń','Tabela została usunięta.','Tabela została zmieniona.','Tabela została utworzona.','Utwórz tabelę','Przekroczono maksymalną liczbę pól. Zwiększ %s i %s.','Nazwa tabeli','składowanie','Partycjonowanie','Partycje','Nazwa partycji','Wartości','Indeksy zostały zmienione.','Typ indeksu','Kolumna (długość)','Nazwa','Baza danych została usunięta.','Nazwa bazy danych została zmieniona.','Baza danych została utworzona.','Baza danych została zmieniona.','Utwórz bazę danych','Schemat został usunięty.','Schemat został utworzony.','Schemat został zmieniony.','Uruchom',array('Procedura została uruchomiona, zmieniono %d rekord.','Procedura została uruchomiona, zmieniono %d rekordy.','Procedura została uruchomiona, zmieniono %d rekordów.'),'Klucz obcy został usunięty.','Klucz obcy został zmieniony.','Klucz obcy został utworzony.','Źródłowa i docelowa kolumna muszą być tego samego typu, powinien istnieć indeks na docelowej kolumnie oraz muszą istnieć dane referencyjne.','Klucz obcy','Tabela docelowa','Zmień','Dodaj kolumnę','Perspektywa została usunięta.','Perspektywa została zmieniona.','Perspektywa została utworzona.','Utwórz perspektywę','Wydarzenie zostało usunięte.','Wydarzenie zostało zmienione.','Wydarzenie zostało utworzone.','Zmień wydarzenie','Utwórz wydarzenie','Początek','Koniec','Wykonuj co','Nie kasuj wydarzenia po przeterminowaniu','Procedura została usunięta.','Procedura została zmieniona.','Procedura została utworzona.','Zmień funkcję','Zmień procedurę','Utwórz funkcję','Utwórz procedurę','Zwracany typ','Sekwencja została usunięta.','Sekwencja została utworzona.','Sekwencja została zmieniona.','Zmień sekwencję','Utwórz sekwencję','Typ został usunięty.','Typ został utworzony.','Zmień typ','Utwórz typ','Wyzwalacz został usunięty.','Wyzwalacz został zmieniony.','Wyzwalacz został utworzony.','Zmień wyzwalacz','Utwórz wyzwalacz','Czas','Wydarzenie','Użytkownik został usunięty.','Użytkownik został zmieniony.','Użytkownik został dodany.','Zahashowane','Procedura','Uprawnienia','Usuń uprawnienia',array('Przerwano %d wątek.','Przerwano %d wątki.','Przerwano %d wątków.'),'%d w sumie','Przerwij wykonywanie',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni','wybierz wszystkie','Duplikuj','Import',' ','Tabele zostały opróżnione.','Tabele zostały przeniesione.','Tabele zostały skopiowane.','Tabele zostały usunięte.','Tabele zostały zoptymalizowane.','Tabele i perspektywy','Wyszukaj we wszystkich tabelach','Składowanie','Rozmiar danych','Rozmiar indeksów','Wolne miejsce','Liczba rekordów','Analizuj','Optymalizuj','Sprawdź','Napraw','Opróżnij','Przenieś do innej bazy danych','Przenieś','Kopiuj','Sekwencje','Harmonogram','O danym czasie','nie');break;case"ca":$R=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Sistema','Servidor','Nom d\'usuari','Contrasenya','Base de dades','Inicia la sessió','Sessió permanent','Selecciona dades','Mostra l\'estructura','Modifica la vista','Modifica la taula','Nou element','Darrera plana','Edita',array('%d byte','%d bytes'),'Selecciona','Funcions','Agregació','Cerca','a qualsevol lloc','Ordena','descendent','Límit','Longitud del text','Acció','Full table scan','Ordre SQL','obre','desa','Modifica la base de dades','Modifica l\'esquema','Crea un esquema','Esquema de la base de dades','Privilegis','Exporta','Desconnecta','base de dades','esquema','Crea una nova taula','registres','ltr','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','Base de dades invàlida.','S\'han suprimit les bases de dades.','Selecciona base de dades','Crea una nova base de dades','Llista de processos','Variables','Estat','Versió %s: %s amb l\'extensió de PHP %s','Connectat com: %s','Compaginació','Taules','Suprimeix','Refresca','Esquema','Esquema invàlid.','No hi ha cap registre.','%.3f s','Claus foranes','compaginació','ON DELETE','Nom de la columna','Nom del paràmetre','Tipus','Llargada','Opcions','Increment automàtic','Valors per defecte','Comentari','Afegeix el següent','Mou a dalt','Mou a baix','Suprimeix','Vista','Taula','Columna','Índexs','Modifica els índexs','Font','Destí','ON UPDATE','Modifica','Afegeix una clau forana','Activadors','Afegeix un activador','Enllaç permanent','Exporta','Sortida','Format','Rutines','Events','Dades','Crea un usuari','Error en la consulta',array('%d registre','%d registres'),array('Consulta executada correctament, %d registre modificat.','Consulta executada correctament, %d registres modificats.'),'Cap comanda per executar.',array('%d consulta executada correctament.','%d consultes executades correctament.'),'Adjunta un fitxer','L\'ddjunció de fitxers està desactivada.','Executa','Atura en trobar un error','Mostra només els errors','En el servidor','Fitxer %s del servidor web','Executa el fitxer','Història','Suprimeix','Edita-ho tot','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Insereix','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix','S\'ha suprimit la taula.','S\'ha modificat la taula.','S\'ha creat la taula.','Crea una taula','S\'ha assolit el nombre màxim de camps. Incrementa %s i %s.','Nom de la taula','motor','Fes particions segons','Particions','Nom de la partició','Valors','S\'han modificat els índexs.','Tipus d\'índex','Columna (longitud)','Nom','S\'ha suprimit la base de dades.','S\'ha canviat el nom de la base de dades.','S\'ha creat la base de dades.','S\'ha modificat la base de dades.','Crea una base de dades','S\'ha suprimit l\'esquema.','S\'ha creat l\'esquema.','S\'ha modificat l\'esquema.','Crida',array('S\'ha cridat la rutina, %d registre modificat.','S\'ha cridat la rutina, %d registres modificats.'),'S\'ha suprimit la clau forana.','S\'ha modificat la clau forana.','S\'ha creat la clau forana.','Les columnes origen i destí han de ser del mateix tipus, la columna destí ha d\'estar indexada i les dades referenciades han d\'existir.','Clau forana','Taula de destí','Canvi','Afegeix una columna','S\'ha suprimit la vista.','S\'ha modificat la vista.','S\'ha creat la vista.','Crea una vista','S\'ha suprimit l\'event.','S\'ha modificat l\'event.','S\'ha creat l\'event.','Modifica l\'event','Crea un event','Comença','Acaba','Cada','Conservar en completar','S\'ha suprimit la rutina.','S\'ha modificat la rutina.','S\'ha creat la rutina.','Modifica la funció','Modifica el procediment','Crea una funció','Crea un procediment','Tipus retornat','S\'ha suprimit la seqüència.','S\'ha creat la seqüència.','S\'ha modificat la seqüència.','Modifica la seqüència','Crea una seqüència','S\'ha suprimit el tipus.','S\'ha creat el tipus.','Modifica el tipus','Crea un tipus','S\'ha suprimit l\'activador.','S\'ha modificat l\'activador.','S\'ha creat l\'activador.','Modifica l\'activador','Crea un activador','Temps','Event','S\'ha suprimit l\'usuari.','S\'ha modificat l\'usuari.','S\'ha creat l\'usuari.','Hashed','Rutina','Grant','Revoke',array('S\'ha aturat %d procés.','S\'han aturat %d processos.'),'%d en total','Atura',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera','tots els resultats','Clona','Importa',',','S\'han escapçat les taules.','S\'han desplaçat les taules.','S\'han copiat les taules.','S\'han suprimit les taules.','Tables have been optimized.','Taules i vistes','Cerca dades en les taules','Motor','Longitud de les dades','Longitud de l\'índex','Espai lliure','Files','Analitza','Optimitza','Verifica','Repara','Escapça','Desplaça a una altra base de dades','Desplaça','Còpia','Seqüències','Horari','A un moment donat','HH:MM:SS');break;case"pt":$R=array('Está seguro?','Não é possível enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo já existe.','Tipos definido pelo usuário','Números','Data e hora','Cadena','Binário','Rede','Geometria','Listas','Motor de Base de dados','Servidor','Usuário','Senha','Base de dados','Entrar','Salvar Senha','Selecionar dados','Mostrar estrutura','Modificar vista','Modificar estrutura','Novo Registro','Última página','Modificar',array('%d byte','%d bytes'),'Selecionar','Funções','Adições','Procurar','qualquer local','Ordenar','decrescente','Limite','Tamanho de texto','Ação','Full table scan','Comando SQL','mostrar','salvas','Modificar Base de dados','Modificar esquema','Criar esquema','Esquema de Base de dados','Privilégios','Exportar','Sair','base de dados','esquema','Nova tabela','registros','ltr','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não há extension','Nenhuma das extensões PHP suportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Base de dados inválida.','Bases de dados eliminadas.','Selecionar Base de dados','Criar nova base de dados','Lista de processos','Variáveis','Estado','Versão %s: %s através da extensão PHP %s','Logado como: %s','Colação','Tabelas','Remover','Atualizar','Esquema','Esquema inválido.','Não existem registros.','%.3f s','Chaves foráneas','collation','ON DELETE','Nome da coluna','Nome de Parâmetro','Tipo','Tamanho','Opções','Incremento Automático','Valores predeterminados','Comentário','Adicionar proximo','Mover acima','Mover abaixo','Remover','Visualizar','Tabela','Coluna','Índices','Modificar índices','Origem','Destino','ON UPDATE','Modificar','Adicionar Chave foránea','Triggers','Adicionar trigger','Permanent link','Exportar','Saída','Formato','Procedimentos','Eventos','Dados','Criar Usuário','Erro na consulta',array('%d registro','%d registros'),array('Consulta executada, %d registro afetado.','Consulta executada, %d registros afetados.'),'Nenhum comando para executar.',array('%d consulta sql executada corretamente.','%d consultas sql executadas corretamente.'),'Importar arquivo','Importação de arquivos desablilitada.','Executar','Parar em caso de erro','Mostrar somente erros','Desde servidor','Arquivo do servidor web %s','Executar Arquivo','Histórico','Limpar','Edit all','Registro eliminado.','Registro modificado.','Registro%s inserido.','Inserir','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar','Tabela eliminada.','Tabela modificada.','Tabela criada.','Criar tabela','Quantidade máxima de campos permitidos excedidos. Por favor aumente %s e %s.','Nome da tabela','motor','Particionar por','Partições','Nome da Partição','Valores','Índices modificados.','Tipo de índice','coluna (tamanho)','Nome','Base de dados eliminada.','Base de dados renomeada.','Base de dados criada.','Base de dados modificada.','Criar Base de dados','Esquema eliminado.','Esquema criado.','Esquema modificado.','Chamar',array('Consulta executada, %d registro afetado.','Consulta executada, %d registros afetados.'),'Chave externa eliminada.','Chave externa modificada.','Chave externa criada.','As colunas de origen e destino devem ser do mesmo tipo, deve existir um índice entre as colunas de destino e o registro referenciado deve existir.','Chave externa','Tabela de destino','Modificar','Adicionar coluna','Vista eliminada.','Vista modificada.','Vista criada.','Criar vista','Evento eliminado.','Evento modificado.','Evento criado.','Modificar Evento','Criar Evento','Início','Fim','Cada','Ao completar preservar','Procedimento eliminado.','Procedimento modificado.','Procedimento criado.','Modificar Função','Modificar procedimento','Criar função','Criar procedimento','Tipo de valor de regreso','Sequência eliminada.','Sequência criada.','Sequência modificada.','Modificar sequência','Criar sequências','Tipo eliminado.','Tipo criado.','Modificar tipo','Criar tipo','Trigger eliminado.','Trigger modificado.','Trigger criado.','Modificar Trigger','Adicionar Trigger','Tempo','Evento','Usuário eliminado.','Usuário modificado.','Usuário criado.','Hash','Rotina','Conceder','Impedir',array('%d processo terminado.','%d processos terminados.'),'%d no total','Parar',array('%d item afetado.','%d itens afetados.'),'Clique duas vezes sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','modificar','Relações','Utilize o link modificar para alterar.','Página','último','resultado completo','Clonar','Importar',' ','Tabelas truncadas (truncate).','As Tabelas foram movidas.','Tables have been copied.','Tabelas eliminadas.','Tables have been optimized.','Tabelas e vistas','Buscar dados nas Tabelas','Motor','Tamanho de dados','Tamanho de índice','Espaço Livre','Registros','Analizar','Otimizar','Verificar','Reparar','Truncar','Mover outra Base de dados','Mover','Copy','Sequências','Agenda','A hora determinada','agora');break;case"sl":$R=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Sistem','Strežnik','Uporabniško ime','Geslo','Baza','Prijavi se','Trajna prijava','Izberi podatke','Pokaži zgradbo','Spremeni pogled','Spremeni tabelo','Nov predmet','Zadnja stran','Uredi',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'Izberi','Funkcije','Združitev','Išči','kjerkoli','Sortiraj','padajoče','Limita','Dolžina teksta','Dejanje','Full table scan','Ukaz SQL','odpri','shrani','Spremeni bazo','Spremeni shemo','Ustvari shemo','Shema baze','Pravice','Izvozi','Odjavi se','baza','shema','Ustvari novo tabelo','izberi','ltr','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Neveljavna baza.','Baze so zavržene.','Izberi bazo','Ustvari novo bazo','Seznam procesov','Spremenljivke','Stanje','Verzija %s: %s preko dodatka za PHP %s','Prijavljen kot: %s','Zbiranje','Tabele','Zavrzi','Osveži','Shema','Neveljavna shema.','Ni vrstic.','%.3f s','Tuji ključi','zbiranje','pri brisanju','Ime stolpca','Ime parametra','Tip','Dolžina','Možnosti','Samodejno povečevanje','Privzete vrednosti','Komentar','Dodaj naslednjega','Premakni gor','Premakni dol','Odstrani','Pogledi','Tabela','Stolpec','Indeksi','Spremeni indekse','Izvor','Cilj','pri posodabljanju','Spremeni','Dodaj tuj ključ','Sprožilniki','Dodaj sprožilnik','Permanent link','Izvozi','Izhod rezultata','Format','Postopki','Dogodki','Podatki','Ustvari uporabnika','Napaka v poizvedbi',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),array('Poizvedba se je uspešno izvedla, spremenjena je %d vrstica.','Poizvedba se je uspešno izvedla, spremenjeni sta %d vrstici.','Poizvedba se je uspešno izvedla, spremenjene so %d vrstice.','Poizvedba se je uspešno izvedla, spremenjenih je %d vrstic.'),'Ni ukazov za izvedbo.',array('Uspešno se je končala %d poizvedba.','Uspešno sta se končali %d poizvedbi.','Uspešno so se končale %d poizvedbe.','Uspešno se je končalo %d poizvedb.'),'Naloži datoteko','Nalaganje datotek je onemogočeno.','Izvedi','Ustavi ob napaki','Pokaži samo napake','z strežnika','Datoteka na spletnem strežniku %s','Zaženi datoteko','Zgodovina','Počisti','Edit all','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Vstavi','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši','Tabela je zavržena.','Tabela je spremenjena.','Tabela je ustvarjena.','Ustvari tabelo','Največje število dovoljenih polje je preseženo. Prosimo, povečajte %s in %s.','Ime tabele','pogon','Porazdeli po','Porazdelitve','Ime porazdelitve','Vrednosti','Indeksi so spremenjeni.','Tip indeksa','Stolpec (dolžina)','Naziv','Baza je zavržena.','Baza je preimenovana.','Baza je ustvarjena.','Baza je spremenjena.','Ustvari bazo','Shema je zavržena.','Shema je ustvarjena.','Shema je spremenjena.','Pokliči',array('Klican je bil postopek, spremenjena je %d vrstica.','Klican je bil postopek, spremenjeni sta %d vrstici.','Klican je bil postopek, spremenjene so %d vrstice.','Klican je bil postopek, spremenjenih je %d vrstic.'),'Tuj ključ je zavržen.','Tuj ključ je spremenjen.','Tuj ključ je ustvarjen.','Izvorni in ciljni stolpec mora imeti isti podatkovni tip. Obstajati mora indeks na ciljnih stolpcih in obstajati morajo referenčni podatki.','Tuj ključ','Ciljna tabela','Spremeni','Dodaj stolpec','Pogled je zavržen.','Pogled je spremenjen.','Pogled je ustvarjen.','Ustvari pogled','Dogodek je zavržen.','Dogodek je spremenjen.','Dogodek je ustvarjen.','Spremeni dogodek','Ustvari dogodek','Začetek','Konec','vsake','Po zaključku ohrani','Postopek je zavržen.','Postopek je spremenjen.','Postopek je ustvarjen.','Spremeni funkcijo','Spremeni postopek','Ustvari funkcijo','Ustvari postopek','Vračalni tip','Sekvenca je zavržena.','Sekvence je ustvarjena.','Sekvence je spremenjena.','Spremni sekvenco','Ustvari sekvenco','Tip je zavržen.','Tip je ustvarjen.','Spremeni tip','Ustvari tip','Sprožilnik je odstranjen.','Sprožilnik je spremenjen.','Sprožilnik je ustvarjen.','Spremeni sprožilnik','Ustvari sprožilnik','Čas','Dogodek','Uporabnik je odstranjen.','Uporabnik je spremenjen.','Uporabnik je ustvarjen.','Zakodirano','Postopek','Dovoli','Odvzemi',array('Končan je %d proces.','Končana sta %d procesa.','Končani so %d procesi.','Končanih je %d procesov.'),'Skupaj %d','Končaj',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja','cel razultat','Kloniraj','Uvozi',' ','Tabele so skrajšane.','Tabele so premaknjene.','Tabele so kopirane.','Tabele so zavržene.','Tables have been optimized.','Tabele in pogledi','Išče podatke po tabelah','Pogon','Velikost podatkov','Velikost indeksa','Podatkov prosto ','Vrstic','Analiziraj','Optimiziraj','Preveri','Popravi','Skrajšaj','Premakni v drugo bazo','Premakni','Kopiraj','Sekvence','Urnik','v danem času','zdaj');break;case"lt":$R=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Sistema','Serveris','Vartotojas','Slaptažodis','Duomenų bazė','Prisijungti','Pastovus prisijungimas','Atrinkti duomenis','Rodyti struktūrą','Redaguoti vaizdą','Redaguoti lentelę','Naujas įrašas','Paskutinis puslapis','Redaguoti',array('%d baitas','%d baigai','%d baitų'),'Atrinkti','Funkcijos','Agregacija','Ieškoti','visur','Rikiuoti','mažėjimo tvarka','Limitas','Teksto ilgis','Veiksmas','Full table scan','SQL užklausa','atidaryti','išsaugoti','Redaguoti duomenų bazę','Keisti schemą','Sukurti schemą','Duomenų bazės schema','Privilegijos','Eksportuoti','Atsijungti','duomenų bazė','schema','Sukurti naują lentelę','atrinkti','ltr','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Neteisinga duomenų bazė.','Duomenų bazės panaikintos.','Pasirinkti duomenų bazę','Sukurti naują duomenų bazę','Procesų sąrašas','Kintamieji','Būsena','%s versija: %s per PHP plėtinį %s','Prisijungęs kaip: %s','Lyginimas','Lentelės','Pašalinti','Atnaujinti','Schema','Neteisinga schema.','Nėra įrašų.','%.3f s','Išoriniai raktai','palyginimas','Ištrinant','Stulpelio pavadinimas','Parametro pavadinimas','Tipas','Ilgis','Nustatymai','Auto Increment','Reikšmės pagal nutylėjimą','Komentaras','Pridėti kitą','Perkelti į viršų','Perkelti žemyn','Pašalinti','Vaizdas','Lentelė','Stulpelis','Indeksai','Redaguoti indeksus','Šaltinis','Tikslas','Atnaujinant','Redaguoti','Pridėti išorinį raktą','Trigeriai','Pridėti trigerį','Pastovi nuoroda','Eksportas','Išvestis','Formatas','Procedūros','Įvykiai','Duomenys','Sukurti vartotoją','Klaida užklausoje',array('%d įrašas','%d įrašai','%d įrašų'),array('Užklausa įvykdyta. Pakeistas %d įrašas.','Užklausa įvykdyta. Pakeisti %d įrašai.','Užklausa įvykdyta. Pakeista %d įrašų.'),'Nėra vykdomų užklausų.',array('%d užklausa įvykdyta.','%d užklausos įvykdytos.','%d užklausų įvykdyta.'),'Failo įkėlimas','Failų įkėlimas išjungtas.','Vykdyti','Sustabdyti esant klaidai','Rodyti tik klaidas','Iš serverio','Failas %s iš serverio','Vykdyti failą','Istorija','Išvalyti','Redaguoti visus','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Įrašyti','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti','Lentelė pašalinta.','Lentelė pakeista.','Lentelė sukurta.','Sukurti lentelę','Viršytas maksimalus leidžiamų stulpelių kiekis. Padidinkite %s ir %s.','Lentelės pavadinimas','variklis','Skirstyti pagal','Skirsniai','Skirsnio pavadinimas','Reikšmės','Indeksai pakeisti.','Indekso tipas','Stulpelis (ilgis)','Pavadinimas','Duomenų bazė panaikinta.','Duomenų bazė pervadinta.','Duomenų bazė sukurta.','Duomenų bazė pakeista.','Sukurti duomenų bazę','Schema pašalinta.','Schema sukurta.','Schema pakeista.','Vykdyti',array('Procedūra įvykdyta. %d įrašas pakeistas.','Procedūra įvykdyta. %d įrašai pakeisti.','Procedūra įvykdyta. %d įrašų pakeista.'),'Išorinis raktas pašalintas.','Išorinis raktas pakeistas.','Išorinis raktas sukurtas.','Šaltinio ir tikslinis stulpelis turi būti to paties tipo, tiksliniame stulpelyje turi būti naudojamas indeksas ir duomenys turi egzistuoti.','Išorinis raktas','Tikslinė lentelė','Pakeisti','Pridėti stulpelį','Vaizdas pašalintas.','Vaizdas pakeistas.','Vaizdas sukurtas.','Sukurti vaizdą','Įvykis pašalintas.','Įvykis pakeistas.','Įvykis sukurtas.','Redaguoti įvykį','Sukurti įvykį','Pradžia','Pabaiga','Kas','Įvykdžius išsaugoti','Procedūra pašalinta.','Procedūra pakeista.','Procedūra sukurta.','Keisti funkciją','Keiskti procedūrą','Sukurti funkciją','Sukurti procedūrą','Grąžinimo tipas','Seka pašalinta.','Seka sukurta.','Seka pakeista.','Keisti seką','Sukurti seką','Tipas pašalintas.','Tipas sukurtas.','Keisti tipą','Sukurti tipą','Trigeris pašalintas.','Trigeris pakeistas.','Trigeris sukurtas.','Keisti trigerį','Sukurti trigerį','Laikas','Įvykis','Vartotojas ištrintas.','Vartotojo duomenys pakeisti.','Vartotojas sukurtas.','Šifruotas','Procedūra','Suteikti','Atšaukti',array('%d procesas nutrauktas.','%d procesai nutraukti.','%d procesų nutraukta.'),'%d iš viso','Nutraukti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','redaguoti','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis','visas rezultatas','Klonuoti','Importas',' ','Lentelės buvo ištuštintos.','Lentelės perkeltos.','Lentelės nukopijuotos.','Lentelės pašalintos.','Tables have been optimized.','Lentelės ir vaizdai','Ieškoti duomenų lentelėse','Variklis','Duomenų ilgis','Indekso ilgis','Laisvos vietos','Įrašai','Analizuoti','Optimizuoti','Patikrinti','Pataisyti','Tuštinti','Perkelti į kitą duomenų bazę','Perkelti','Kopijuoti','Sekos','Grafikas','Nurodytu laiku','dabar');break;case"tr":$R=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Sistem','Sunucu','Kullanıcı','Parola','Veritabanı','Giriş','Kalıcı giriş','Veri seç','Yapıyı göster','Değişim görünüm','Tablo değiştir','Yeni öğe','Son sayfa','Düzen',array('%d bayt','%d kadar bayt'),'Seç','Fonksiyonlar','Kümeleme','Arama','herhangi bir yer','Sırala','azalan','sınır','Yazı uzunluğu','Eylem','Full table scan','SQL komutu','aç','kaydet','Veritabanı değiştir','Değişim şeması','Yaratım şeması','Veritabanı şeması','İzinler','Döküm','Çıkış','veritabanı','şema','Yeni tablo yarat','seç','ltr','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Geçersiz veritabanı.','Veritabanları düşüüldü.','Veritabanı seç','Yeni veritabanı yarat','İşlem listesi','Değişkenler','Durum','%s sürüm: %s PHP uzantısı ile %s','%s olarak giriş yapıldı.','Karşılaştırma','Tablolar','Düşür','Tazele','Şema','Geçersiz şema.','Sıra yok.','%.3f s','Dış anahtarlar','karşılaştırma','Silinmek üzere','Kolon adı','Parametre adı','Tür','Uzunluk','Seçenekler','Otomatik yükselt','Varsayılan değerler','Yorum','Sonraya ekle','Yukarı taşı','AŞağı taş','Kaldır','Görünüm','Tablo','Kolon','Dizinler','Dizinleri değiştir','Kaynak','Hedef','Yükseltilmek üzere','Değiştir','Dış anahtar ekle','Tetikler','Tetik ekle','Permanent link','İhraç','Çıktı','Biçim','Yordamlar','Olaylar','Veri','Kullanıcı yarat','Sorguda hata',array('%d sıra)','%d kadar sıra'),array('Sorgu işletilmesi tamamlandı. %d sıra(row) etkilendi.','Sorgu işletilmesi tamamlandı. Bundan %d kadar sıra etkilendi.'),'İşletilmek için komut yok.',array('%d sorgunun işletilmesi tamamlandı.','%d kadar sorgunun işletilmesi tamamlandı.'),'Dosya gönder','Dosya gönderimi etkin değil.','İşlet','Dur hata','Sadece hataları göster.','Sunucudan','%s web sunucusu dosyası','Dosya çalıştır','Tarih','Boşluk','Edit all','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Ekle','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil','Tablo düşürüldü.','Tablo değiştirildi.','Tablo yaratıldı.','Tablo yarat','kabul edilebilir alan sayısı aşıldı. Lütfen %s ve %s düşürün.','Tablo adı','motor','Bölümü tarafından','Bölümler','BÖlüm adı','Değerler','Dizinler değiştirilidi.','Dizin Türü','Kolon (uzunluğu)','Ad','Veritabanı düşürüldü.','Veritabanının ismi değiştirildi.','Veritabanı yaratıldı.','Veritabanı değiştirildi.','Veritabanı yarat','Şema düşürüldü.','Şema yaratıldı.','Şema değiştirildi.','Çağrı',array('Yordam çağrıldı, %d sıra(row) etkilendi.','Yordam çağrıldı, %d sıralar(rows) etkilendi.'),'Dış anahtar düşürüldü.','Dış anahtar değiştir.','Dış anahtar yarat.','Kaynak ve hedef kolonlar aynı veri türü olmak zorunda, hedef kolonda bir dizin ve başvurulan veri bulunmalı.','Dış anahtar','Hedef tablo','Değiş','Kolon eklde','Görünüm düşürüldü.','Görünüm değiştirildi.','Görünüm yaratıldı.','Görünüm yarat','Olay düşüdüldü.','Olay değiştirildi.','Olay yaratıldı.','Değiştirme olayı','Yaratma olayı','Başla','Son','Herzaman','Tamamlama koruması AÇIK','Yordam düşürüldü.','Yordam değiştirildi.','Yordam yaratıldı.','Değiştirme fonksyionu','Değiştirme yöntemi','Fonksiyon yarat','Yöntem yarat','Geri dönüş türü','Dizi düşürüldü.','Dizi yaratıldı.','Dizi değiştirildi.','Dizi değiştir','Dizi yarat','Tür düşürüldü.','Tür yaratıldı.','Tür değiştir','Tür yarat','Tetik düşürüldü.','Tetik değiştirildi.','Tetik yaratıldı.','Tetik değiştir.','Tetik yarat','Zaman','Olay','Kullanıcı düşürüldü.','Kullanıcı değiştirildi.','Kullanıcı yaratıldı.','Harmanlandı.','Yordam','İmtiyaz','Geri al',array('%d süreç öldürüldü.','%d adet süreç öldürüldü.'),'%d toplamda','Öldür',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son','tüm sonuç','Klonla','İthal',' ','Tablolar budandı.','Tablolar taşındı.','Tablolar kopyalandı.','Tablolar düşürüldü.','Tables have been optimized.','Tablolar ve görünümler','Tablolarda veri ara.','Motor','Veri uzunluğu','Dizin uzunluğu','Serbest veri','Sıralar (Rows)','Çözümleme','En uygun hale getirme','Denetleme','Tamir','Buda','Diğer veritabanına taşı','Taşı','Kopyala','Diziler','Takvimli','Bir anda','şimdi');break;case"ro":$R=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Sistema','Server','Nume de utilizator','Parola','Baza de date','Intră','Logare permanentă','Selectează','Arată structura','Modifică reprezentare','Modifică tabelul','Înscriere nouă','Ultima pagină','Editează',array('%d octet','%d octeți'),'Selectează','Funcții','Agregare','Căutare','oriunde','Sortare','descrescător','Limit','Lungimea textului','Acțiune','Full table scan','SQL query','deschide','salvează','Modifică baza de date','Modifică schema','Crează o schemă','Schema bazei de date','Privelegii','Dump','Eșire','baza de date','schema','Crează tabel nou','selectează','ltr','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Bază de deate invalidă.','Baze de date au fost șterse.','Alege baza de date','Crează o bază de date nouă','Lista proceselor','Variabile','Stare','Versiunea %s: %s cu extensia PHP %s','Ați intrat ca: %s','Colaționare','Tabele','Șterge','Împrospătează','Schema','Schemă incorectă.','Nu sunt înscrieri.','%.3f s','Cheiuri externe','colaționarea','La ștergere','Denumirea coloanei','Numele parametrului','Tip','Lungime','Acțiune','Creșterea automată','Valoarea inițială','Comentariu','Adaugă încă','Mișcă în sus','Mișcă în jos','Șterge','Reprezentare','Tabel','Coloană','Indexe','Modifică indexe','Sursă','Scop','La modificare','Modifică','Adaugă chei extern','Triggere','Adaugă trigger','Adresă permanentă','Export','Date de eșire','Format','Proceduri și funcții salvate','Evenimente','Date','Crează utilizator','Eroare în query',array('%d înscriere','%d înscrieri'),array('Query executat, %d înscriere modificată.','Query executat, %d înscrieri modificate.'),'Nu sunt comenzi de executat.',array('%d query executat.','%d query-uri executate cu succes.'),'Încarcă fișierul','Încărcarea fișierelor este interzisă.','Execută','Opreștete la eroare','Arată doar greșeli','De pe server','Fișierul %s pe server','Execută fișier','Istoria','Curățp','Editează tot','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Inserează','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge','Tabelul a fost șters.','Tabelul a fost modificat.','Tabelul a fost creat.','Crează tabel','Numărul maxim de înscrieri disponibile a fost atins. Majorați %s și %s.','Denumirea tabelului','tip','Împarte','Secțiuni','Denumirea secțiunii','Parametru','Indexele au fost modificate.','Tipul indexului','Coloană (lungimea)','Titlu','Baza de date a fost ștearsă.','Baza de date a fost redenumită.','Baza de date a fost creată.','Baza de date a fost modificată.','Crează baza de date','Schema a fost ștearsă.','Schema a fost creată.','Schema a fost modificată.','Apelează',array('A fost executată procedură, %d înscriere a fost modificată.','A fost executată procedură, %d înscrieri au fost modificate.'),'Chei extern a fost șters.','Chei extern a fost modificat.','Chei extern a fost creat.','Coloanele ar trebui să aibă aceleaşi tipuri de date, trebuie să existe date de referinţă și un index pe coloanela-ţintă.','Chei extern','Tabela scop','Modifică','Adaugă coloană','Reprezentarea a fost ștearsă.','Reprezentarea a fost modificată.','Reprezentarea a fost creată.','Crează reprezentare','Evenimentul a fost șters.','Evenimentul a fost modificat.','Evenimentul a fost adăugat.','Modifică eveniment','Creează evenimet','Început','Svârșit','Fiecare','Salvează după finisare','Procedura a fost ștearsă.','Procedura a fost modificată.','Procedura a fost creată.','Modifică funcția','Modifică procedura','Crează funcție','Crează procedură','Tipul returnării','«secvența» a fost ștearsă.','«secvența» a fost creată.','«secvența» a fost modificată.','Modifică «secvență»','Crează «secvență»','Tiipul a fost șters.','Crează tip nou.','Modifică tip','Crează tip noi','Triggerul a fost șters.','Triggerul a fost modificat.','Triggerul a fost creat.','Modifică trigger','Crează trigger','Timp','Eveniment','Utilizatorul a fost șters.','Utilizatorul a fost modificat.','Utilizatorul a fost creat.','Hashed','Procedură','Permite','Interzice',array('A fost finisat %d proces.','Au fost finisate %d procese.'),'În total %d','Termină',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','editare','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima','tot rezultatul','Clonează','Importă',',','Tabelele au fost curățate.','Tabelele au fost mutate.','Tabelele au fost copiate','Tabelele au fost șterse.','Tables have been optimized.','Tabele și reprezentări','Caută în tabele','Tip','Cantitatea de date','Cantitatea de indexe','Spațiu liber','Înscrieri','Analizează','Optimizează','Controlează','Repară','Curăță','Mută în altă bază de date','Mută','Copiază','«Secvențe»','Program','În timpul curent','HH:MM:SS');break;case"ru":$R=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Движок','Сервер','Имя пользователя','Пароль','База данных','Войти','Оставаться в системе','Выбрать','Показать структуру','Изменить представление','Изменить таблицу','Новая запись','Последняя страница','Редактировать',array('%d байт','%d байта','%d байтов'),'Выбрать','Функции','Агрегация','Поиск','в любом месте','Сортировать','по убыванию','Лимит','Длина текста','Действие','Full table scan','SQL запрос','открыть','сохранить','Изменить базу данных','Изменить схему','Новая схема','Схема базы данных','Полномочия','Дамп','Выйти','база данных','схема','Создать новую таблицу','выбрать','ltr','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Плохая база данных.','Базы данных удалены.','Выбрать базу данных','Создать новую базу данных','Список процессов','Переменные','Состояние','Версия %s: %s с PHP-расширением %s','Вы вошли как: %s','Режим сопоставления','Таблицы','Удалить','Обновить','Схема','Неправильная схема.','Нет записей.','%.3f s','Внешние ключи','режим сопоставления','При стирании','Название поля','Название параметра','Тип','Длина','Действие','Автоматическое приращение','Значения по умолчанию','Комментарий','Добавить еще','Переместить вверх','Переместить вниз','Удалить','Представление','Таблица','Колонка','Индексы','Изменить индексы','Источник','Цель','При обновлении','Изменить','Добавить внешний ключ','Триггеры','Добавить триггер','Постоянная ссылка','Экспорт','Выходные данные','Формат','Хранимые процедуры и функции','События','Данные','Создать пользователя','Ошибка в запросe',array('%d строка','%d строки','%d строк'),array('Запрос завершен, изменена %d запись.','Запрос завершен, изменены %d записи.','Запрос завершен, изменено %d записей.'),'Нет команд для выполнения.',array('%d запрос выполнен успешно.','%d запроса выполнено успешно.','%d запросов выполнено успешно.'),'Загрузить файл на сервер','Загрузка файлов на сервер запрещена.','Выполнить','Остановить при ошибке','Только ошибки','С сервера','Файл %s на вебсервере','Запустить файл','История','Очистить','Редактировать всё','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Вставить','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть','Таблица была удалена.','Таблица была изменена.','Таблица была создана.','Создать таблицу','Достигнуто максимальное значение количества доступных полей. Увеличьте %s и %s.','Название таблицы','тип','Разделить по','Разделы','Название раздела','Параметры','Индексы изменены.','Тип индекса','Колонка (длина)','Название','База данных была удалена.','База данных была переименована.','База данных была создана.','База данных была изменена.','Создать базу данных','Схема удалена.','Создана новая схема.','Схема изменена.','Вызвать',array('Была вызвана процедура, %d запись была изменена.','Была вызвана процедура, %d записи было изменено.','Была вызвана процедура, %d записей было изменено.'),'Внешний ключ был удален.','Внешний ключ был изменен.','Внешний ключ был создан.','Колонки должны иметь одинаковые типы данных, в результирующей колонке должен быть индекс, данные для импорта должны существовать.','Внешний ключ','Результирующая таблица','Изменить','Добавить колонку','Представление было удалено.','Представление было изменено.','Представление было создано.','Создать представление','Событие было удалено.','Событие было изменено.','Событие было создано.','Изменить событие','Создать событие','Начало','Конец','Каждые','После завершения сохранить','Процедура была удалена.','Процедура была изменена.','Процедура была создана.','Изменить функцию','Изменить процедуру','Создать функцию','Создать процедуру','Возвращаемый тип','«Последовательность» удалена.','Создана новая «последовательность».','«Последовательность» изменена.','Изменить «последовательность»','Создать «последовательность»','Тип удален.','Создан новый тип.','Изменить тип','Создать тип','Триггер был удален.','Триггер был изменен.','Триггер был создан.','Изменить триггер','Создать триггер','Время','Событие','Пользователь был удален.','Пользователь был изменен.','Пользователь был создан.','Хешировано','Процедура','Позволить','Запретить',array('Был завершен %d процесс.','Было завершено %d процесса.','Было завершёно %d процессов.'),'Всего %d','Завершить',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя','весь результат','Клонировать','Импорт',' ','Таблицы были очищены.','Таблицы были перемещены.','Таблицы скопированы.','Таблицы были удалены.','Tables have been optimized.','Таблицы и представления','Поиск в таблицах','Тип','Объём данных','Объём индексов','Свободное место','Строк','Анализировать','Оптимизировать','Проверить','Исправить','Очистить','Переместить в другою базу данных','Переместить','Копировать','«Последовательности»','Расписание','В данное время','ЧЧ:ММ:СС');break;case"uk":$R=array('Ви впевнені?','Неможливо завантажити файл.','Максимально допустимий розмір файлу %sБ.','Файл не існує.','порожньо','початковий','Нема таблиць.','Мова','Обрати','Будь ласка, використовуйте одне з розширень %s.','Файл існує.','Типи користувачів','Числа','Дата і час','Радки','Двійкові','Мережа','Геометрія','Списки','Система Бази Даних','Сервер','Користувач','Пароль','База даних','Увійти','Пам\'ятати сесію','Вибрати дані','Показати структуру','Змінити вигляд','Змінити таблицю','Новий запис','Остання сторінка','Редагувати',array('%d байт','%d байта','%d байтів'),'Вибрати','Функції','Агрегація','Пошук','будь-де','Сортувати','по спаданню','Обмеження','Довжина тексту','Дія','Full table scan','SQL запит','відкрити','зберегти','Змінити базу даних','Змінити схему','Створити схему','Схема бази даних','Привілеї','Дамп','Вийти','база даних','схема','Створити нову таблицю','вибрати','ltr','Недійсний CSRF токен. Надішліть форму ще раз.','Ви вдало вийшли з системи.','Сесії повинні бути дозволені.','Сесія закінчилась, будь ласка, увійдіть в систему знову.','Неправильні дані входу.','Нема розширень','Жодне з PHP-розширень (%s), що підтримуються, не доступне.','Занадто великий об\'єм POST-даних. Зменшіть об\'єм або збільшіть параметр директиви %s конфигурації.','Погана база даних.','Бази даних були видалені.','Обрати базу даних','Створити нову базу даних','Перелік процесів','Змінні','Статус','Версія %s: %s з PHP-розширенням %s','Ви увійшли як: %s','Співставлення','Таблиці','Видалити','Оновити','Схема','Невірна схема.','Нема рядків.','%.3f s','Зовнішні ключі','співставлення','ПРИ ВИДАЛЕННІ','Назва стовпця','Назва параметра','Тип','Довжина','Опції','Автоматичне збільшення','Значення за замовчуванням','Коментарі','Додати ще','Пересунути вгору','Пересунути вниз','Видалити','Вигляд','Таблиця','Колонка','Індекси','Змінити індексування','Джерело','Ціль','ПРИ ЗМІНІ','Змінити','Додати зовнішній ключ','Тригери','Додати тригер','Постійне посилання','Експорт','Вихідні дані','Формат','Збережені процедури','Події','Дані','Створити користувача','Помилка в запиті',array('%d рядок','%d рядки','%d рядків'),array('Запит виконано успішно, змінено %d рядок.','Запит виконано успішно, змінено %d рядки.','Запит виконано успішно, змінено %d рядків.'),'Нема запитів до виконання.',array('%d запит виконано успішно.','%d запити виконано успішно.','%d запитів виконано успішно.'),'Завантажити файл','Завантаження файлів заборонене.','Виконати','Зупинитись при помилці','Показувати тільки помилки','З сервера','Файл %s на вебсервері','Запустити файл','Історія','Очистити','Редагувати все','Запис було видалено.','Запис було змінено.','Запис%s було вставлено.','Вставити','Зберегти','Зберегти і продовжити редагування','Зберегти і вставити знову','Видалити','Таблицю було видалено.','Таблица була змінена.','Таблиця була створена.','Створити таблицю','Досягнута максимальна кількість доступних полів. Будь ласка, збільшіть %s і %s.','Назва таблиці','рушій','Розділити по','Розділи','Назва розділу','Значення','Індексування було змінено.','Тип індексу','Стовпець (довжина)','Назва','Базу даних було видалено.','Базу даних було переіменовано.','Базу даних було створено.','Базу даних було змінено.','Створити базу даних','Схему було видалено.','Схему було створено.','Схему було змінено.','Викликати',array('Була викликана процедура, %d запис було змінено.','Була викликана процедура, %d записи було змінено.','Була викликана процедура, %d записів було змінено.'),'Зовнішній ключ було видалено.','Зовнішній ключ було змінено.','Зовнішній ключ було створено.','Стовпці повинні мати той самий тип даних, цільові стовпці повинні бути проіндексовані і дані, на які посилаються повинні існувати.','Зовнішній ключ','Цільова таблиця','Змінити','Додати стовпець','Вигляд було видалено.','Вигляд було змінено.','Вигляд було створено.','Створити вигляд','Подію було видалено.','Подію було змінено.','Подію було створено.','Змінити подію','Створити подію','Початок','Кінець','Кожного','Після завершення зберегти','Процедуру було видалено.','Процедуру було змінено.','Процедуру було створено.','Змінити функцію','Змінити процедуру','Створити функцію','Створити процедуру','Тип, що повернеться','Послідовність було видалено.','Послідовність було створено.','Послідовність було змінено.','Змінити послідовність','Створити послідовність','Тип було видалено.','Тип було створено.','Змінити тип','Створити тип','Тригер було видалено.','Тригер було змінено.','Тригер було створено.','Змінити тригер','Створити тригер','Час','Подія','Користувача було видалено.','Користувача було змінено.','Користувача було створено.','Хешовано','Процедура','Дозволити','Заборонити',array('Було завершено %d процес.','Було завершено %d процеси.','Було завершёно %d процесів.'),'%d всього','Завершити процес',array('Було змінено %d запис.','Було змінено %d записи.','Було змінено %d записів.'),'Двічі клікніть на значенні щоб змінити його.',array('%d рядок було імпортовано.','%d рядки було імпортовано.','%d рядків було імпортовано.'),'Неможливо вибрати таблицю','редагувати','Зв\'язки','Використовуйте посилання щоб змінити це значення.','Сторінка','остання','весь результат','Клонувати','Імпортувати',' ','Таблиці було очищено.','Таблиці було перенесено.','Таблиці було зкопійовано.','Таблиці були видалені.','Таблиці були оптимізовані.','Таблиці і вигляди','Шукати дані в таблицях','Рушій','Об\'єм даних','Об\'єм індексів','Вільне місце','Рядків','Аналізувати','Оптимізувати','Перевірити','Виправити','Очистити','Перенести до іншої бази даних','Перенести','копіювати','Послідовності','Розклад','В даний час','ні');break;case"zh":$R=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','系统','服务器','用户名','密码','数据库','登录','保持登录','选择数据','显示结构','更改视图','更改表','新建项','末页','编辑','%d 字节','选择','函数','集合','搜索','任意位置','排序','降序','限定','文本长度','动作','Full table scan','SQL命令','打开','保存','更改数据库','更改模式','创建模式','数据库概要','权限','导出','注销','数据库','模式','创建新表','选择','ltr','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','无效数据库。','已丢弃数据库。','选择数据库','创建新数据库','进程列表','变量','状态','%s 版本：%s 通过 PHP 扩展 %s','登录为：%s','校对','表','丢弃','刷新','模式','非法模式。','没有行。','%.3f 秒','外键','校对','ON DELETE','列名','参数名','类型','长度','选项','自动增量','默认值','注释','添加下一个','上移','下移','移除','视图','表','列','索引','更改索引','源','目标','ON UPDATE','更改','添加外键','触发器','创建触发器','固定链接','导出','输出','格式','子程序','事件','数据','创建用户','查询出错','%d 行','执行查询OK，%d 行受影响。','没有命令执行。','%d 条查询已成功执行。','文件上传','文件上传被禁用。','执行','出错时停止','仅显示错误','来自服务器','Web服务器文件 %s','运行文件','历史','清除','编辑全部','已删除项目。','已更新项目。','已插入项目%s。','插入','保存','保存并继续编辑','保存并插入下一个','删除','已丢弃表。','已更改表。','已创建表。','创建表','超过最多允许的字段数量。请增加 %s 和 %s 。','表名','引擎','分区类型','分区','分区名','值','已更改索引。','索引类型','列（长度）','名称','已丢弃数据库。','已重命名数据库。','已创建数据库。','已更改数据库。','创建数据库','已丢弃模式。','已创建模式。','已更改模式。','调用','子程序被调用，%d 行被影响。','已删除外键。','已更改外键。','已创建外键。','源列和目标列必须具有相同的数据类型，在目标列上必须有一个索引并且引用的数据必须存在。','外键','目标表','更改','增加列','已丢弃视图。','已更改视图。','已创建视图。','创建视图','已丢弃事件。','已更改事件。','已创建事件。','更改事件','创建事件','开始','结束','每','完成后保存','已丢弃子程序。','已更改子程序。','已创建子程序。','更改函数','更改过程','创建函数','创建过程','返回类型','已丢弃序列。','已创建序列。','已更改序列。','更改序列','创建序列','已丢弃类型。','已创建类型。','更改类型','创建类型','已丢弃触发器。','已更改触发器。','已创建触发器。','更改触发器','创建触发器','时间','事件','已丢弃用户。','已更改用户。','已创建用户。','Hashed','子程序','授权','废除','%d 个进程被终止','共计 %d','终止','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','所有结果','克隆','导入',',','已清空表。','已转移表。','表已复制。','已丢弃表。','Tables have been optimized.','表和视图','在表中搜索数据','引擎','数据长度','索引长度','数据空闲','行数','分析','优化','检查','修复','清空','转移到其它数据库','转移','复制','序列','调度','在指定时间','HH:MM:SS');break;case"zh-tw":$R=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','資料庫系統','伺服器','帳號','密碼','資料庫','登入','永久登入','選擇資料','秀出結構','更改檢視表','更改資料表','新建項','最後一頁','編輯','%d byte(s)','選擇','函數','集合','搜尋','任意位置','排序','降冪','限定','Text 長度','動作','Full table scan','SQL命令','打開','儲存','更改資料庫','更改資料表結構','建立資料表結構','資料庫架構','權限','導入/導出','登出','資料庫','資料表結構','建立新資料表','選擇','ltr','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','無效的資料庫。','資料庫已刪除。','選擇資料庫','建立新資料庫','進程列表','變數','狀態','%s版本：%s 透過PHP擴充模組 %s','登錄為：%s','校對','資料表','丟棄','重新載入','資料表結構','無效的資料表結構。','沒有行。','%.3f秒','外鍵','校對','ON DELETE','列名','參數名稱','類型','長度','選項','自動增加','預設值','註解','新增下一個','上移','下移','移除','檢視表','資料表','列','索引','更改索引','來源','目標','ON UPDATE','更改','新增外鍵','觸發器','建立觸發器','永久鏈接','匯出','輸出','格式','程序','事件','資料','建立使用者','查詢出錯','%d行','執行查詢OK，%d行受影響','沒有命令可執行。','已順利執行 %d 個查詢。','檔案上傳','檔案上傳被禁用。','執行','出錯時停止','僅顯示錯誤訊息','從伺服器','網頁伺服器檔案 %s','執行檔案','歷史','清除','編輯全部','該項目已被刪除','已更新項目。','已插入項目%s。','插入','儲存','保存並繼續編輯','儲存並插入下一個','刪除','已經刪除資料表。','資料表已更改。','資料表已更改。','建立資料表表','超過最多允許的字段數量。請增加%s和%s 。','資料表名稱','引擎','分區類型','分區','分區名','值','已更改索引。','索引類型','列（長度）','名稱','資料庫已刪除。','已重新命名資料庫。','已建立資料庫。','已更改資料庫。','建立資料庫','已刪除資料表結構。','已建立資料表結構。','已更改資料表結構。','呼叫','程序已被執行，%d行被影響','已刪除外鍵。','已更改外鍵。','已建立外鍵。','源列和目標列必須具有相同的數據類型，在目標列上必須有一個索引並且引用的數據必須存在。','外鍵','目標資料表','更改','新增資料列','已丟棄檢視表。','已更改檢視表。','已建立檢視表。','建立檢視表','已丟棄事件。','已更改事件。','已建立事件。','更改事件','建立事件','開始','結束','每','在完成後保存','已丟棄程序。','已更改子程序。','已建立子程序。','更改函數','更改過程','建立函數','建立預存程序','返回類型','已刪除 sequence。','已建立 sequence。','已更改 sequence。','更改 sequence','建立 sequence','已刪除類型。','已建立類型。','更改類型','建立類型','已丟棄觸發器。','已更改觸發器。','已建立觸發器。','更改觸發器','建立觸發器','時間','事件','已丟棄使用者。','已更改使用者。','已建立使用者。','Hashed','程序','授權','廢除','%d 個 Process(es) 被終止','總共 %d 個','終止','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','所有結果','複製','匯入',',','已清空資料表。','已轉移資料表。','表格已經複製','已丟棄表。','Tables have been optimized.','資料表和檢視表','在資料庫搜尋','引擎','資料長度','索引長度','資料空閒','行數','分析','優化','檢查','修復','清空','轉移到其它資料庫','轉移','複製','Sequences','調度','在指定時間','HH:MM:SS');break;case"ja":$R=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','データベース種類','サーバ','ユーザ名','パスワード','データベース','ログイン','永続的にログイン','データ','構造','ビューを変更','テーブルの変更','項目の作成','最後のページ','編集','%d バイト','選択','関数','集合','検索','任意','ソート','降順','制約','文字列の長さ','動作','Full table scan','SQLコマンド','開く','保存','データベースを変更','スキーマ変更','スキーマ追加','構造','権限','ダンプ','ログアウト','データベース','スキーマ','テーブルを作成','選択','ltr','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','不正なデータベース','データベースを削除しました','データベースを選択してください','新規にデータベースを作成','プロセス一覧','変数','状態','%sバージョン：%s、 PHP拡張機能 %s','ログ：%s','照合順序','テーブル','削除','リフレッシュ','スキーマ','無効なスキーマ','行がありません','%.3f 秒','外部キー','照合順序','ON DELETE','列名','参数名','型','長さ','設定','連番','規定値','コメント','追加','上','下','除外','ビュー','テーブル','列','索引','索引の変更','ソース','ターゲット','ON UPDATE','変更','外部キーを追加','トリガー','トリガーの追加','パーマネントリンク','エクスポート','出力','形式','ルーチン','イベント','データ','ユーザを作成','クエリーのエラー','%d 行','クエリーを実行しました。%d 行を変更しました','実行するコマンドがありません','%d クエリーを実行しました','ファイルをアップロード','ファイルのアップロードが無効です','実行','エラーの場合は停止','エラーのみ表示','サーバーから実行','Webサーバファイル %s','ファイルを実行','履歴','消去','すべて編集','項目を削除しました','項目を更新しました','%s項目を挿入しました','挿入','保存','保存して継続','保存／追加','削除','テーブルを削除しました','テーブルを変更しました','テーブルを作成しました','テーブルを作成','定義可能な最大フィールド数を越えました。%s と %s を増やしてください。','テーブル名','エンジン','パーティション','パーティション','パーティション名','値','索引を変更しました','索引の型','列（長さ）','名称','データベースを削除しました','データベースの名前を変えました','データベースを作成しました','データベースを変更しました','データベースを作成','スキーマを削除しました','スキーマを追加しました','スキーマを変更しました','呼出し','ルーチンを呼びました。%d 行を変更しました','外部キーを削除しました','外部キーを変更しました','外部キーを作成しました','ソースとターゲットの列は同じデータ型でなければなりません。ターゲット列に索引があり、データが存在しなければなりません。','外キー','テーブル','変更','列を追加','ビューを削除しました','ビューを変更しました','ビューを作成しました','ビューを作成','削除しました','変更しました','作成しました','変更','作成','開始','終了','毎回','完成後に保存','ルーチンを作成','ルーチンを変更','ルーチンを作成','関数の変更','プロシージャの変更','関数の作成','プロシージャの作成','戻り値の型','シーケンスを削除しました','シーケンスを追加しました','シーケンスを変更しました','シーケンス変更','シーケンス作成','ユーザー定義型を削除しました','ユーザー定義型を追加しました','ユーザー定義型変更','ユーザー定義型作成','トリガーを削除しました','トリガーを変更しました','トリガーを追加しました','トリガーの変更','トリガーの作成','時間','イベント','ユーザを削除','ユーザを変更','ユーザを作成','Hashed','ルーチン','権限の付与','権限の取消し','%d プロセスを強制終了しました','合計 %d','強制終了','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','編集','関係','リンクを編集する','ページ','最終','全結果','クローン','インポート',',','テーブルをtruncateしました','テーブルを移動しました','テーブルをコピーしました','テーブルを削除しました','Tables have been optimized.','テーブルとビュー','データを検索する','エンジン','データ長','索引長','空き','行数','分析','最適化','チェック','修復','Truncate','別のデータベースへ移動','移動','コピー','シーケンス','スケジュール','指定時刻','時:分:秒');break;case"ta":$R=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','சிஸ்ட‌ம் (System)','வ‌ழ‌ங்கி (Server)','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','த‌க‌வ‌ல்த‌ள‌ம்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','த‌க‌வ‌லை தேர்வு செய்','க‌ட்ட‌மைப்பை காண்பிக்க‌வும்','தோற்ற‌த்தை மாற்று','அட்ட‌வ‌ணையை மாற்று','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்','தொகு',array('%d பைட்','%d பைட்டுக‌ள்'),'தேர்வு செய்','Functions','திர‌ள்வு (Aggregation)','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','இற‌ங்குமுக‌மான‌','வ‌ர‌ம்பு','உரை நீள‌ம்','செய‌ல்','Full table scan','SQL க‌ட்ட‌ளை','திற‌','சேமி','த‌க‌வ‌ல்த‌ள‌த்தை மாற்று','அமைப்புமுறையை மாற்று','அமைப்புமுறையை உருவாக்கு','த‌க‌வ‌ல்த‌ள‌ அமைப்பு முறைக‌ள்','ச‌லுகைக‌ள் / சிற‌ப்புரிமைக‌ள்','Dump','வெளியேறு','த‌க‌வ‌ல்த‌ள‌ம்','அமைப்புமுறை','புதிய‌ அட்ட‌வ‌ணையை உருவாக்கு','தேர்வு செய்','ltr','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','த‌க‌வ‌ல்த‌ள‌ம் ச‌ரியானதல்ல‌.','த‌க‌வ‌ல் த‌ள‌ங்க‌ள் நீக்க‌ப்ப‌ட்டன‌.','த‌க‌வ‌ல்த‌ள‌த்தை தேர்வு செய்','புதிய‌ த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','வேலைக‌ளின் ப‌ட்டி','மாறிலிக‌ள் (Variables)','நிக‌ழ்நிலை (Status)','%s ப‌திப்பு: %s through PHP extension %s','ப‌ய‌னாளர்: %s','கொலேச‌ன்','அட்ட‌வ‌ணை','நீக்கு','புதுப்பி (Refresh)','அமைப்புமுறை','அமைப்புமுறை ச‌ரியான‌த‌ல்ல‌ (Invalid Schema).','வ‌ரிசை இல்லை.','%.3f s','வேற்று விசைக‌ள்','கொலேச‌ன்','ON DELETE','நெடுவ‌ரிசையின் பெய‌ர்','அள‌புரு (Parameter) பெய‌ர்','வ‌கை','நீளம்','வேண்டிய‌வ‌ற்றை ','ஏறுமான‌ம்','உள்ளிருக்கும் (Default) ம‌திப்புக‌ள் ','குறிப்பு','அடுத்த‌தை சேர்க்க‌வும்','மேலே ந‌க‌ர்த்து','கீழே நக‌ர்த்து','நீக்கு','தோற்றம்','அட்ட‌வ‌ணை','நெடுவ‌ரிசை','அக‌வ‌ரிசைக‌ள் (Index) ','அக‌வ‌ரிசையை (Index) மாற்று','மூல‌ம்','இல‌க்கு','ON UPDATE','மாற்று','வேற்று விசை சேர்க்க‌வும்','தூண்டுத‌ல்க‌ள்','தூண்டு விசையை சேர்','நிரந்தர இணைப்பு','ஏற்றும‌தி','வெளியீடு','ஃபார்ம‌ட் (Format)','ரொட்டீன் ','நிக‌ழ்ச்சிக‌ள்','த‌க‌வ‌ல்','ப‌ய‌னாள‌ரை உருவாக்கு','வின‌வ‌லில் த‌வ‌றுள்ள‌து',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),array('வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசை மாற்ற‌ப்ப‌ட்ட‌து.','வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசைக‌ள் மாற்றப்ப‌ட்ட‌ன‌.'),'செய‌ல் ப‌டுத்த‌ எந்த‌ க‌ட்ட‌ளைக‌ளும் இல்லை.',array('%d வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து.','%d வின‌வ‌ல்க‌ள் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌ன‌.'),'கோப்பை மேலேற்று (upload) ','கோப்புக‌ள் மேலேற்றம் (upload)முட‌க்க‌ப்ப‌ட்டுள்ள‌ன‌.','செய‌ல்ப‌டுத்து','பிழை ஏற்ப‌டின் நிற்க‌','பிழைக‌ளை ம‌ட்டும் காண்பிக்க‌வும்','செர்வ‌ரில் இருந்து','வெப் ச‌ர்வ‌ர் கோப்பு %s','கோப்பினை இய‌க்க‌வும்','வ‌ர‌லாறு','துடை (Clear)','அனைத்தையும் தொகு','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','புகுத்து','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வணை மாற்ற‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணை உருவாக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணையை உருவாக்கு','அனும‌திக்க‌ப்ப‌ட்ட‌ அதிக‌ப‌ட்ச‌ கோப்புக‌ளின் எண்ணிக்கை மீற‌ப்ப‌ட்ட‌து. த‌ய‌வு செய்து %s ம‌ற்றும் %s யை அதிக‌ரிக்க‌வும்.','அட்ட‌வ‌ணைப் பெய‌ர்','எஞ்சின்','பிரித்த‌து','பிரிவுக‌ள்','பிரிவின் பெய‌ர்','ம‌திப்புக‌ள்','அக‌வ‌ரிசைக‌ள் (Indexes) மாற்ற‌ப்பட்ட‌து.','அக‌வ‌ரிசை வ‌கை (Index Type)','நெடுவ‌ரிசை (நீள‌ம்)','பெய‌ர்','த‌க‌வ‌ல்த‌ள‌ம் நீக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் பெய‌ர் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','அமைப்புமுறை நீக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை உருவாக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை மாற்ற‌ப்ப‌ட்ட‌து.','அழை',array('ரொட்டீன்க‌ள் அழைக்க‌ப்பட்டுள்ள‌ன‌, %d வ‌ரிசை மாற்ற‌ம் அடைந்த‌து.','ரொட்டீன்க‌ள் அழைக்க‌ப்ப‌ட்டுள்ள‌ன‌, %d வ‌ரிசைக‌ள் மாற்றம் அடைந்துள்ள‌ன‌.'),'வேற்று விசை நீக்க‌ப்ப‌ட்ட‌து.','வேற்று விசை மாற்ற‌ப்ப‌ட்ட‌து.','வேற்று விசை உருவாக்க‌ப்ப‌ட்ட‌து.','இல‌க்கு நெடுவ‌ரிசையில் அக‌வ‌ரிசை (Index) ம‌ற்றும் குறிக்க‌ப்ப‌ட்ட‌ த‌க‌வல் (Referenced DATA) க‌ண்டிப்பாக‌ இருத்த‌ல் வேண்டும். மூல‌ நெடுவ‌ரிசை ம‌ற்றும் இலக்கு நெடுவ‌ரிசையின் த‌க‌வ‌ல் வ‌டிவ‌ம் (DATA TYPE) ஒன்றாக‌ இருக்க‌ வேண்டும்.','வேற்று விசை','அட்ட‌வ‌ணை இல‌க்கு','மாற்று','நெடு வ‌ரிசையை சேர்க்க‌வும்','தோற்ற‌ம் நீக்க‌ப்ப‌ட்ட‌து.','தோற்றம் மாற்றப்ப‌ட்ட‌து.','தோற்ற‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','தோற்றத்தை உருவாக்கு','நிக‌ழ்ச்சி (Event) நீக்க‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) மாற்றப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) உருவாக்க‌‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சியை (Event) மாற்று','நிக‌ழ்ச்சியை (Event) உருவாக்கு','தொட‌ங்கு','முடி (வு)','ஒவ்வொரு','முடிந்த‌தின் பின் பாதுகாக்க‌வும்','ரொட்டீன் நீக்க‌ப்ப‌ட்ட‌து.','ரொட்டீன் மாற்ற‌ப்ப‌ட்டது.','ரொட்டீன் உருவாக்க‌ப்ப‌ட்ட‌து.','Function மாற்று','செய‌ல்முறையை மாற்று','Function உருவாக்கு','செய்முறையை உருவாக்கு','திரும்பு வ‌கை','வ‌ரிசைமுறை நீக்க‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறை உருவாக்க‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறை மாற்ற‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறையை மாற்று','வ‌ரிசைமுறையை உருவாக்கு','வ‌கை (type) நீக்க‌ப்ப‌ட்ட‌து.','வ‌கை (type) உருவாக்க‌ப்ப‌ட்ட‌து.','வ‌கையினை (type) மாற்று','வ‌கையை உருவாக்கு','தூண்டு விசை நீக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசை மாற்ற‌ப்ப‌ட்ட‌து.','தூண்டு விசை உருவாக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசையை மாற்று','தூண்டு விசையை உருவாக்கு','நேர‌ம்','நிக‌ழ்ச்சி','ப‌யனீட்டாள‌ர் நீக்க‌ப்ப‌ட்டார்.','ப‌யனீட்டாள‌ர் மாற்றப்ப‌ட்டார்.','ப‌ய‌னீட்டாள‌ர் உருவாக்க‌ப்ப‌ட்ட‌து.','Hashed','ரொட்டீன்','அனும‌திய‌ளி','இர‌த்துச்செய்',array('%d வேலை வ‌லுவில் நிறுத்த‌ப‌ட்ட‌து.','%d வேலைக‌ள் வ‌லுவில் நிறுத்த‌ப‌ட்ட‌ன‌.'),'மொத்தம் %d ','வ‌லுவில் நிறுத்து',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி','முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','இற‌க்கும‌தி (Import)',',','அட்ட‌வ‌ணை குறைக்க‌ப்ப‌ட்ட‌து (truncated).','அட்ட‌வ‌ணை ந‌க‌ர்த்த‌ப்ப‌ட்ட‌து.','அட்டவணைகள் நகலெடுக்கப் பட்டது.','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','Tables have been optimized.','அட்ட‌வ‌ணைக‌ளும் பார்வைக‌ளும்','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','எஞ்சின் (Engine)','த‌க‌வ‌ல் நீள‌ம்','Index நீள‌ம்','Data Free','வ‌ரிசைக‌ள்','நுணுகி ஆராய‌வும்','உக‌ப்பாக்கு (Optimize)','ப‌ரிசோதி','ப‌ழுது பார்','குறை (Truncate)','ம‌ற்ற‌ த‌க‌வ‌ல் தள‌த்திற்க்கு ந‌க‌ர்த்து','ந‌க‌ர்த்து','நகல்','வ‌ரிசைமுறை','கால‌ அட்ட‌வ‌ணை','குறித்த‌ நேர‌த்தில்','HH:MM:SS');break;case"ar":$R=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','النظام','الخادم','المستعمل','كلمة المرور','قاعدة بيانات','تسجيل الدخول','تسجيل دخول دائم','عرض البيانات','عرض التركيبة','تعديل عرض','تعديل الجدول','عنصر جديد','الصفحة السابقة','تعديل','%d بايت','إختيار','الدوال','تجميع','بحث','في اي مكان','ترتيب','تنازلي','حد','طول النص','حركة','Full table scan','إستعلام SQL','فتح','حفظ','تعديل قاعدة البيانات','تعديل المخطط','إنشاء مخطط','مخطط فاعدة البيانات','الإمتيازات','تصدير','تسجيل الخروج','قاعدة بيانات','المخطط','أنشئ جدول جديد','تحديد','rtl','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','قاعدة بيانات خاطئة.','تم حذف قواعد البيانات.','إختر قاعدة البيانات','أنشئ فاعدة بيانات','قائمة الإجراءات','متغيرات','حالة','النسخة %s : %s عن طريق إمتداد ال PHP %s','تم تسجيل الدخول بإسم %s','ترتيب','جداول','حذف','تحديث','المخطط','مخطط خاطئ.','لا توجد نتائج.','%.3f s','مفاتيح أجنبية','الترتيب','ON DELETE','إسم العمود','إسم المتغير','النوع','الطول','خيارات','تزايد تلقائي','القيمة الإفتراضية','تعليق','إضافة التالي','نقل للأعلى','نقل للأسفل','مسح','عرض','جدول','عمود','المؤشرات','تعديل المؤشرات','المصدر','الهدف','ON UPDATE','تعديل','إضافة مفتاح أجنبي','الزنادات','إضافة زناد','وصلة دائمة','تصدير','إخراج','الصيغة','الروتينات','الأحداث','معلومات','إنشاء مستخدم','هناك خطأ في الإستعلام','%d أسطر','تم تنفسذ الإستعلام, %d عدد الأسطر المعدلة.','لا توجد أوامر للتنفيذ.',array('تم تنفيذ الإستعلام %d بنجاح.','تم تنفيذ الإستعلامات %d بنجاح.'),'رفع ملف','تم إلغاء رفع الملفات.','تنفيذ','أوقف في حالة حدوث خطأ','إعرض الأخطاء فقط','من الخادم','ملف %s من خادم الويب','نفذ الملف','تاريخ','مسح','تعديل الكل','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','إنشاء','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','تم حذف الجدول.','تم تعديل الجدول.','تم إنشاء الجدول.','إنشاء جدول','لقد تجاوزت العدد الأقصى للحقول. يرجى الرفع من %s و %s.','إسم الجدول','المحرك','مقسم بواسطة','التقسيمات','إسم التقسيم','القيم','تم تعديل المؤشر.','نوع المؤشر','العمود (الطول)','الإسم','تم حذف قاعدة البيانات.','تمت إعادة تسمية فاعدة البيانات.','تم إنشاء قاعدة البيانات.','تم تعديل قاعدة البيانات.','إنشاء قاعدة بيانات','تم حذف المخطط.','تم إنشاء المخطط.','تم تعديل المخطط.','إستدعاء','تم إستدعاء الروتين, عدد الأسطر المعدلة %d.','المفتاح الأجنبي تم مسحه.','المفتاح الأجنبي تم تعديله.','المفتاح الأجنبي تم إنشاؤه.','أعمدة المصدر و الهدف يجب أن تكون بنفس النوع, يجب أن يكون هناك مؤشر في أعمدة الهدف و البيانات المرجعية يجب ان تكون موجودة.','مفتاح أجنبي','الجدول المستهدف','تعديل','أضف عمود','تم مسح العرض.','تم تعديل العرض.','تم إنشاء العرض.','إنشاء عرض','تم مسح الحدث.','تم تعديل الحدث.','تم إنشاء الحدث.','تعديل حدث','إنشاء حدث','إبدأ','إنهاء','كل','حفظ عند الإنتهاء','تم حذف الروتين.','تم تعديل الروتين.','تم إنشاء الروتين.','تعديل الدالة','تعديل الإجراء','إنشاء دالة','إنشاء إجراء','نوع العودة','تم حذف السلسلة.','تم إنشاء السلسلة.','تم تعديل السلسلة.','تعديل سلسلة','إنشاء سلسلة','تم حذف النوع.','تم إنشاء النوع.','تعديل نوع','إنشاء نوع','تم حذف الزناد.','تم تعديل الزناد.','تم إنشاء الزناد.','تعديل زناد','إنشاء زناد','الوقت','الحدث','تم حذف المستخدم.','تم تعديل المستخدم.','تم إنشاء المستخدم.','تلبيد','روتين','موافق','إلغاء','عدد الإجراءات التي تم إيقافها %d.','%d في المجموع','إيقاف','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','نتيجة كاملة','نسخ','إستيراد',',','تم قطع الجداول.','تم نقل الجداول.','تم نسخ الجداول.','تم حذف الجداول.','Tables have been optimized.','الجداول و العروض','بحث في الجداول','المحرك','طول المعطيات.','طول المؤشر.','المساحة الحرة','الأسطر','تحليل','تحسين','فحص','إصلاح','قطع','نقل إلى قاعدة بيانات أخرى','نقل','نسخ','السلاسل','مواعيد','في وقت محدد','HH:MM:SS');break;case"fa":$R=array('مطمئن هستید؟','قادر به بارگذاري فايل نيستيد',' %sB حداكثر اندازه فايل','فايل وجود ندارد','خالی','اصلی','جدولی وجود ندارد','زبان','استفاده','لطفا یکی از پسوندهای زیر را انتخاب نمائید %s ','فایل موجود است','انواع کاربر','اعداد','تاریخ و زمان','رشته ها','دودویی','شبکه','هندسه','لیستها','سيستم','سرور','نام كاربري','كلمه عبور','پايگاه داده','ورود','','انتخاب داده','نمایش ساختار','حذف نمایش','ویرایش جدول','آیتم جدید','صفحه آخر','ویرایش',array('%d بایت','%d بایت'),'انتخاب','توابع','تجمع','جستجو','هرکجا','مرتب کردن','نزولی','محدودیت','طول متن','عملیات','Full table scan','دستور اس كيو ال','بازكردن','ذخيره','ويرايش پايگاه داده','ویرایش ساختار','ایجاد ساختار','ساختار پايگاه داده','امتيازات','خالي كردن','خروج','پايگاه داده','ساختار','ایجاد جدول جدید','انتخاب','rtl','نامعتبر است. دوباره سعی کنید Token CSRF','با موفقيت خارج شديد','پشتيباني از نشست بايستي فعال گردد','نشست پايان يافته، لطفا دوباره وارد شويد','اعتبار سنجي نامعتبر','پسوند نامعتبر',' پسوند پی اچ پی در دسترس نیست (%s) تعداد','حجم داده ارسالي برزگ است. حجم داده كاهش دهيد و يا مقدار %s را در پيكربندي افزايش دهيد.','پايگاه داده نامعتبر','پايگاه دادها حذف شدند','انتخاب پايگاه داده','ایجاد پايگاه داده جديد','ليست فرآيند','متغيرها','وضعيت','نسخه %s : %s توسعه پی اچ پی %s','ورود به عنوان: %s','تطبیق','جدولها','حذف','بازيابي','ساختار','ساختار نامعتبر','سطری وجود ندارد','%.3f s','کلیدهای خارجی','تطبیق','ON DELETE','نام ستون','نام پارامتر','نوع','طول','اختیارات','افزایش خودکار','مقادیر پیش فرض','توضیح','افرودن بعدی','انتقال به بالا','انتقال به پایین','حذف','نمایش','جدول','ستون','ایندکسها','ویرایش ایندکسها','منبع','هدف','ON UPDATE','ویرایش','افزودن کلید خارجی','تریگرها','افزودن تریگر','ارتباط دائم','استخراج','خروجي','حذف','روالها','رویدادها','داده','ایجاد كاربر','خطا در كوئري',array('%d سطر','%d سطر'),'كوئري اجرا شد. %d سطر تغيير كرد.','دستوري براي اجرا وجود ندارد','%d كوئري اجرا شد','بارگذاري فايل','بارگذاري غير فعال است','اجرا','توقف در خطا','فقط نمايش خطاها','از سرور','%s فايل وب سرور','نمايش فايل','تاريخ','پاك كردن','ويرايش همه','آیتم حذف شد','آیتم بروز رسانی شد','%s آیتم درج شد','درج','ذخیره','ذخیره و ادامه ویرایش','ذخیره و درج بعدی','حذف','جدول حذف شد','جدول ویرایش شد','جدول ایجاد شد','ایجاد جدول','حداکثر مجاز فیلدهای مجاز اشباع شد. لطفا %s و %s را کاهش دهید','نام جدول','موتور','بخشبندی توسط','بخشبندیها','نام بخش','مقادیر','ایندکسها ویرایش شد','نوع ایندکس','ستون (طول)','نام','پايگاه داده حذف شد','نام پايگاه داده تغيير كرد','پايگاه داده ايجاد شد','پايگاه داده ويرايش شد','ایجاد پايگاه داده','ساختار حذف شد','ساختار ایجاد شد','ساختار ویرایش شد','صدا زدن',array('روال فراخوانی شد %d سطر متاثر شد','روال فراخوانی شد %d سطر متاثر شد'),'کلید خارجی حذف شد','کلید خارجی ویرایش شد','کلید خارجی ایجاد شد','داده مبدا و مقصد ستونها بایستی شبیه هم باشند','کلید خارجی','جدول هدف','تغییر','افزودن ستون','نمایش حذف شد','نمایش ویرایش شد','نمایش ایجاد شد','ایجاد نمایش','رویداد حذف شد','رویداد ویرایش شد','رویداد ایجاد شد','ویرایش رویداد','ایجاد رویداد','آغاز','پایان','همه','تکمیل حفاظت فعال است','روال حذف شد','روال ویرایش شد','روال ایجاد شد','ویرایش تابع','ویرایش زیربرنامه','ایجاد تابع','ایجاد زیربرنامه','برگرداندن نوع','صف حذف شد','صف ایجاد شد','صف ویرایش شد','ویرایش صف','ایجاد صف','نوع حذف شد','نوع ایجاد شد','ویرایش نوع','ایجاد نوع','تریگر حذف شد','تریگر ویرایش شد','تریگر ایجاد شد','ویرایش تریگر','ایجاد تریگر','زمان','رویداد','كاربر حذف شد','كاربر ويرايش گرديد','كاربر ايجاد شد','به هم ريخته','روتين','اعطا','لغو كردن','%d فرآيند متوقف شد',' به طور کل %d ','حذف فرآيند',array('%d آیتم متاثر شد','%d آیتم متاثر شد'),'روی مقدار دوبار کلیک کنید تا آنرا ویرایش کنید',array('%d سطر وارد شد','%d سطر وارد شد'),'قادر به انتخاب جدول نیستید','ویرایش','رابطه ها','از لینک ویرایش برای ویرایش این مقدار استفاده کنید','صفحه','آخری','همه نتایج','تکثیر','وارد کردن',' ','جدولها بریده شدند','جدولها انتقال داده شدند','جدولها کپی شدند','جدولها حذف شدند','Tables have been optimized.','جدولها و نمایه ها','جستجوی داده در جدول','موتور','طول داده','طول ایندکس','داده اختیاری','سطرها','تحلیل','بهینه سازی','بررسی','تعمیر','کوتاه کردن','انتقال به یک پایگاه داده دیگر','انتقال','کپی کردن','صف ها','زمانبندی','زمان معین','اکنون');break;case"bn":$R=array('আপনি কি নিশ্চিত?','নথি আপলোড সম্ভব হচ্ছে না।','সর্বাধিক নথি আপলোড আকার %sB','নথি অনুপস্থিত।','ফাঁকা','আসল','কোনো টেবিল নেই','ভাষা','ব্যবহার','উক্ত যেকোন একটি সম্প্রসারন ব্যবহার করুন।','ফাইল টি বর্তমানে অবস্তিত।','ব্যবহারকারীর গঠিত প্রকার','সংখ্যা','দিন এবং সময়','স্ট্রিং','দ্বিমূল','জালিকা','রেখাগণিত','তালিকা','প্রণালী','ধারনকারী','ব্যবহারকারীর নাম','গুপ্ত সঙ্কেত','তথ্য-সম্ভার','প্রবেশ','সর্বসময়ের জন্য প্রবেশ','তথ্য নির্বাচন করুন','গঠন','পর্যবেক্ষণ-টিকে পরিবর্তন করুন','টেবিল পরিবর্তন করা','নতুন অনুচ্ছেদ','শেষ পৃষ্ঠা','সম্পাদন',array('%d','বাইট'),'নির্বাচন করুন','একত্রিত ফাংশন','মোট পরিমাণ','খুঁজুন','যত্রতত্র','বাছাই করা','অধোগামী','সীমা','পাঠ দৈর্ঘ্য','কর্ম','Full table scan','এস.কিউ.এল র্নিদেশ','মুক্ত','রক্ষা করুন','তথ্য-সম্ভার টিকে পরিবর্তন ঘটান','পরিকল্পনা','পরিকল্পনা তৈরি করুন','তথ্য-সম্ভার এর গঠন','অনুমতি','ডাম্প','প্রস্থান','তথ্য-সম্ভার','পরিকল্পনা','নতুন টেবিল তৈরি করা','নির্বাচন করুন','ltr','অবৈধ সি.এস.আর.এফ টোকেন','সঠিক ভাবে প্রস্থান হয়েছে।','সেসন ধারন সক্রিয় করতে হবে।','সেসনের সময় অতিবাহিত হয়েছে, পুনরায় প্রবেশ করুন','অবৈধ পরিচয়পত্র','সম্প্রসারন নেই','পি.এইচ.পি গৃহীত সম্প্রসারন(%s) নেই','আপনার লেখাটি অনেক বড়, অনুগ্রহ করে ছোট করুন অথবা %s আকার বর্ধিত করুন।','সঠিক তথ্য-সম্ভার নয়।','তথ্য-সম্ভার-সমূহকে ধংস করা হল।','তথ্য-সম্ভার নির্বাচন করুন','নতুন তথ্য-সম্ভার তৈরী করুন','প্রক্রিয়া সূচি','পরিবর্তনশীল','অবস্থা','%s সংস্করণ: %s পি.এইচ.পি সম্প্রসারন %S','প্রস্থান করেছেন : %s','একত্রীকরণ','টেবিলগুলো','বিনষ্ট','পুনরুজ্জীবিত করুন','পরিকল্পনা','অবৈধ পরিকল্পনা','কোনো সারি নেই।','%.3f s','বহিরাগত সহায়ক চাবি','একত্রীকরণ','বিনষ্ট - এর সময়','স্তম্ভের নাম','স্থিতিমাপের নাম','প্রকার','দৈর্ঘ্য','বিকল্প','স্বয়ংক্রিয় বর্ধিত হওয়া','প্রাথমিক মান','মন্তব্য','পরবর্তী সংজোযন','উপরে উঠুন','নিছে নামুন','অপসারণ','পর্যবেক্ষণ','টেবিল','স্তম্ব','সুচি','সুচি-টিকে পরিবর্তন করুন','উৎস','লক্ষ্য','আধুনিক করার সময়','পরির্বতন','বহিরাগত সহায়ক চাবি সংজোযন','ট্রিগার','ট্রিগার সংজোযন','স্থায়ী লিঙ্ক','রপ্তানি','উৎপাদন','বিন্যাস','নিয়মিত','ঘটনাবলী','তথ্য','নতুন ব্যবহারকারী','অনুসন্ধানে ভুল রয়েছে',array('%d','সারি'),array('অনুসন্ধান সম্পূর্ণ হয়েছে,','%d সারি প্রভাবিত।'),'সম্পন্ন করার জন্য কোন নির্দেশ নেই।',array('%d টি এস.কিউ.এল ','অনুসন্ধান সঠিকভাবে ঘটেছে।'),'নথি আপলোড','নথি আপলোড বন্ধ করা আছে।','সম্পন্ন','ভুল হলে থেমো','কেবল মাত্র ভুল প্রর্দশন কর','ধারনকারী হইতে','ওয়েব ধারনকারী নথি','নথি দেখা','ইতিহাস','পরিষ্কার','সব সম্পাদন করা','অনুচ্ছেদ টিকে বিনষ্ট করা হল।','অনুচ্ছেদ টিকে আধুনিক করা হল।','অনুচ্ছেদ টিকে প্রবেশ করানো হল।','প্রবেশ','সংরক্ষন','সংরক্ষন এবং সম্পাদন চালিয়ে যাওয়া','সংরক্ষন এবং পরর্বতি সংযোজন','বিনষ্ট','টেবিলটিকে লুপ্ত করা হল।','টেবিলটিকে পরির্বতন করা হল।','টেবিল তৈরি করা হল।','টেবিল তৈরি করা','সর্বচ্চ সংখ্যক ব্যবহার উপযোগী স্থান অতিক্রান্ত হয়েছে, অনুগ্রহ করে %s এবং %s বাড়ান।','টেবিলটির নাম','উপায়','বিভাজন কারী','বিভাজন','বিভাজক নাম','মানগুলি','সুচি-টিকে পরিবর্তন করা হল।','সুচি প্রকার','স্তম্ভ (দৈর্ঘ্য)','নাম','তথ্য-সম্ভার টিকে ধংস করা হল।','তথ্য-সম্ভার টির নাম পরিবর্তন করা হল।','তথ্য-সম্ভারটি তৈরী করা হল।','তথ্য-সম্ভার টিতে পরিবর্তন ঘটান হল।','তথ্য-সম্ভার তৈরি করুন।','পরিকল্পনাটি বিনষ্ট করা হল।','পরিকল্পনাটি তৈরি করা হল।','পরিকল্পনাটি পরির্বতন করা হল।','আহ্বান',array('নিয়মিত কাজগুলি কে ডাকা হয়েছে','%S গুলি সারি প্রভাবিত হয়েছে।'),'বহিরাগত সহায়ক চাবি বিনষ্ট করা হল।','বহিরাগত সহায়ক চাবি পরির্বতন করা হল।','বহিরাগত সহায়ক চাবি তৈরি করা হল।','উৎস এবং লক্ষ্যের তথ্যের প্রকার একইরকম হওয়া বাঞ্চনীয়, উৎস স্তম্ভের সাথে সূচি থাকতে হবে এবং উৎস তে তথ্য থাকতে হবে।','বহিরাগত সহায়ক চাবি','লক্ষ্য টেবিল','পরির্বতন','স্তম্ভ সংজোযন','পর্যবেক্ষণ-টিকে বিনষ্ট করা হল।','পর্যবেক্ষণ-টিকে পরিবর্তন করা হল।','পর্যবেক্ষণ-টি তৈরি করা হল।','পর্যবেক্ষণ তৈরি করুন','ঘটনা লুপ্ত করা হল।','ঘটনা পরিবর্তন করা হল।','ঘটনা তৈরি করা হল।','ঘটনাবলী পরিবর্তন করা','ঘটনাবলী তৈরি করা','শুরু করা','শেষ করা','প্রত্যেকে','সফলের পর সংরক্ষিত করা','নিয়মিত কাজটিকে বিনষ্ট করা হল।','নিয়মিত কাজটিকে পরির্বতন করা হল।','নিয়মিত কাজ তৈরি করা হল।','ফাংশন পরিবর্তন করুন','পদ্ধতি পরিবর্তন করুন','ফাংশন তৈরি করুন','পদ্ধতি তৈরি করুন','প্রত্যাবর্তিত প্রকার','গঠিত ক্রম বিনষ্ট করা হল।','ক্রম তৈরি করা হল।','ক্রম পরির্বতন করা হল।','ক্রম পরির্বতন','ক্রম গঠন','ব্যবহারকারীর গঠিত প্রকার বিনষ্ট করা হল।','ব্যবহারকারীর গঠিত প্রকার তৈরি করা হল।','প্রকার পরিবর্তন','প্রকার গঠন','ট্রিগার বিনষ্ট করা হল','ট্রিগার পরির্বতন করা হল','ট্রিগার তৈরি করা হল','ট্রিগার পরির্বতন','ট্রিগার তৈরি','সময়','ঘটনা','এই ব্যবহারকারীকে মুছে দেওয়া হল।','ব্যবহারকারীকে পরিবর্ধন করা হল।','নতুন ব্যবহারকারীকে তৈরী ক্রা হল।','হ্যাশ [কুচি - কুচি করিয়া কাটা]','নিয়মিত','অনুমতি প্রদান','প্রত্যাহার',array('%d প্রক্রিয়া (গুলি)','বিনষ্ট করা হল'),'সর্বমোট %d','হত করা',array('%d অনুচ্ছেদ (গুলি)','প্রভাবিত হয়েছে।'),'মানটির উপর ২ বার ক্লিক করুন।',array('%d টি সারি','আমদানি করা হল।'),'টেবিল টিকে নির্বাচন করা জাছে না!','সম্পাদন','সম্পর্ক','সম্পাদন বোতামটি ব্যবহার করুন।','পৃষ্ঠা','শেষ','সম্পূর্ণ ফল','একই মত','আমদানি',',','টেবিল গুলিকে অগ্রভাগহীন করা হল।','টেবিলটিকে সরান হল।','টেবিলটির অনুলিপি তৈরি করা হল।','টেবিলগুলি কে লুপ্ত করা হল।','টেবিলগুলি কে সর্বোৎকৃষ্ট করা হল।','টেবিল এবং মতামত','টেবিলে তথ্য খুঁজুন','উপায়','তথ্যর দৈর্ঘ্য','সূচক দৈর্ঘ্য','মুক্ত তথ্য','সারি','পর্যবেক্ষন','সর্বোৎকৃষ্ট','নিক্ষন','সংশোধন','ছাঁটিয়া দেত্তয়া','অন্যত্র তথ্য-সম্ভার গমন','অন্যত্র গমন','অনুলিপি','ক্রম','সময়সূচি','নির্দিষ্ট সময়ে','না');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$qe=array_search("",$b->operators);if($qe!==false)unset($b->operators[$qe]);}function
dsn($Ab,$U,$B,$Vb='auth_error'){set_exception_handler($Vb);parent::__construct($Ab,$U,$B);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($D,$Vf=false){$E=parent::query($D);if(!$E){$Ob=$this->errorInfo();$this->error=$Ob[2];return
false;}$this->store_result($E);return$E;}function
multi_query($D){return$this->_result=$this->query($D);}function
store_result($E=null){if(!$E)$E=$this->_result;if($E->columnCount()){$E->num_rows=$E->rowCount();return$E;}$this->affected_rows=$E->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($D,$l=0){$E=$this->query($D);if(!$E)return
false;$G=$E->fetch();return$G[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$G=(object)$this->getColumnMeta($this->_offset++);$G->orgtable=$G->table;$G->orgname=$G->name;$G->charsetnr=(in_array("blob",(array)$G->flags)?63:0);return$G;}}}$yb=array();$yb["sqlite"]="SQLite 3";$yb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$te=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($gc){$this->_link=new
SQLite3($gc);$ig=$this->_link->version();$this->server_info=$ig["versionString"];}function
query($D){$E=@$this->_link->query($D);if(!$E){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($E->numColumns())return
new
Min_Result($E);$this->affected_rows=$this->_link->changes();return
true;}function
quote($L){return(is_utf8($L)?"'".$this->_link->escapeString($L)."'":"x'".reset(unpack('H*',$L))."'");}function
store_result(){return$this->_result;}function
result($D,$l=0){$E=$this->query($D);if(!is_object($E))return
false;$G=$E->_result->fetchArray();return$G[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($E){$this->_result=$E;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$S=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($gc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($gc);}function
query($D,$Vf=false){$wd=($Vf?"unbufferedQuery":"query");$E=@$this->_link->$wd($D,SQLITE_BOTH,$k);if(!$E){$this->error=$k;return
false;}elseif($E===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($E);}function
quote($L){return"'".sqlite_escape_string($L)."'";}function
store_result(){return$this->_result;}function
result($D,$l=0){$E=$this->query($D);if(!is_object($E))return
false;$G=$E->_result->fetch();return$G[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($E){$this->_result=$E;if(method_exists($E,'numRows'))$this->num_rows=$E->numRows();}function
fetch_assoc(){$G=$this->_result->fetch(SQLITE_ASSOC);if(!$G)return
false;$F=array();foreach($G
as$v=>$W)$F[($v[0]=='"'?idf_unescape($v):$v)]=$W;return$F;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$_=$this->_result->fieldName($this->_offset++);$ne='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ne\\.)?$ne\$~",$_,$z)){$N=($z[3]!=""?$z[3]:idf_unescape($z[2]));$_=($z[5]!=""?$z[5]:idf_unescape($z[4]));}return(object)array("name"=>$_,"orgname"=>$_,"orgtable"=>$N,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($gc){$this->dsn(DRIVER.":$gc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($gc){if(is_readable($gc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$gc)?$gc:dirname($_SERVER["SCRIPT_FILENAME"])."/$gc")." AS a")){$this->Min_SQLite($gc);return
true;}return
false;}function
multi_query($D){return$this->_result=$this->query($D);}function
next_result(){return
false;}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($D,$Z,$x,$A=0,$cf=" "){return" $D$Z".($x!==null?$cf."LIMIT $x".($A?" OFFSET $A":""):"");}function
limit1($D,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($D,$Z,1):" $D$Z");}function
db_collation($j,$Ua){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($i){return
array();}function
table_status($_=""){$F=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($_!=""?" AND name = ".q($_):""))as$G){$G["Auto_increment"]="";$F[$G["Name"]]=$G;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$G)$F[$G["name"]]["Auto_increment"]=$G["seq"];return($_!=""?$F[$_]:$F);}function
is_view($O){return$O["Engine"]=="view";}function
fk_support($O){global$g;return$_GET["create"]==""&&!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($N){$F=array();foreach(get_rows("PRAGMA table_info(".table($N).")")as$G){$S=strtolower($G["type"]);$rb=$G["dflt_value"];$F[$G["name"]]=array("field"=>$G["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$rb,$z)?str_replace("''","'",$z[1]):($rb=="NULL"?null:$rb)),"null"=>!$G["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$G["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$G["pk"],);}return$F;}function
indexes($N,$h=null){$F=array();$we=array();foreach(fields($N)as$l){if($l["primary"])$we[]=$l["field"];}if($we)$F[""]=array("type"=>"PRIMARY","columns"=>$we,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($N).")")as$G){$F[$G["name"]]["type"]=($G["unique"]?"UNIQUE":"INDEX");$F[$G["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($G["name"]).")")as$Ue)$F[$G["name"]]["columns"][]=$Ue["name"];}return$F;}function
foreign_keys($N){$F=array();foreach(get_rows("PRAGMA foreign_key_list(".table($N).")")as$G){$n=&$F[$G["id"]];if(!$n)$n=$G;$n["source"][]=$G["from"];$n["target"][]=$G["to"];}return$F;}function
view($_){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($_))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j){return
false;}function
adminer_error(){global$g;return
h($g->error);}function
exact_value($W){return
q($W);}function
check_sqlite_name($_){global$g;$cc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($cc)\$~",$_)){$g->error=lang(9,str_replace("|",", ",$cc));return
false;}return
true;}function
create_database($j,$d){global$g;if(file_exists($j)){$g->error=lang(10);return
false;}if(!check_sqlite_name($j))return
false;$y=new
Min_SQLite($j);$y->query('PRAGMA encoding = "UTF-8"');$y->query('CREATE TABLE adminer (i)');$y->query('DROP TABLE adminer');return
true;}function
drop_databases($i){global$g;$g->Min_SQLite(":memory:");foreach($i
as$j){if(!@unlink($j)){$g->error=lang(10);return
false;}}return
true;}function
rename_database($_,$d){global$g;if(!check_sqlite_name($_))return
false;$g->Min_SQLite(":memory:");$g->error=lang(10);return@rename(DB,$_);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($N,$_,$m,$kc,$Ya,$Kb,$d,$Aa,$ke){$c=array();foreach($m
as$l){if($l[1])$c[]=($N!=""&&$l[0]==""?"ADD ":"  ").implode($l[1]);}$c=array_merge($c,$kc);if($N!=""){foreach($c
as$W){if(!queries("ALTER TABLE ".table($N)." $W"))return
false;}if($N!=$_&&!queries("ALTER TABLE ".table($N)." RENAME TO ".table($_)))return
false;}elseif(!queries("CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n)"))return
false;if($Aa)queries("UPDATE sqlite_sequence SET seq = $Aa WHERE name = ".q($_));return
true;}function
alter_indexes($N,$c){foreach($c
as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($N."_"))." ON ".table($N)." $W[2]"))return
false;}return
true;}function
truncate_tables($P){return
apply_queries("DELETE FROM",$P);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($P){return
apply_queries("DROP TABLE",$P);}function
move_tables($P,$Y,$Cf){return
false;}function
trigger($_){global$g;if($_=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($_)),$z);return
array("Timing"=>strtoupper($z[1]),"Event"=>strtoupper($z[2]),"Trigger"=>$_,"Statement"=>$z[3]);}function
triggers($N){$F=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($N))as$G){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$G["sql"],$z);$F[$G["name"]]=array($z[1],$z[2]);}return$F;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($_,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($N,$K){return
queries("INSERT INTO ".table($N).($K?" (".implode(", ",array_keys($K)).")\nVALUES (".implode(", ",$K).")":"DEFAULT VALUES"));}function
insert_update($N,$K,$we){return
queries("REPLACE INTO ".table($N)." (".implode(", ",array_keys($K)).") VALUES (".implode(", ",$K).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$D){return$g->query("EXPLAIN $D");}function
found_rows($O,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ye){return
true;}function
create_sql($N,$Aa){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($N));}function
truncate_sql($N){return"DELETE FROM ".table($N);}function
use_sql($ob){}function
trigger_sql($N,$M){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($N)));}function
show_variables(){global$g;$F=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$v)$F[$v]=$g->result("PRAGMA $v");return$F;}function
show_status(){$F=array();foreach(get_vals("PRAGMA compile_options")as$Qd){list($v,$W)=explode("=",$Qd,2);$F[$v]=$W;}return$F;}function
support($ec){return
ereg('^(view|trigger|variables|status|dump)$',$ec);}$u="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$of=array_keys($T);$bg=array();$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$tc=array("hex","length","lower","round","unixepoch","upper");$yc=array("avg","count","count distinct","group_concat","max","min","sum");$Db=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$yb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$te=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Nb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($J,$U,$B){global$b;$j=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($J,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($B,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$j!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$ig=pg_version($this->_link);$this->server_info=$ig["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($L){return"'".pg_escape_string($this->_link,$L)."'";}function
select_db($ob){global$b;if($ob==$b->database())return$this->_database;$F=@pg_connect("$this->_string dbname='".addcslashes($ob,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($F)$this->_link=$F;return$F;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($D,$Vf=false){$E=@pg_query($this->_link,$D);if(!$E){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($E)){$this->affected_rows=pg_affected_rows($E);return
true;}return
new
Min_Result($E);}function
multi_query($D){return$this->_result=$this->query($D);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($D,$l=0){$E=$this->query($D);if(!$E||!$E->num_rows)return
false;return
pg_fetch_result($E->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($E){$this->_result=$E;$this->num_rows=pg_num_rows($E);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$F=new
stdClass;if(function_exists('pg_field_table'))$F->orgtable=pg_field_table($this->_result,$e);$F->name=pg_field_name($this->_result,$e);$F->orgname=$F->name;$F->type=pg_field_type($this->_result,$e);$F->charsetnr=($F->type=="bytea"?63:0);return$F;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($J,$U,$B){global$b;$j=$b->database();$L="pgsql:host='".str_replace(":","' port='",addcslashes($J,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$L dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",$U,$B);return
true;}function
select_db($ob){global$b;return($b->database()==$ob);}function
close(){}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$kb=$b->credentials();if($g->connect($kb[0],$kb[1],$kb[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($D,$Z,$x,$A=0,$cf=" "){return" $D$Z".($x!==null?$cf."LIMIT $x".($A?" OFFSET $A":""):"");}function
limit1($D,$Z){return" $D$Z";}function
db_collation($j,$Ua){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($i){return
array();}function
table_status($_=""){$F=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($_!=""?" AND relname = ".q($_):""))as$G)$F[$G["Name"]]=$G;return($_!=""?$F[$_]:$F);}function
is_view($O){return$O["Engine"]=="view";}function
fk_support($O){return
true;}function
fields($N){$F=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($N)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$G){ereg('(.*)(\\((.*)\\))?',$G["full_type"],$z);list(,$G["type"],,$G["length"])=$z;$G["full_type"]=$G["type"].($G["length"]?"($G[length])":"");$G["null"]=($G["attnotnull"]=="f");$G["auto_increment"]=eregi("^nextval\\(",$G["default"]);$G["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$G["default"],$z))$G["default"]=($z[1][0]=="'"?idf_unescape($z[1]):$z[1]);$F[$G["field"]]=$G;}return$F;}function
indexes($N,$h=null){global$g;if(!is_object($h))$h=$g;$F=array();$xf=$h->result("SELECT oid FROM pg_class WHERE relname = ".q($N));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $xf AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $xf AND ci.oid = i.indexrelid",$h)as$G){$F[$G["relname"]]["type"]=($G["indisprimary"]=="t"?"PRIMARY":($G["indisunique"]=="t"?"UNIQUE":"INDEX"));$F[$G["relname"]]["columns"]=array();foreach(explode(" ",$G["indkey"])as$Ic)$F[$G["relname"]]["columns"][]=$f[$Ic];$F[$G["relname"]]["lengths"]=array();}return$F;}function
foreign_keys($N){global$Ld;$F=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($N)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$G){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$G['definition'],$z)){$G['source']=array_map('trim',explode(',',$z[1]));$G['table']=$z[2];if(preg_match('~(.+)\.(.+)~',$z[2],$jd)){$G['ns']=$jd[1];$G['table']=$jd[2];}$G['target']=array_map('trim',explode(',',$z[3]));$G['on_delete']=(preg_match("~ON DELETE ($Ld)~",$z[4],$jd)?$jd[1]:'NO ACTION');$G['on_update']=(preg_match("~ON UPDATE ($Ld)~",$z[4],$jd)?$jd[1]:'NO ACTION');$F[$G['conname']]=$G;}}return$F;}function
view($_){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($_).")"));}function
collations(){return
array();}function
information_schema($j){return($j=="information_schema");}function
adminer_error(){global$g;$F=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$F,$z))$F=$z[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($z[3]).'})(.*)~','\\1<b>\\2</b>',$z[2]).$z[4];return
nl_br($F);}function
exact_value($W){return
q($W);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($i){global$g;$g->close();return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($_,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($_));}function
auto_increment(){return"";}function
alter_table($N,$_,$m,$kc,$Ya,$Kb,$d,$Aa,$ke){$c=array();$De=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c[]="DROP $e";else{$gg=$W[5];unset($W[5]);if(isset($W[6])&&$l[0]=="")$W[1]=($W[1]=="bigint"?" big":" ")."serial";if($l[0]=="")$c[]=($N!=""?"ADD ":"  ").implode($W);else{if($e!=$W[0])$De[]="ALTER TABLE ".table($N)." RENAME $e TO $W[0]";$c[]="ALTER $e TYPE$W[1]";if(!$W[6]){$c[]="ALTER $e ".($W[3]?"SET$W[3]":"DROP DEFAULT");$c[]="ALTER $e ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($l[0]!=""||$gg!="")$De[]="COMMENT ON COLUMN ".table($N).".$W[0] IS ".($gg!=""?substr($gg,9):"''");}}$c=array_merge($c,$kc);if($N=="")array_unshift($De,"CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($De,"ALTER TABLE ".table($N)."\n".implode(",\n",$c));if($N!=""&&$N!=$_)$De[]="ALTER TABLE ".table($N)." RENAME TO ".table($_);if($N!=""||$Ya!="")$De[]="COMMENT ON TABLE ".table($_)." IS ".q($Ya);if($Aa!=""){}foreach($De
as$D){if(!queries($D))return
false;}return
true;}function
alter_indexes($N,$c){$hb=array();$zb=array();foreach($c
as$W){if($W[0]!="INDEX")$hb[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);elseif($W[2]=="DROP")$zb[]=idf_escape($W[1]);elseif(!queries("CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($N."_"))." ON ".table($N)." $W[2]"))return
false;}return((!$hb||queries("ALTER TABLE ".table($N).implode(",",$hb)))&&(!$zb||queries("DROP INDEX ".implode(", ",$zb))));}function
truncate_tables($P){return
queries("TRUNCATE ".implode(", ",array_map('table',$P)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($P){return
queries("DROP TABLE ".implode(", ",array_map('table',$P)));}function
move_tables($P,$Y,$Cf){foreach($P
as$N){if(!queries("ALTER TABLE ".table($N)." SET SCHEMA ".idf_escape($Cf)))return
false;}foreach($Y
as$N){if(!queries("ALTER VIEW ".table($N)." SET SCHEMA ".idf_escape($Cf)))return
false;}return
true;}function
trigger($_){if($_=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$H=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($_));return
reset($H);}function
triggers($N){$F=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($N))as$G)$F[$G["trigger_name"]]=array($G["condition_timing"],$G["event_manipulation"]);return$F;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($N,$K){return
queries("INSERT INTO ".table($N).($K?" (".implode(", ",array_keys($K)).")\nVALUES (".implode(", ",$K).")":"DEFAULT VALUES"));}function
insert_update($N,$K,$we){global$g;$cg=array();$Z=array();foreach($K
as$v=>$W){$cg[]="$v = $W";if(isset($we[idf_unescape($v)]))$Z[]="$v = $W";}return($Z&&queries("UPDATE ".table($N)." SET ".implode(", ",$cg)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($N)." (".implode(", ",array_keys($K)).") VALUES (".implode(", ",$K).")");}function
last_id(){return
0;}function
explain($g,$D){return$g->query("EXPLAIN $D");}function
found_rows($O,$Z){global$g;if(ereg(" rows=([0-9]+)",$g->result("EXPLAIN SELECT * FROM ".idf_escape($O["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Le))return$Le[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Xe){global$g,$T,$of;$F=$g->query("SET search_path TO ".idf_escape($Xe));foreach(types()as$S){if(!isset($T[$S])){$T[$S]=0;$of[lang(11)][]=$S;}}return$F;}function
use_sql($ob){return"\connect ".idf_escape($ob);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($ec){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$ec);}$u="pgsql";$T=array();$of=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$v=>$W){$T+=$W;$of[$v]=array_keys($W);}$bg=array();$Pd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$tc=array("char_length","lower","round","to_hex","to_timestamp","upper");$yc=array("avg","count","count distinct","max","min","sum");$Db=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$yb["oracle"]="Oracle";if(isset($_GET["oracle"])){$te=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Nb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($J,$U,$B){$this->_link=@oci_new_connect($U,$B,$J,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$k=oci_error();$this->error=$k["message"];return
false;}function
quote($L){return"'".str_replace("'","''",$L)."'";}function
select_db($ob){return
true;}function
query($D,$Vf=false){$E=oci_parse($this->_link,$D);if(!$E){$k=oci_error($this->_link);$this->error=$k["message"];return
false;}set_error_handler(array($this,'_error'));$F=@oci_execute($E);restore_error_handler();if($F){if(oci_num_fields($E))return
new
Min_Result($E);$this->affected_rows=oci_num_rows($E);}return$F;}function
multi_query($D){return$this->_result=$this->query($D);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($D,$l=1){$E=$this->query($D);if(!is_object($E)||!oci_fetch($E->_result))return
false;return
oci_result($E->_result,$l);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($E){$this->_result=$E;}function
_convert($G){foreach((array)$G
as$v=>$W){if(is_a($W,'OCI-Lob'))$G[$v]=$W->load();}return$G;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$F=new
stdClass;$F->name=oci_field_name($this->_result,$e);$F->orgname=$F->name;$F->type=oci_field_type($this->_result,$e);$F->charsetnr=(ereg("raw|blob|bfile",$F->type)?63:0);return$F;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($J,$U,$B){$this->dsn("oci:dbname=//$J;charset=AL32UTF8",$U,$B);return
true;}function
select_db($ob){return
true;}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$kb=$b->credentials();if($g->connect($kb[0],$kb[1],$kb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($D,$Z,$x,$A=0,$cf=" "){return($A?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $D$Z) t WHERE rownum <= ".($x+$A).") WHERE rnum > $A":($x!==null?" * FROM (SELECT $D$Z) WHERE rownum <= ".($x+$A):" $D$Z"));}function
limit1($D,$Z){return" $D$Z";}function
db_collation($j,$Ua){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($i){return
array();}function
table_status($_=""){$F=array();$Ze=q($_);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($_!=""?" AND table_name = $Ze":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($_!=""?" WHERE view_name = $Ze":""))as$G){if($_!="")return$G;$F[$G["Name"]]=$G;}return$F;}function
is_view($O){return$O["Engine"]=="view";}function
fk_support($O){return
true;}function
fields($N){$F=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($N)." ORDER BY column_id")as$G){$S=$G["DATA_TYPE"];$w="$G[DATA_PRECISION],$G[DATA_SCALE]";if($w==",")$w=$G["DATA_LENGTH"];$F[$G["COLUMN_NAME"]]=array("field"=>$G["COLUMN_NAME"],"full_type"=>$S.($w?"($w)":""),"type"=>strtolower($S),"length"=>$w,"default"=>$G["DATA_DEFAULT"],"null"=>($G["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$F;}function
indexes($N,$h=null){$F=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($N)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$G){$F[$G["INDEX_NAME"]]["type"]=($G["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($G["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$F[$G["INDEX_NAME"]]["columns"][]=$G["COLUMN_NAME"];$F[$G["INDEX_NAME"]]["lengths"][]=($G["CHAR_LENGTH"]&&$G["CHAR_LENGTH"]!=$G["COLUMN_LENGTH"]?$G["CHAR_LENGTH"]:null);}return$F;}function
view($_){$H=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($_));return
reset($H);}function
collations(){return
array();}function
information_schema($j){return
false;}function
adminer_error(){global$g;return
h($g->error);}function
exact_value($W){return
q($W);}function
explain($g,$D){$g->query("EXPLAIN PLAN FOR $D");return$g->query("SELECT * FROM plan_table");}function
found_rows($O,$Z){}function
alter_table($N,$_,$m,$kc,$Ya,$Kb,$d,$Aa,$ke){$c=$zb=array();foreach($m
as$l){$W=$l[1];if($W&&$l[0]!=""&&idf_escape($l[0])!=$W[0])queries("ALTER TABLE ".table($N)." RENAME COLUMN ".idf_escape($l[0])." TO $W[0]");if($W)$c[]=($N!=""?($l[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($N!=""?")":"");else$zb[]=idf_escape($l[0]);}if($N=="")return
queries("CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($N)."\n".implode("\n",$c)))&&(!$zb||queries("ALTER TABLE ".table($N)." DROP (".implode(", ",$zb).")"))&&($N==$_||queries("ALTER TABLE ".table($N)." RENAME TO ".table($_)));}function
foreign_keys($N){return
array();}function
truncate_tables($P){return
apply_queries("TRUNCATE TABLE",$P);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($P){return
apply_queries("DROP TABLE",$P);}function
begin(){return
true;}function
insert_into($N,$K){return
queries("INSERT INTO ".table($N)." (".implode(", ",array_keys($K)).")\nVALUES (".implode(", ",$K).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Ye){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Ye));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$H=get_rows('SELECT * FROM v$instance');return
reset($H);}function
support($ec){return
ereg("view|scheme|processlist|drop_col|variables|status",$ec);}$u="oracle";$T=array();$of=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$v=>$W){$T+=$W;$of[$v]=array_keys($W);}$bg=array();$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$tc=array("length","lower","round","upper");$yc=array("avg","count","count distinct","max","min","sum");$Db=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$yb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$te=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$k)$this->error.="$k[message]\n";$this->error=rtrim($this->error);}function
connect($J,$U,$B){$this->_link=@sqlsrv_connect($J,array("UID"=>$U,"PWD"=>$B));if($this->_link){$Jc=sqlsrv_server_info($this->_link);$this->server_info=$Jc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($L){return"'".str_replace("'","''",$L)."'";}function
select_db($ob){return$this->query("USE $ob");}function
query($D,$Vf=false){$E=sqlsrv_query($this->_link,$D);if(!$E){$this->_get_error();return
false;}return$this->store_result($E);}function
multi_query($D){$this->_result=sqlsrv_query($this->_link,$D);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($E=null){if(!$E)$E=$this->_result;if(sqlsrv_field_metadata($E))return
new
Min_Result($E);$this->affected_rows=sqlsrv_rows_affected($E);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($D,$l=0){$E=$this->query($D);if(!is_object($E))return
false;$G=$E->fetch_row();return$G[$l];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($E){$this->_result=$E;}function
_convert($G){foreach((array)$G
as$v=>$W){if(is_a($W,'DateTime'))$G[$v]=$W->format("Y-m-d H:i:s");}return$G;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$l=$this->_fields[$this->_offset++];$F=new
stdClass;$F->name=$l["Name"];$F->orgname=$l["Name"];$F->type=($l["Type"]==1?254:0);return$F;}function
seek($A){for($p=0;$p<$A;$p++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($J,$U,$B){$this->_link=@mssql_connect($J,$U,$B);if($this->_link){$E=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$G=$E->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$G[0]] $G[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($L){return"'".str_replace("'","''",$L)."'";}function
select_db($ob){return
mssql_select_db($ob);}function
query($D,$Vf=false){$E=mssql_query($D,$this->_link);if(!$E){$this->error=mssql_get_last_message();return
false;}if($E===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($E);}function
multi_query($D){return$this->_result=$this->query($D);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($D,$l=0){$E=$this->query($D);if(!is_object($E))return
false;return
mssql_result($E->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($E){$this->_result=$E;$this->num_rows=mssql_num_rows($E);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$F=mssql_fetch_field($this->_result);$F->orgtable=$F->table;$F->orgname=$F->name;return$F;}function
seek($A){mssql_data_seek($this->_result,$A);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($r){return"[".str_replace("]","]]",$r)."]";}function
table($r){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$kb=$b->credentials();if($g->connect($kb[0],$kb[1],$kb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($D,$Z,$x,$A=0,$cf=" "){return($x!==null?" TOP (".($x+$A).")":"")." $D$Z";}function
limit1($D,$Z){return
limit($D,$Z,1);}function
db_collation($j,$Ua){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($j));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($i){global$g;$F=array();foreach($i
as$j){$g->select_db($j);$F[$j]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$F;}function
table_status($_=""){$F=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($_!=""?" AND name = ".q($_):""))as$G){if($_!="")return$G;$F[$G["Name"]]=$G;}return$F;}function
is_view($O){return$O["Engine"]=="VIEW";}function
fk_support($O){return
true;}function
fields($N){$F=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($N))as$G){$S=$G["type"];$w=(ereg("char|binary",$S)?$G["max_length"]:($S=="decimal"?"$G[precision],$G[scale]":""));$F[$G["name"]]=array("field"=>$G["name"],"full_type"=>$S.($w?"($w)":""),"type"=>$S,"length"=>$w,"default"=>$G["default"],"null"=>$G["is_nullable"],"auto_increment"=>$G["is_identity"],"collation"=>$G["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$G["is_identity"],);}return$F;}function
indexes($N,$h=null){$F=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($N),$h)as$G){$F[$G["name"]]["type"]=($G["is_primary_key"]?"PRIMARY":($G["is_unique"]?"UNIQUE":"INDEX"));$F[$G["name"]]["lengths"]=array();$F[$G["name"]]["columns"][$G["key_ordinal"]]=$G["column_name"];}return$F;}function
view($_){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($_))));}function
collations(){$F=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$F[ereg_replace("_.*","",$d)][]=$d;return$F;}function
information_schema($j){return
false;}function
adminer_error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($W){return
q($W);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).(eregi('^[a-z0-9_]+$',$d)?" COLLATE $d":""));}function
drop_databases($i){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$i)));}function
rename_database($_,$d){if(eregi('^[a-z0-9_]+$',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($_));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($N,$_,$m,$kc,$Ya,$Kb,$d,$Aa,$ke){$c=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c["DROP"][]=" COLUMN $e";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($l[0]=="")$c["ADD"][]="\n  ".implode("",$W).($N==""?substr($kc[$W[0]],16+strlen($W[0])):"");else{unset($W[6]);if($e!=$W[0])queries("EXEC sp_rename ".q(table($N).".$e").", ".q(idf_unescape($W[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$W)][]="";}}}if($N=="")return
queries("CREATE TABLE ".table($_)." (".implode(",",(array)$c["ADD"])."\n)");if($N!=$_)queries("EXEC sp_rename ".q(table($N)).", ".q($_));if($kc)$c[""]=$kc;foreach($c
as$v=>$W){if(!queries("ALTER TABLE ".idf_escape($_)." $v".implode(",",$W)))return
false;}return
true;}function
alter_indexes($N,$c){$s=array();$zb=array();foreach($c
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$zb[]=idf_escape($W[1]);else$s[]=idf_escape($W[1])." ON ".table($N);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($N."_"))." ON ".table($N):"ALTER TABLE ".table($N)." ADD PRIMARY KEY")." $W[2]"))return
false;}return(!$s||queries("DROP INDEX ".implode(", ",$s)))&&(!$zb||queries("ALTER TABLE ".table($N)." DROP ".implode(", ",$zb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($N,$K){return
queries("INSERT INTO ".table($N).($K?" (".implode(", ",array_keys($K)).")\nVALUES (".implode(", ",$K).")":"DEFAULT VALUES"));}function
insert_update($N,$K,$we){$cg=array();$Z=array();foreach($K
as$v=>$W){$cg[]="$v = $W";if(isset($we[idf_unescape($v)]))$Z[]="$v = $W";}return
queries("MERGE ".table($N)." USING (VALUES(".implode(", ",$K).")) AS source (c".implode(", c",range(1,count($K))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$cg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($K)).") VALUES (".implode(", ",$K).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$D){$g->query("SET SHOWPLAN_ALL ON");$F=$g->query($D);$g->query("SET SHOWPLAN_ALL OFF");return$F;}function
found_rows($O,$Z){}function
foreign_keys($N){$F=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($N))as$G){$n=&$F[$G["FK_NAME"]];$n["table"]=$G["PKTABLE_NAME"];$n["source"][]=$G["FKCOLUMN_NAME"];$n["target"][]=$G["PKCOLUMN_NAME"];}return$F;}function
truncate_tables($P){return
apply_queries("TRUNCATE TABLE",$P);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($P){return
queries("DROP TABLE ".implode(", ",array_map('table',$P)));}function
move_tables($P,$Y,$Cf){return
apply_queries("ALTER SCHEMA ".idf_escape($Cf)." TRANSFER",array_merge($P,$Y));}function
trigger($_){if($_=="")return
array();$H=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($_));$F=reset($H);if($F)$F["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$F["text"]);return$F;}function
triggers($N){$F=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($N))as$G)$F[$G["name"]]=array($G["Timing"],$G["Event"]);return$F;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Xe){return
true;}function
use_sql($ob){return"USE ".idf_escape($ob);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($ec){return
ereg('^(scheme|trigger|view|drop_col)$',$ec);}$u="mssql";$T=array();$of=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$v=>$W){$T+=$W;$of[$v]=array_keys($W);}$bg=array();$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$tc=array("len","lower","round","upper");$yc=array("avg","count","count distinct","max","min","sum");$Db=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$yb=array("server"=>"MySQL")+$yb;if(!defined("DRIVER")){$te=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($J,$U,$B){mysqli_report(MYSQLI_REPORT_OFF);list($Cc,$pe)=explode(":",$J,2);$F=@$this->real_connect(($J!=""?$Cc:ini_get("mysqli.default_host")),($J.$U!=""?$U:ini_get("mysqli.default_user")),($J.$U.$B!=""?$B:ini_get("mysqli.default_pw")),null,(is_numeric($pe)?$pe:ini_get("mysqli.default_port")),(!is_numeric($pe)?$pe:null));if($F){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$F;}function
result($D,$l=0){$E=$this->query($D);if(!$E)return
false;$G=$E->fetch_array();return$G[$l];}function
quote($L){return"'".$this->escape_string($L)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($J,$U,$B){$this->_link=@mysql_connect(($J!=""?$J:ini_get("mysql.default_host")),("$J$U"!=""?$U:ini_get("mysql.default_user")),("$J$U$B"!=""?$B:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($L){return"'".mysql_real_escape_string($L,$this->_link)."'";}function
select_db($ob){return
mysql_select_db($ob,$this->_link);}function
query($D,$Vf=false){$E=@($Vf?mysql_unbuffered_query($D,$this->_link):mysql_query($D,$this->_link));if(!$E){$this->error=mysql_error($this->_link);return
false;}if($E===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($E);}function
multi_query($D){return$this->_result=$this->query($D);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($D,$l=0){$E=$this->query($D);if(!$E||!$E->num_rows)return
false;return
mysql_result($E->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($E){$this->_result=$E;$this->num_rows=mysql_num_rows($E);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$F=mysql_fetch_field($this->_result,$this->_offset++);$F->orgtable=$F->table;$F->orgname=$F->name;$F->charsetnr=($F->blob?63:0);return$F;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($J,$U,$B){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$J)),$U,$B);$this->query("SET NAMES utf8");return
true;}function
select_db($ob){return$this->query("USE ".idf_escape($ob));}function
query($D,$Vf=false){$this->setAttribute(1000,!$Vf);return
parent::query($D,$Vf);}}}function
idf_escape($r){return"`".str_replace("`","``",$r)."`";}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$kb=$b->credentials();if($g->connect($kb[0],$kb[1],$kb[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$F=$g->error;if(function_exists('iconv')&&!is_utf8($F)&&strlen($Ve=iconv("windows-1250","utf-8",$F))>strlen($F))$F=$Ve;return$F;}function
get_databases($jc=true){global$g;$F=&get_session("dbs");if($F===null){if($jc){restart_session();ob_flush();flush();}$F=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$F;}function
limit($D,$Z,$x,$A=0,$cf=" "){return" $D$Z".($x!==null?$cf."LIMIT $x".($A?" OFFSET $A":""):"");}function
limit1($D,$Z){return
limit($D,$Z,1);}function
db_collation($j,$Ua){global$g;$F=null;$hb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$hb,$z))$F=$z[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$hb,$z))$F=$Ua[$z[1]][-1];return$F;}function
engines(){$F=array();foreach(get_rows("SHOW ENGINES")as$G){if(ereg("YES|DEFAULT",$G["Support"]))$F[]=$G["Engine"];}return$F;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($i){$F=array();foreach($i
as$j)$F[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$F;}function
table_status($_=""){$F=array();foreach(get_rows("SHOW TABLE STATUS".($_!=""?" LIKE ".q(addcslashes($_,"%_")):""))as$G){if($G["Engine"]=="InnoDB")$G["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$G["Comment"]);if(!isset($G["Rows"]))$G["Comment"]="";if($_!="")return$G;$F[$G["Name"]]=$G;}return$F;}function
is_view($O){return!isset($O["Rows"]);}function
fk_support($O){return
eregi("InnoDB|IBMDB2I",$O["Engine"]);}function
fields($N){$F=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($N))as$G){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$G["Type"],$z);$F[$G["Field"]]=array("field"=>$G["Field"],"full_type"=>$G["Type"],"type"=>$z[1],"length"=>$z[2],"unsigned"=>ltrim($z[3].$z[4]),"default"=>($G["Default"]!=""||ereg("char",$z[1])?$G["Default"]:null),"null"=>($G["Null"]=="YES"),"auto_increment"=>($G["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$G["Extra"],$z)?$z[1]:""),"collation"=>$G["Collation"],"privileges"=>array_flip(explode(",",$G["Privileges"])),"comment"=>$G["Comment"],"primary"=>($G["Key"]=="PRI"),);}return$F;}function
indexes($N,$h=null){$F=array();foreach(get_rows("SHOW INDEX FROM ".table($N),$h)as$G){$F[$G["Key_name"]]["type"]=($G["Key_name"]=="PRIMARY"?"PRIMARY":($G["Index_type"]=="FULLTEXT"?"FULLTEXT":($G["Non_unique"]?"INDEX":"UNIQUE")));$F[$G["Key_name"]]["columns"][]=$G["Column_name"];$F[$G["Key_name"]]["lengths"][]=$G["Sub_part"];}return$F;}function
foreign_keys($N){global$g,$Ld;static$ne='`(?:[^`]|``)+`';$F=array();$ib=$g->result("SHOW CREATE TABLE ".table($N),1);if($ib){preg_match_all("~CONSTRAINT ($ne) FOREIGN KEY \\(((?:$ne,? ?)+)\\) REFERENCES ($ne)(?:\\.($ne))? \\(((?:$ne,? ?)+)\\)(?: ON DELETE ($Ld))?(?: ON UPDATE ($Ld))?~",$ib,$kd,PREG_SET_ORDER);foreach($kd
as$z){preg_match_all("~$ne~",$z[2],$hf);preg_match_all("~$ne~",$z[5],$Cf);$F[idf_unescape($z[1])]=array("db"=>idf_unescape($z[4]!=""?$z[3]:$z[4]),"table"=>idf_unescape($z[4]!=""?$z[4]:$z[3]),"source"=>array_map('idf_unescape',$hf[0]),"target"=>array_map('idf_unescape',$Cf[0]),"on_delete"=>($z[6]?$z[6]:"RESTRICT"),"on_update"=>($z[7]?$z[7]:"RESTRICT"),);}}return$F;}function
view($_){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($_),1)));}function
collations(){$F=array();foreach(get_rows("SHOW COLLATION")as$G){if($G["Default"])$F[$G["Charset"]][-1]=$G["Collation"];else$F[$G["Charset"]][]=$G["Collation"];}ksort($F);foreach($F
as$v=>$W)asort($F[$v]);return$F;}function
information_schema($j){global$g;return($g->server_info>=5&&$j=="information_schema");}function
adminer_error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$Le))return$Le[1]-1;}function
exact_value($W){return
q($W)." COLLATE utf8_bin";}function
create_database($j,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($j).($d?" COLLATE ".q($d):""));}function
drop_databases($i){set_session("dbs",null);return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($_,$d){if(create_database($_,$d)){$Me=array();foreach(tables_list()as$N=>$S)$Me[]=table($N)." TO ".idf_escape($_).".".table($N);if(!$Me||queries("RENAME TABLE ".implode(", ",$Me))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ba=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$Ba="";break;}if($s["type"]=="PRIMARY")$Ba=" UNIQUE";}}return" AUTO_INCREMENT$Ba";}function
alter_table($N,$_,$m,$kc,$Ya,$Kb,$d,$Aa,$ke){$c=array();foreach($m
as$l)$c[]=($l[1]?($N!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($N!=""?" $l[2]":""):"DROP ".idf_escape($l[0]));$c=array_merge($c,$kc);$lf="COMMENT=".q($Ya).($Kb?" ENGINE=".q($Kb):"").($d?" COLLATE ".q($d):"").($Aa!=""?" AUTO_INCREMENT=$Aa":"").$ke;if($N=="")return
queries("CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n) $lf");if($N!=$_)$c[]="RENAME TO ".table($_);$c[]=$lf;return
queries("ALTER TABLE ".table($N)."\n".implode(",\n",$c));}function
alter_indexes($N,$c){foreach($c
as$v=>$W)$c[$v]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($N).implode(",",$c));}function
truncate_tables($P){return
apply_queries("TRUNCATE TABLE",$P);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($P){return
queries("DROP TABLE ".implode(", ",array_map('table',$P)));}function
move_tables($P,$Y,$Cf){$Me=array();foreach(array_merge($P,$Y)as$N)$Me[]=table($N)." TO ".idf_escape($Cf).".".table($N);return
queries("RENAME TABLE ".implode(", ",$Me));}function
copy_tables($P,$Y,$Cf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($P
as$N){$_=($Cf==DB?table("copy_$N"):idf_escape($Cf).".".table($N));if(!queries("DROP TABLE IF EXISTS $_")||!queries("CREATE TABLE $_ LIKE ".table($N))||!queries("INSERT INTO $_ SELECT * FROM ".table($N)))return
false;}foreach($Y
as$N){$_=($Cf==DB?table("copy_$N"):idf_escape($Cf).".".table($N));$jg=view($N);if(!queries("DROP VIEW IF EXISTS $_")||!queries("CREATE VIEW $_ AS $jg[select]"))return
false;}return
true;}function
trigger($_){if($_=="")return
array();$H=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($_));return
reset($H);}function
triggers($N){$F=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($N,"%_")))as$G)$F[$G["Trigger"]]=array($G["Timing"],$G["Event"]);return$F;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($_,$S){global$g,$Mb,$Lc,$T;$va=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Uf="((".implode("|",array_merge(array_keys($T),$va)).")(?:\\s*\\(((?:[^'\")]*|$Mb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ne="\\s*(".($S=="FUNCTION"?"":$Lc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Uf";$hb=$g->result("SHOW CREATE $S ".idf_escape($_),2);preg_match("~\\(((?:$ne\\s*,?)*)\\)\\s*".($S=="FUNCTION"?"RETURNS\\s+$Uf\\s+":"")."(.*)~is",$hb,$z);$m=array();preg_match_all("~$ne\\s*,?~is",$z[1],$kd,PREG_SET_ORDER);foreach($kd
as$fe){$_=str_replace("``","`",$fe[2]).$fe[3];$m[]=array("field"=>$_,"type"=>strtolower($fe[5]),"length"=>preg_replace_callback("~$Mb~s",'normalize_enum',$fe[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fe[8] $fe[7]"))),"full_type"=>$fe[4],"inout"=>strtoupper($fe[1]),"collation"=>strtolower($fe[9]),);}if($S!="FUNCTION")return
array("fields"=>$m,"definition"=>$z[11]);return
array("fields"=>$m,"returns"=>array("type"=>$z[12],"length"=>$z[13],"unsigned"=>$z[15],"collation"=>$z[16]),"definition"=>$z[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($N,$K){return
queries("INSERT INTO ".table($N)." (".implode(", ",array_keys($K)).")\nVALUES (".implode(", ",$K).")");}function
insert_update($N,$K,$we){foreach($K
as$v=>$W)$K[$v]="$v = $W";$cg=implode(", ",$K);return
queries("INSERT INTO ".table($N)." SET $cg ON DUPLICATE KEY UPDATE $cg");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$D){return$g->query("EXPLAIN $D");}function
found_rows($O,$Z){return($Z||$O["Engine"]!="InnoDB"?null:$O["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Xe){return
true;}function
create_sql($N,$Aa){global$g;$F=$g->result("SHOW CREATE TABLE ".table($N),1);if(!$Aa)$F=preg_replace('~ AUTO_INCREMENT=\\d+~','',$F);return$F;}function
truncate_sql($N){return"TRUNCATE ".table($N);}function
use_sql($ob){return"USE ".idf_escape($ob);}function
trigger_sql($N,$M){$F="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($N,"%_")),null,"-- ")as$G)$F.="\n".($M=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($G["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($G["Trigger"])." $G[Timing] $G[Event] ON ".table($G["Table"])." FOR EACH ROW\n$G[Statement];;\n";return$F;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($ec){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$ec);}$u="sql";$T=array();$of=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$v=>$W){$T+=$W;$of[$v]=array_keys($W);}$bg=array("unsigned","zerofill","unsigned zerofill");$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$tc=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$yc=array("avg","count","count distinct","group_concat","max","min","sum");$Db=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.4.0-dev";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
databases($jc=true){return
get_databases($jc);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$yb;echo'<table cellspacing="0">
<tr><th>',lang(19),'<td>',html_select("auth[driver]",$yb,DRIVER,"loginDriver(this);"),'<tr><th>',lang(20),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>',lang(21),'<td><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(22),'<td><input type="password" name="auth[password]">
<tr><th>',lang(23),'<td><input name="auth[db]" value="',h($_GET["db"]);?>">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(24)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(25))."\n";}function
login($hd,$B){return
true;}function
tableName($vf){return
h($vf["Name"]);}function
fieldName($l,$Td=0){return'<span title="'.h($l["full_type"]).'">'.h($l["field"]).'</span>';}function
selectLinks($vf,$K=""){echo'<p class="tabs">';$fd=array("select"=>lang(26),"table"=>lang(27));if(is_view($vf))$fd["view"]=lang(28);else$fd["create"]=lang(29);if($K!==null)$fd["edit"]=lang(30);foreach($fd
as$v=>$W)echo" <a href='".h(ME)."$v=".urlencode($vf["Name"]).($v=="edit"?$K:"")."'".bold(isset($_GET[$v])).">$W</a>";echo"\n";}function
foreignKeys($N){return
foreign_keys($N);}function
backwardKeys($N,$uf){return
array();}function
backwardKeysPrint($Da,$G){}function
selectQuery($D){global$u;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(31)."'>&gt;&gt;</a> <code class='jush-$u'>".h(str_replace("\n"," ",$D))."</code> <a href='".h(ME)."sql=".urlencode($D)."'>".lang(32)."</a></p>\n";}function
rowDescription($N){return"";}function
rowDescriptions($H,$lc){return$H;}function
selectVal($W,$y,$l){$F=($W===null?"<i>NULL</i>":(ereg("char|binary",$l["type"])&&!ereg("var",$l["type"])?"<code>$W</code>":$W));if(ereg('blob|bytea|raw|file',$l["type"])&&!is_utf8($W))$F=lang(33,strlen($W));return($y?"<a href='$y'>$F</a>":$F);}function
editVal($W,$l){return(ereg("binary",$l["type"])?reset(unpack("H*",$W)):$W);}function
selectColumnsPrint($I,$f){global$tc,$yc;print_fieldset("select",lang(34),$I);$p=0;$sc=array(lang(35)=>$tc,lang(36)=>$yc);foreach($I
as$v=>$W){$W=$_GET["columns"][$v];echo"<div>".html_select("columns[$p][fun]",array(-1=>"")+$sc,$W["fun"]),"(<select name='columns[$p][col]'><option>".optionlist($f,$W["col"],true)."</select>)</div>\n";$p++;}echo"<div>".html_select("columns[$p][fun]",array(-1=>"")+$sc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$p][col]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$t){print_fieldset("search",lang(37),$Z);foreach($t
as$p=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input name='fulltext[$p]' value='".h($_GET["fulltext"][$p])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$p]",1,isset($_GET["boolean"][$p]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$La="this.nextSibling.onchange();";for($p=0;$p<=count($_GET["where"]);$p++){list(,$W)=each($_GET["where"]);if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators))){echo"<div><select name='where[$p][col]' onchange='$La'><option value=''>(".lang(38).")".optionlist($f,$W["col"],true)."</select>",html_select("where[$p][op]",$this->operators,$W["op"],$La),"<input name='where[$p][val]' value='".h($W["val"])."' onchange='".($W?"selectFieldChange(this.form)":"selectAddRow(this)").";'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Td,$f,$t){print_fieldset("sort",lang(39),$Td);$p=0;foreach((array)$_GET["order"]as$v=>$W){if(isset($f[$W])){echo"<div><select name='order[$p]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W,true)."</select>",checkbox("desc[$p]",1,isset($_GET["desc"][$v]),lang(40))."</div>\n";$p++;}}echo"<div><select name='order[$p]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>","<label><input type='checkbox' name='desc[$p]' value='1'>".lang(40)."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($x){echo"<fieldset><legend>".lang(41)."</legend><div>";echo"<input name='limit' size='3' value='".h($x)."'>","</div></fieldset>\n";}function
selectLengthPrint($Ff){if($Ff!==null){echo"<fieldset><legend>".lang(42)."</legend><div>",'<input name="text_length" size="3" value="'.h($Ff).'">',"</div></fieldset>\n";}}function
selectActionPrint($t){echo"<fieldset><legend>".lang(43)."</legend><div>","<input type='submit' value='".lang(34)."'>"," <span id='noindex' title='".lang(44)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($t
as$s){if($s["type"]!="FULLTEXT")$f[reset($s["columns"])]=1;}$f[""]=1;foreach($f
as$v=>$W)json_row($v);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Gb,$f){}function
selectColumnsProcess($f,$t){global$tc,$yc;$I=array();$wc=array();foreach((array)$_GET["columns"]as$v=>$W){if($W["fun"]=="count"||(isset($f[$W["col"]])&&(!$W["fun"]||in_array($W["fun"],$tc)||in_array($W["fun"],$yc)))){$I[$v]=apply_sql_function($W["fun"],(isset($f[$W["col"]])?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],$yc))$wc[]=$I[$v];}}return
array($I,$wc);}function
selectSearchProcess($m,$t){global$u;$F=array();foreach($t
as$p=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$p]!="")$F[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$p]).(isset($_GET["boolean"][$p])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$W){if("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators)){$bb=" $W[op]";if(ereg('IN$',$W["op"])){$Gc=process_length($W["val"]);$bb.=" (".($Gc!=""?$Gc:"NULL").")";}elseif(!$W["op"])$bb.=$W["val"];elseif($W["op"]=="LIKE %%")$bb=" LIKE ".$this->processInput($m[$W["col"]],"%$W[val]%");elseif(!ereg('NULL$',$W["op"]))$bb.=" ".$this->processInput($m[$W["col"]],$W["val"]);if($W["col"]!="")$F[]=idf_escape($W["col"]).$bb;else{$Va=array();foreach($m
as$_=>$l){if(is_numeric($W["val"])||!ereg('int|float|double|decimal',$l["type"])){$_=idf_escape($_);$Va[]=($u=="sql"&&ereg('char|text|enum|set',$l["type"])&&!ereg('^utf8',$l["collation"])?"CONVERT($_ USING utf8)":$_);}}$F[]=($Va?"(".implode("$bb OR ",$Va)."$bb)":"0");}}}return$F;}function
selectOrderProcess($m,$t){$F=array();foreach((array)$_GET["order"]as$v=>$W){if(isset($m[$W])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$W))$F[]=(isset($m[$W])?idf_escape($W):$W).(isset($_GET["desc"][$v])?" DESC":"");}return$F;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$lc){return
false;}function
messageQuery($D){global$u;static$gb=0;restart_session();$q="sql-".($gb++);$Ac=&get_session("queries");if(strlen($D)>1e6)$D=ereg_replace('[\x80-\xFF]+$','',substr($D,0,1e6))."\n...";$Ac[$_GET["db"]][]=array($D,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$q' onclick=\"return !toggle('$q');\">".lang(45)."</a><div id='$q' class='hidden'><pre><code class='jush-$u'>".shorten_utf8($D,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ac[$_GET["db"]])-1)).'">'.lang(32).'</a></div>';}function
editFunctions($l){global$Db;$F=($l["null"]?"NULL/":"");foreach($Db
as$v=>$tc){if(!$v||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($tc
as$ne=>$W){if(!$ne||ereg($ne,$l["type"]))$F.="/$W";}if($v&&!ereg('set|blob|bytea|raw|file',$l["type"]))$F.="/=";}}return
explode("/",$F);}function
editInput($N,$l,$za,$X){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$za value='-1' checked><i>".lang(5)."</i></label> ":"").($l["null"]?"<label><input type='radio'$za value=''".($X!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$za,$l,$X,0);return"";}function
processInput($l,$X,$o=""){if($o=="=")return$X;$_=$l["field"];$F=($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$X)?$X:q($X));if(ereg('^(now|getdate|uuid)$',$o))$F="$o()";elseif(ereg('^current_(date|timestamp)$',$o))$F=$o;elseif(ereg('^([+-]|\\|\\|)$',$o))$F=idf_escape($_)." $o $F";elseif(ereg('^[+-] interval$',$o))$F=idf_escape($_)." $o ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$X)?$X:$F);elseif(ereg('^(addtime|subtime|concat)$',$o))$F="$o(".idf_escape($_).", $F)";elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$o))$F="$o($F)";if(ereg("binary",$l["type"]))$F="unhex($F)";return$F;}function
dumpOutput(){$F=array('text'=>lang(46),'file'=>lang(47));if(function_exists('gzencode'))$F['gz']='gzip';if(function_exists('bzcompress'))$F['bz2']='bzip2';return$F;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($N,$M,$Qc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($M)dump_csv(array_keys(fields($N)));}elseif($M){$hb=create_sql($N,$_POST["auto_increment"]);if($hb){if($M=="DROP+CREATE")echo"DROP ".($Qc?"VIEW":"TABLE")." IF EXISTS ".table($N).";\n";if($Qc)$hb=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$hb);echo($M!="CREATE+ALTER"?$hb:($Qc?substr_replace($hb," OR REPLACE",6,0):substr_replace($hb," IF NOT EXISTS",12,0))).";\n\n";}if($M=="CREATE+ALTER"&&!$Qc){$D="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($N)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$m=array();$ua="";foreach(get_rows($D)as$G){$rb=$G["COLUMN_DEFAULT"];$G["default"]=($rb!==null?q($rb):"NULL");$G["after"]=q($ua);$G["alter"]=escape_string(idf_escape($G["COLUMN_NAME"])." $G[COLUMN_TYPE]".($G["COLLATION_NAME"]?" COLLATE $G[COLLATION_NAME]":"").($rb!==null?" DEFAULT ".($rb=="CURRENT_TIMESTAMP"?$rb:$G["default"]):"").($G["IS_NULLABLE"]=="YES"?"":" NOT NULL").($G["EXTRA"]?" $G[EXTRA]":"").($G["COLUMN_COMMENT"]?" COMMENT ".q($G["COLUMN_COMMENT"]):"").($ua?" AFTER ".idf_escape($ua):" FIRST"));echo", ADD $G[alter]";$m[]=$G;$ua=$G["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $D;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($m
as$G)echo"
				WHEN ".q($G["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $G[alter]', IF(
						_column_default <=> $G[default] AND _is_nullable = '$G[IS_NULLABLE]' AND _collation_name <=> ".(isset($G["COLLATION_NAME"])?"'$G[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($G["COLUMN_TYPE"])." AND _extra = '$G[EXTRA]' AND _column_comment = ".q($G["COLUMN_COMMENT"])." AND after = $G[after]
					, '', ', MODIFY $G[alter]'));";echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($N)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($N,$M,$D){global$g,$u;$md=($u=="sqlite"?0:1048576);if($M){if($_POST["format"]=="sql"&&$M=="TRUNCATE+INSERT")echo
truncate_sql($N).";\n";if($_POST["format"]=="sql")$m=fields($N);$E=$g->query($D,1);if($E){$Nc="";$Ja="";while($G=$E->fetch_assoc()){if($_POST["format"]!="sql"){if($M=="table"){dump_csv(array_keys($G));$M="INSERT";}dump_csv($G);}else{if(!$Nc)$Nc="INSERT INTO ".table($N)." (".implode(", ",array_map('idf_escape',array_keys($G))).") VALUES";foreach($G
as$v=>$W)$G[$v]=($W!==null?(ereg('int|float|double|decimal|bit',$m[$v]["type"])?$W:q($W)):"NULL");$Ve=implode(",\t",$G);if($M=="INSERT+UPDATE"){$K=array();foreach($G
as$v=>$W)$K[]=idf_escape($v)." = $W";echo"$Nc ($Ve) ON DUPLICATE KEY UPDATE ".implode(", ",$K).";\n";}else{$Ve=($md?"\n":" ")."($Ve)";if(!$Ja)$Ja=$Nc.$Ve;elseif(strlen($Ja)+4+strlen($Ve)<$md)$Ja.=",$Ve";else{echo"$Ja;\n";$Ja=$Nc.$Ve;}}}}if($_POST["format"]=="sql"&&$M!="INSERT+UPDATE"&&$Ja){$Ja.=";\n";echo$Ja;}}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpHeaders($Ec,$zd=false){$ce=$_POST["output"];$ac=($_POST["format"]=="sql"?"sql":($zd?"tar":"csv"));header("Content-Type: ".($ce=="bz2"?"application/x-bzip":($ce=="gz"?"application/x-gzip":($ac=="tar"?"application/x-tar":($ac=="sql"||$ce!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($ce=="bz2")ob_start('bzcompress',1e6);if($ce=="gz")ob_start('gzencode',1e6);return$ac;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(48)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(49):lang(50))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(51)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(52)."</a>\n":"");return
true;}function
navigation($yd){global$ia,$g,$Q,$u,$yb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($yd=="auth"){$ic=true;foreach((array)$_SESSION["pwds"]as$xb=>$ff){foreach($ff
as$J=>$fg){foreach($fg
as$U=>$B){if($B!==null){if($ic){echo"<p>\n";$ic=false;}echo"<a href='".h(auth_url($xb,$J,$U))."'>($yb[$xb]) ".h($U.($J!=""?"@$J":""))."</a><br>\n";}}}}}else{$i=$this->databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$yd){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".lang(45)."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(53)."</a>\n";}echo'<input type="submit" name="logout" value="',lang(54),'">
<input type="hidden" name="token" value="',$Q,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($i?html_select("db",array(""=>"(".lang(55).")")+$i,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="',lang(8),'"',($i?" class='hidden'":""),'>
';if($yd!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".lang(56).")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!="")set_schema($_GET["ns"]);}if($_GET["ns"]!==""&&!$yd){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(57)."</a>\n";$P=tables_list();if(!$P)echo"<p class='message'>".lang(6)."\n";else{$this->tablesPrint($P);$fd=array();foreach($P
as$N=>$S)$fd[]=preg_quote($N,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $u: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$fd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.$u;\n";echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($P){echo"<p id='tables'>\n";foreach($P
as$N=>$S){echo'<a href="'.h(ME).'select='.urlencode($N).'"'.bold($_GET["select"]==$N).">".lang(58)."</a> ",'<a href="'.h(ME).'table='.urlencode($N).'"'.bold($_GET["table"]==$N)." title='".lang(27)."'>".$this->tableName(array("Name"=>$N))."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Pd;function
page_header($If,$k="",$Ia=array(),$Jf="",$_c=""){global$ca,$b,$g,$yb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Kf=$If.($Jf!=""?": ".h($Jf):"");$Lf=strip_tags($Kf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$ca,'" dir="',lang(59),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Lf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.4.0-dev",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.4.0-dev",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.4.0-dev",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo$_c,'
<body class="',lang(59),' nojs" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ia!==null){$y=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$yb[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$J=(SERVER!=""?h(SERVER):lang(20));if($Ia===false)echo"$J\n";else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$J</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ia)))echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ia)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ia
as$v=>$W){$tb=(is_array($W)?$W[1]:$W);if($tb!="")echo'<a href="'.h(ME."$v=").urlencode(is_array($W)?$W[0]:$W).'">'.h($tb).'</a> &raquo; ';}}echo"$If\n";}}echo"<h2>$Kf</h2>\n";restart_session();$dg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$vd=$_SESSION["messages"][$dg];if($vd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$vd)."</div>\n";unset($_SESSION["messages"][$dg]);}$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($yd=""){global$b;echo'</div>

';switch_lang();echo'<div id="menu">
';$b->navigation($yd);echo'</div>
';}function
int32($Ad){while($Ad>=2147483648)$Ad-=4294967296;while($Ad<=-2147483649)$Ad+=4294967296;return(int)$Ad;}function
long2str($V,$lg){$Ve='';foreach($V
as$W)$Ve.=pack('V',$W);if($lg)return
substr($Ve,0,end($V));return$Ve;}function
str2long($Ve,$lg){$V=array_values(unpack('V*',str_pad($Ve,4*ceil(strlen($Ve)/4),"\0")));if($lg)$V[]=strlen($Ve);return$V;}function
xxtea_mx($pg,$og,$sf,$Tc){return
int32((($pg>>5&0x7FFFFFF)^$og<<2)+(($og>>3&0x1FFFFFFF)^$pg<<4))^int32(($sf^$og)+($Tc^$pg));}function
encrypt_string($nf,$v){if($nf=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$V=str2long($nf,true);$Ad=count($V)-1;$pg=$V[$Ad];$og=$V[0];$C=floor(6+52/($Ad+1));$sf=0;while($C-->0){$sf=int32($sf+0x9E3779B9);$Cb=$sf>>2&3;for($de=0;$de<$Ad;$de++){$og=$V[$de+1];$_d=xxtea_mx($pg,$og,$sf,$v[$de&3^$Cb]);$pg=int32($V[$de]+$_d);$V[$de]=$pg;}$og=$V[0];$_d=xxtea_mx($pg,$og,$sf,$v[$de&3^$Cb]);$pg=int32($V[$Ad]+$_d);$V[$Ad]=$pg;}return
long2str($V,false);}function
decrypt_string($nf,$v){if($nf=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$V=str2long($nf,false);$Ad=count($V)-1;$pg=$V[$Ad];$og=$V[0];$C=floor(6+52/($Ad+1));$sf=int32($C*0x9E3779B9);while($sf){$Cb=$sf>>2&3;for($de=$Ad;$de>0;$de--){$pg=$V[$de-1];$_d=xxtea_mx($pg,$og,$sf,$v[$de&3^$Cb]);$og=int32($V[$de]-$_d);$V[$de]=$og;}$pg=$V[$Ad];$_d=xxtea_mx($pg,$og,$sf,$v[$de&3^$Cb]);$og=int32($V[0]-$_d);$V[0]=$og;$sf=int32($sf-0x9E3779B9);}return
long2str($V,true);}$g='';$Q=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$oe=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($v)=explode(":",$W);$oe[$v]=$W;}}$_a=$_POST["auth"];if($_a){session_regenerate_id();$_SESSION["pwds"][$_a["driver"]][$_a["server"]][$_a["username"]]=$_a["password"];if($_a["permanent"]){$v=base64_encode($_a["driver"])."-".base64_encode($_a["server"])."-".base64_encode($_a["username"]);$ye=$b->permanentLogin();$oe[$v]="$v:".base64_encode($ye?encrypt_string($_a["password"],$ye):"");cookie("adminer_permanent",implode(" ",$oe));}if(count($_POST)==1||DRIVER!=$_a["driver"]||SERVER!=$_a["server"]||$_GET["username"]!==$_a["username"]||DB!=$_a["db"])adminer_redirect(auth_url($_a["driver"],$_a["server"],$_a["username"],$_a["db"]));}elseif($_POST["logout"]){if($Q&&$_POST["token"]!=$Q){page_header(lang(54),lang(60));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$v)set_session($v,null);$v=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($oe[$v]){unset($oe[$v]);cookie("adminer_permanent",implode(" ",$oe));}adminer_redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(61));}}elseif($oe&&!$_SESSION["pwds"]){session_regenerate_id();$ye=$b->permanentLogin();foreach($oe
as$v=>$W){list(,$Pa)=explode(":",$W);list($xb,$J,$U)=array_map('base64_decode',explode("-",$v));$_SESSION["pwds"][$xb][$J][$U]=decrypt_string(base64_decode($Pa),$ye);}}function
auth_error($Ub=null){global$g,$b,$Q;$gf=session_name();$k="";if(!$_COOKIE[$gf]&&$_GET[$gf]&&ini_bool("session.use_only_cookies"))$k=lang(62);elseif(isset($_GET["username"])){if(($_COOKIE[$gf]||$_GET[$gf])&&!$Q)$k=lang(63);else{$B=&get_session("pwds");if($B!==null){$k=h($Ub?$Ub->getMessage():(is_string($g)?$g:lang(64)));$B=null;}}}page_header(lang(24),$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(65),lang(66,implode(", ",$te)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Q=$_SESSION["token"];if($_a&&$_POST["token"])$_POST["token"]=$Q;$k=($_POST?($_POST["token"]==$Q?"":lang(60)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(67,'"post_max_size"')));function
connect_error(){global$b,$g,$Q,$k,$yb;$i=array();if(DB!="")page_header(lang(23).": ".h(DB),lang(68),true);else{if($_POST["db"]&&!$k)queries_redirect(substr(ME,0,-1),lang(69),drop_databases($_POST["db"]));page_header(lang(70),$k,false);echo"<p><a href='".h(ME)."database='>".lang(71)."</a>\n";foreach(array('privileges'=>lang(52),'processlist'=>lang(72),'variables'=>lang(73),'status'=>lang(74),)as$v=>$W){if(support($v))echo"<a href='".h(ME)."$v='>$W</a>\n";}echo"<p>".lang(75,$yb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".lang(76,"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"])set_session("dbs",null);$i=$b->databases();if($i){$Ye=support("scheme");$Ua=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".lang(23)."<td>".lang(77)."<td>".lang(78)."</thead>\n";foreach($i
as$j){$Qe=h(ME)."db=".urlencode($j);echo"<tr".odd()."><td>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"])),"<th><a href='$Qe'>".h($j)."</a>","<td><a href='$Qe".($Ye?"&amp;ns=":"")."&amp;database=' title='".lang(48)."'>".nbsp(db_collation($j,$Ua))."</a>","<td align='right'><a href='$Qe&amp;schema=' id='tables-".h($j)."' title='".lang(51)."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".lang(79)."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$Q'>\n","<a href='".h(ME)."refresh=1'>".lang(80)."</a>\n","</form>\n";}}page_footer("db");if($i)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!="")set_session("dbs",null);connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))adminer_redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){page_header(lang(81).": ".h($_GET["ns"]),lang(82),true);page_footer("ns");exit;}}function
select($E,$h=null,$Dc="",$Wd=array()){$fd=array();$t=array();$f=array();$Ga=array();$T=array();$F=array();odd('');for($p=0;$G=$E->fetch_row();$p++){if(!$p){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Rc=0;$Rc<count($G);$Rc++){$l=$E->fetch_field();$_=$l->name;$Vd=$l->orgtable;$Ud=$l->orgname;$F[$l->table]=$Vd;if($Dc)$fd[$Rc]=($_=="table"?"table=":($_=="possible_keys"?"indexes=":null));elseif($Vd!=""){if(!isset($t[$Vd])){$t[$Vd]=array();foreach(indexes($Vd,$h)as$s){if($s["type"]=="PRIMARY"){$t[$Vd]=array_flip($s["columns"]);break;}}$f[$Vd]=$t[$Vd];}if(isset($f[$Vd][$Ud])){unset($f[$Vd][$Ud]);$t[$Vd][$Ud]=$Rc;$fd[$Rc]=$Vd;}}if($l->charsetnr==63)$Ga[$Rc]=true;$T[$Rc]=$l->type;$_=h($_);echo"<th".($Vd!=""||$l->name!=$Ud?" title='".h(($Vd!=""?"$Vd.":"").$Ud)."'":"").">".($Dc?"<a href='$Dc".strtolower($_)."' target='_blank' rel='noreferrer'>$_</a>":$_);}echo"</thead>\n";}echo"<tr".odd().">";foreach($G
as$v=>$W){if($W===null)$W="<i>NULL</i>";elseif($Ga[$v]&&!is_utf8($W))$W="<i>".lang(33,strlen($W))."</i>";elseif(!strlen($W))$W="&nbsp;";else{$W=h($W);if($T[$v]==254)$W="<code>$W</code>";}if(isset($fd[$v])&&!$f[$fd[$v]]){if($Dc){$N=$G[array_search("table=",$fd)];$y=$fd[$v].urlencode($Wd[$N]!=""?$Wd[$N]:$N);}else{$y="edit=".urlencode($fd[$v]);foreach($t[$fd[$v]]as$Sa=>$Rc)$y.="&where".urlencode("[".bracket_escape($Sa)."]")."=".urlencode($G[$Rc]);}$W="<a href='".h(ME.$y)."'>$W</a>";}echo"<td>$W";}}echo($p?"</table>":"<p class='message'>".lang(83))."\n";return$F;}function
referencable_primary($bf){$F=array();foreach(table_status()as$wf=>$N){if($wf!=$bf&&fk_support($N)){foreach(fields($wf)as$l){if($l["primary"]){if($F[$wf]){unset($F[$wf]);break;}$F[$wf]=$l;}}}}return$F;}function
textarea($_,$X,$H=10,$Va=80,$q=""){echo"<textarea name='$_'".($q?" id='$q'":"")." rows='$H' cols='$Va' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
adminer_format_time($kf,$Jb){return" <span class='time'>(".lang(84,max(0,array_sum(explode(" ",$Jb))-array_sum(explode(" ",$kf)))).")</span>";}function
edit_type($v,$l,$Ua,$mc=array()){global$of,$T,$bg,$Ld;echo'<td><select name="',$v,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$l["type"]||isset($T[$l["type"]])?array():array($l["type"]))+$of+($mc?array(lang(85)=>$mc):array()),$l["type"]),'</select>
<td><input name="',$v,'[length]" value="',h($l["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$v"."[collation]'".(ereg('(char|text|enum|set)$',$l["type"])?"":" class='hidden'").'><option value="">('.lang(86).')'.optionlist($Ua,$l["collation"]).'</select>',($bg?"<select name='$v"."[unsigned]'".(!$l["type"]||ereg('(int|float|double|decimal)$',$l["type"])?"":" class='hidden'").'><option>'.optionlist($bg,$l["unsigned"]).'</select>':''),($mc?"<select name='$v"."[on_delete]'".(ereg("`",$l["type"])?"":" class='hidden'")."><option value=''>(".lang(87).")".optionlist(explode("|",$Ld),$l["on_delete"])."</select> ":" ");}function
process_length($w){global$Mb;return(preg_match("~^\\s*(?:$Mb)(?:\\s*,\\s*(?:$Mb))*\\s*\$~",$w)&&preg_match_all("~$Mb~",$w,$kd)?implode(",",$kd[0]):preg_replace('~[^0-9,+-]~','',$w));}function
process_type($l,$Ta="COLLATE"){global$bg;return" $l[type]".($l["length"]!=""?"(".process_length($l["length"]).")":"").(ereg('int|float|double|decimal',$l["type"])&&in_array($l["unsigned"],$bg)?" $l[unsigned]":"").(ereg('char|text|enum|set',$l["type"])&&$l["collation"]?" $Ta ".q($l["collation"]):"");}function
process_field($l,$Tf){return
array(idf_escape(trim($l["field"])),process_type($Tf),($l["null"]?" NULL":" NOT NULL"),(isset($l["default"])?" DEFAULT ".(($l["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$l["default"]))||($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$l["default"]))?$l["default"]:q($l["default"])):""),($l["on_update"]?" ON UPDATE $l[on_update]":""),(support("comment")&&$l["comment"]!=""?" COMMENT ".q($l["comment"]):""),($l["auto_increment"]?auto_increment():null),);}function
type_class($S){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$v=>$W){if(ereg("$v|$W",$S))return" class='$v'";}}function
edit_fields($m,$Ua,$S="TABLE",$wa=0,$mc=array(),$Za=false){global$Lc;echo'<thead><tr class="wrap">
';if($S=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($S=="TABLE"?lang(88):lang(89)),'<td>',lang(90),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(91),'<td>',lang(92);if($S=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(93),'">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>',lang(94),(support("comment")?"<td".($Za?"":" class='hidden'").">".lang(95):"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($m))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.4.0-dev' alt='+' title='".lang(96)."'>",'<script type="text/javascript">row_count = ',count($m),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($m
as$p=>$l){$p++;$Xd=$l[($_POST?"orig":"field")];$vb=(isset($_POST["add"][$p-1])||(isset($l["field"])&&!$_POST["drop_col"][$p]))&&(support("drop_col")||$Xd=="");echo'<tr',($vb?"":" style='display: none;'"),'>
',($S=="PROCEDURE"?"<td>".html_select("fields[$p][inout]",explode("|",$Lc),$l["inout"]):""),'<th>';if($vb){echo'<input name="fields[',$p,'][field]" value="',h($l["field"]),'" onchange="',($l["field"]!=""||count($m)>1?"":"editingAddRow(this, $wa); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$p,'][orig]" value="',h($Xd),'">
';edit_type("fields[$p]",$l,$Ua,$mc);if($S=="TABLE"){echo'<td>',checkbox("fields[$p][null]",1,$l["null"]),'<td><input type="radio" name="auto_increment_col" value="',$p,'"';if($l["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$p][has_default]",1,$l["has_default"]),'<input name="fields[',$p,'][default]" value="',h($l["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Za?"":" class='hidden'")."><input name='fields[$p][comment]' value='".h($l["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.4.0-dev' alt='+' title='".lang(96)."' onclick='return !editingAddRow(this, $wa, 1);'>&nbsp;"."<input type='image' name='up[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.4.0-dev' alt='^' title='".lang(97)."'>&nbsp;"."<input type='image' name='down[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.4.0-dev' alt='v' title='".lang(98)."'>&nbsp;":""),($Xd==""||support("drop_col")?"<input type='image' name='drop_col[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.4.0-dev' alt='x' title='".lang(99)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$m){ksort($m);$A=0;if($_POST["up"]){$Xc=0;foreach($m
as$v=>$l){if(key($_POST["up"])==$v){unset($m[$v]);array_splice($m,$Xc,0,array($l));break;}if(isset($l["field"]))$Xc=$A;$A++;}}if($_POST["down"]){$oc=false;foreach($m
as$v=>$l){if(isset($l["field"])&&$oc){unset($m[key($_POST["down"])]);array_splice($m,$A,0,array($oc));break;}if(key($_POST["down"])==$v)$oc=$l;$A++;}}$m=array_values($m);if($_POST["add"])array_splice($m,key($_POST["add"]),0,array(array()));}function
normalize_enum($z){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($z[0][0].$z[0][0],$z[0][0],substr($z[0],1,-1))),'\\'))."'";}function
grant($uc,$_e,$f,$Kd){if(!$_e)return
true;if($_e==array("ALL PRIVILEGES","GRANT OPTION"))return($uc=="GRANT"?queries("$uc ALL PRIVILEGES$Kd WITH GRANT OPTION"):queries("$uc ALL PRIVILEGES$Kd")&&queries("$uc GRANT OPTION$Kd"));return
queries("$uc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$_e).$f).$Kd);}function
drop_create($zb,$hb,$gd,$ud,$sd,$td,$_){if($_POST["drop"])return
query_redirect($zb,$gd,$ud,true,!$_POST["dropped"]);$_b=$_!=""&&($_POST["dropped"]||queries($zb));$jb=queries($hb);if(!queries_redirect($gd,($_!=""?$sd:$td),$jb)&&$_b)adminer_redirect(null,$ud);return$_b;}function
tar_file($gc,$db){$F=pack("a100a8a8a8a12a12",$gc,644,0,0,decoct(strlen($db)),decoct(time()));$Oa=8*32;for($p=0;$p<strlen($F);$p++)$Oa+=ord($F[$p]);$F.=sprintf("%06o",$Oa)."\0 ";return$F.str_repeat("\0",512-strlen($F)).$db.str_repeat("\0",511-(strlen($db)+511)%
512);}function
ini_bytes($Kc){$W=ini_get($Kc);switch(strtolower(substr($W,-1))){case'g':$W*=1024;case'm':$W*=1024;case'k':$W*=1024;}return$W;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$Ld="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Mb="'(?:''|[^'\\\\]|\\\\.)*+'";$Lc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$m=fields($a);if(!$m)$k=adminer_error();$O=($m?table_status($a):array());page_header(($m&&is_view($O)?lang(100):lang(101)).": ".h($a),$k);$b->selectLinks($O);$Ya=$O["Comment"];if($Ya!="")echo"<p>".lang(95).": ".h($Ya)."\n";if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(102)."<td>".lang(90).(support("comment")?"<td>".lang(95):"")."</thead>\n";foreach($m
as$l){echo"<tr".odd()."><th>".h($l["field"]),"<td title='".h($l["collation"])."'>".h($l["full_type"]).($l["null"]?" <i>NULL</i>":"").($l["auto_increment"]?" <i>".lang(93)."</i>":""),(isset($l["default"])?" [<b>".h($l["default"])."</b>]":""),(support("comment")?"<td>".nbsp($l["comment"]):""),"\n";}echo"</table>\n";if(!is_view($O)){echo"<h3>".lang(103)."</h3>\n";$t=indexes($a);if($t){echo"<table cellspacing='0'>\n";foreach($t
as$_=>$s){ksort($s["columns"]);$xe=array();foreach($s["columns"]as$v=>$W)$xe[]="<i>".h($W)."</i>".($s["lengths"][$v]?"(".$s["lengths"][$v].")":"");echo"<tr title='".h($_)."'><th>$s[type]<td>".implode(", ",$xe)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(104)."</a>\n";if(fk_support($O)){echo"<h3>".lang(85)."</h3>\n";$mc=foreign_keys($a);if($mc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(105)."<td>".lang(106)."<td>".lang(87)."<td>".lang(107).($u!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($mc
as$_=>$n){echo"<tr title='".h($_)."'>","<th><i>".implode("</i>, <i>",array_map('h',$n["source"]))."</i>","<td><a href='".h($n["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($n["db"]),ME):($n["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($n["ns"]),ME):ME))."table=".urlencode($n["table"])."'>".($n["db"]!=""?"<b>".h($n["db"])."</b>.":"").($n["ns"]!=""?"<b>".h($n["ns"])."</b>.":"").h($n["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$n["target"]))."</i>)","<td>".nbsp($n["on_delete"])."\n","<td>".nbsp($n["on_update"])."\n";if($u!="sqlite")echo'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($_)).'">'.lang(108).'</a>';}echo"</table>\n";}if($u!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(109)."</a>\n";}if(support("trigger")){echo"<h3>".lang(110)."</h3>\n";$Sf=triggers($a);if($Sf){echo"<table cellspacing='0'>\n";foreach($Sf
as$v=>$W)echo"<tr valign='top'><td>$W[0]<td>$W[1]<th>".h($v)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($v))."'>".lang(108)."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(111)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(51),"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$yf=array();$zf=array();$_="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$_-".DB]?"$_-".DB:$_)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$kd,PREG_SET_ORDER);foreach($kd
as$p=>$z){$yf[$z[1]]=array($z[2],$z[3]);$zf[]="\n\t'".js_escape($z[1])."': [ $z[2], $z[3] ]";}$Mf=0;$Fa=-1;$Xe=array();$Je=array();$bd=array();foreach(table_status()as$O){if(!isset($O["Engine"]))continue;$qe=0;$Xe[$O["Name"]]["fields"]=array();foreach(fields($O["Name"])as$_=>$l){$qe+=1.25;$l["pos"]=$qe;$Xe[$O["Name"]]["fields"][$_]=$l;}$Xe[$O["Name"]]["pos"]=($yf[$O["Name"]]?$yf[$O["Name"]]:array($Mf,0));foreach($b->foreignKeys($O["Name"])as$W){if(!$W["db"]){$Zc=$Fa;if($yf[$O["Name"]][1]||$yf[$W["table"]][1])$Zc=min(floatval($yf[$O["Name"]][1]),floatval($yf[$W["table"]][1]))-1;else$Fa-=.1;while($bd[(string)$Zc])$Zc-=.0001;$Xe[$O["Name"]]["references"][$W["table"]][(string)$Zc]=array($W["source"],$W["target"]);$Je[$W["table"]][$O["Name"]][(string)$Zc]=$W["target"];$bd[(string)$Zc]=true;}}$Mf=max($Mf,$Xe[$O["Name"]]["pos"][0]+2.5+$qe);}echo'<div id="schema" style="height: ',$Mf,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$zf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Mf,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Xe
as$_=>$N){echo"<div class='table' style='top: ".$N["pos"][0]."em; left: ".$N["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($_).'"><b>'.h($_)."</b></a>";foreach($N["fields"]as$l){$W='<span'.type_class($l["type"]).' title="'.h($l["full_type"].($l["null"]?" NULL":'')).'">'.h($l["field"]).'</span>';echo"<br>".($l["primary"]?"<i>$W</i>":$W);}foreach((array)$N["references"]as$Df=>$Ke){foreach($Ke
as$Zc=>$Ge){$ad=$Zc-$yf[$_][1];$p=0;foreach($Ge[0]as$hf)echo"\n<div class='references' title='".h($Df)."' id='refs$Zc-".($p++)."' style='left: $ad"."em; top: ".$N["fields"][$hf]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$ad)."em;'></div></div>";}}foreach((array)$Je[$_]as$Df=>$Ke){foreach($Ke
as$Zc=>$f){$ad=$Zc-$yf[$_][1];$p=0;foreach($f
as$Cf)echo"\n<div class='references' title='".h($Df)."' id='refd$Zc-".($p++)."' style='left: $ad"."em; top: ".$N["fields"][$Cf]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.4.0-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$ad)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Xe
as$_=>$N){foreach((array)$N["references"]as$Df=>$Ke){foreach($Ke
as$Zc=>$Ge){$xd=$Mf;$od=-10;foreach($Ge[0]as$v=>$hf){$re=$N["pos"][0]+$N["fields"][$hf]["pos"];$se=$Xe[$Df]["pos"][0]+$Xe[$Df]["fields"][$Ge[1][$v]]["pos"];$xd=min($xd,$re,$se);$od=max($od,$re,$se);}echo"<div class='references' id='refl$Zc' style='left: $Zc"."em; top: $xd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($od-$xd)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(112),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST){$fb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$v)$fb.="&$v=".urlencode($_POST[$v]);cookie("adminer_export",substr($fb,1));$ac=dump_headers(($a!=""?$a:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Pc=($_POST["format"]=="sql");if($Pc)echo"-- Adminer $ia ".$yb[DRIVER]." dump

".($u!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");$M=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){if($g->select_db($j)){if($Pc&&ereg('CREATE',$M)&&($hb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1))){if($M=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($j).";\n";echo($M=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$hb):$hb).";\n";}if($Pc){if($M)echo
use_sql($j).";\n\n";if(in_array("CREATE+ALTER",array($M,$_POST["table_style"])))echo"SET @adminer_alter = '';\n\n";$be="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Re){foreach(get_rows("SHOW $Re STATUS WHERE Db = ".q($j),null,"-- ")as$G)$be.=($M!='DROP+CREATE'?"DROP $Re IF EXISTS ".idf_escape($G["Name"]).";;\n":"").$g->result("SHOW CREATE $Re ".idf_escape($G["Name"]),2).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$G)$be.=($M!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($G["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($G["Name"]),3).";;\n\n";}if($be)echo"DELIMITER ;;\n\n$be"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$O){$N=(DB==""||in_array($O["Name"],(array)$_POST["tables"]));$mb=(DB==""||in_array($O["Name"],(array)$_POST["data"]));if($N||$mb){if(!is_view($O)){if($ac=="tar")ob_start();$b->dumpTable($O["Name"],($N?$_POST["table_style"]:""));if($mb)$b->dumpData($O["Name"],$_POST["data_style"],"SELECT * FROM ".table($O["Name"]));if($Pc&&$_POST["triggers"]&&$N&&($Sf=trigger_sql($O["Name"],$_POST["table_style"])))echo"\nDELIMITER ;;\n$Sf\nDELIMITER ;\n";if($ac=="tar")echo
tar_file((DB!=""?"":"$j/")."$O[Name].csv",ob_get_clean());elseif($Pc)echo"\n";}elseif($Pc)$Y[]=$O["Name"];}}foreach($Y
as$jg)$b->dumpTable($jg,$_POST["table_style"],true);if($ac=="tar")echo
pack("x512");}if($M=="CREATE+ALTER"&&$Pc){$D="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $D;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($D)as$G){$Ya=q($G["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$G["TABLE_COMMENT"]):$G["TABLE_COMMENT"]);echo"
				WHEN ".q($G["TABLE_NAME"])." THEN
					".(isset($G["ENGINE"])?"IF _engine != '$G[ENGINE]' OR _table_collation != '$G[TABLE_COLLATION]' OR _table_comment != $Ya THEN
						ALTER TABLE ".idf_escape($G["TABLE_NAME"])." ENGINE=$G[ENGINE] COLLATE=$G[TABLE_COLLATION] COMMENT=$Ya;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($M,$_POST["table_style"]))&&$Pc)echo"SELECT @adminer_alter;\n";}}if($Pc)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(113),"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$pb=array('','USE','DROP+CREATE','CREATE');$_f=array('','DROP+CREATE','CREATE');$nb=array('','TRUNCATE+INSERT','INSERT');if($u=="sql"){$pb[]='CREATE+ALTER';$_f[]='CREATE+ALTER';$nb[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$G);if(!$G)$G=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($G["events"])){$G["routines"]=$G["events"]=($_GET["dump"]=="");$G["triggers"]=$G["table_style"];}echo"<tr><th>".lang(114)."<td>".html_select("output",$b->dumpOutput(),$G["output"],0)."\n";echo"<tr><th>".lang(115)."<td>".html_select("format",$b->dumpFormat(),$G["format"],0)."\n";echo($u=="sqlite"?"":"<tr><th>".lang(23)."<td>".html_select('db_style',$pb,$G["db_style"]).(support("routine")?checkbox("routines",1,$G["routines"],lang(116)):"").(support("event")?checkbox("events",1,$G["events"],lang(117)):"")),"<tr><th>".lang(78)."<td>".html_select('table_style',$_f,$G["table_style"]).checkbox("auto_increment",1,$G["auto_increment"],lang(93)).(support("trigger")?checkbox("triggers",1,$G["triggers"],lang(110)):""),"<tr><th>".lang(118)."<td>".html_select('data_style',$nb,$G["data_style"]),'</table>
<p><input type="submit" value="',lang(113),'">

<table cellspacing="0">
';$ve=array();if(DB!=""){$Na=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Na onclick='formCheck(this, /^tables\\[/);'>".lang(78)."</label>","<th style='text-align: right;'><label>".lang(118)."<input type='checkbox' id='check-data'$Na onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$O){$_=$O["Name"];$ue=ereg_replace("_.*","",$_);$Na=($a==""||$a==(substr($a,-1)=="%"?"$ue%":$_));$xe="<tr><td>".checkbox("tables[]",$_,$Na,$_,"formUncheck('check-tables');");if(is_view($O))$Y.="$xe\n";else
echo"$xe<td align='right'><label>".($O["Engine"]=="InnoDB"&&$O["Rows"]?"~ ":"").$O["Rows"].checkbox("data[]",$_,$Na,"","formUncheck('check-data');")."</label>\n";$ve[$ue]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(23)."</label></thead>\n";$i=$b->databases();if($i){foreach($i
as$j){if(!information_schema($j)){$ue=ereg_replace("_.*","",$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$ue%",$j,"formUncheck('check-databases');")."</label>\n";$ve[$ue]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$ic=true;foreach($ve
as$v=>$W){if($v!=""&&$W>1){echo($ic?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$v%")."'>".h($v)."</a>";$ic=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(52));$E=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$uc=$E;if(!$E)$E=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($uc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(21)."<th>".lang(20)."<th>&nbsp;</thead>\n";while($G=$E->fetch_assoc())echo'<tr'.odd().'><td>'.h($G["User"])."<td>".h($G["Host"]).'<td><a href="'.h(ME.'user='.urlencode($G["User"]).'&host='.urlencode($G["Host"])).'">'.lang(32)."</a>\n";if(!$uc||DB!="")echo"<tr".odd()."><td><input name='user'><td><input name='host' value='localhost'><td><input type='submit' value='".lang(32)."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.lang(119)."</a>";}elseif(isset($_GET["sql"])){if(!$k&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Bc=&get_session("queries");$Ac=&$Bc[DB];if(!$k&&$_POST["clear"]){$Ac=array();adminer_redirect(remove_from_uri("history"));}$Ra=($_SERVER["HTTPS"]?"https":"http")."://www.adminer.org/static/CodeMirror2";$Qa=($u=="sql"?"mysql":"plsql");$Pb=array();page_header(lang(45),$k,array(),"","<link rel='stylesheet' href='$Ra/lib/codemirror.css'>");if(!$k&&$_POST){$qc=false;$D=$_POST["query"];if($_POST["webfile"]){$qc=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$D=($qc?fread($qc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=UPLOAD_ERR_NO_FILE)$D=get_file("sql_file",true);if(is_string($D)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($D)+memory_get_usage()+8e6));if($D!=""&&strlen($D)<1e6){$C=$D.(ereg(";[ \t\r\n]*\$",$D)?"":";");if(!$Ac||reset(end($Ac))!=$C)$Ac[]=array($C,time());}$if="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies"))session_write_close();$sb=";";$A=0;$Ib=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$Xa=0;$Qb=array();$ed=0;$he='[\'"'.($u=="sql"?'`#':($u=="sqlite"?'`[':($u=="mssql"?'[':''))).']|/\\*|-- |$'.($u=="pgsql"?'|\\$[^$]*\\$':'');$Nf=microtime();parse_str($_COOKIE["adminer_export"],$qa);$Bb=$b->dumpFormat();unset($Bb["sql"]);while($D!=""){if(!$A&&preg_match("~^$if*DELIMITER\\s+(.+)~i",$D,$z)){$sb=$z[1];$D=substr($D,strlen($z[0]));}else{preg_match('('.preg_quote($sb)."\\s*|$he)",$D,$z,PREG_OFFSET_CAPTURE,$A);list($oc,$qe)=$z[0];if(!$oc&&$qc&&!feof($qc))$D.=fread($qc,1e5);else{if(!$oc&&rtrim($D)=="")break;$A=$qe+strlen($oc);if($oc&&rtrim($oc)!=$sb){while(preg_match('('.($oc=='/*'?'\\*/':($oc=='['?']':(ereg('^-- |^#',$oc)?"\n":preg_quote($oc)."|\\\\."))).'|$)s',$D,$z,PREG_OFFSET_CAPTURE,$A)){$Ve=$z[0][0];if(!$Ve&&$qc&&!feof($qc))$D.=fread($qc,1e5);else{$A=$z[0][1]+strlen($Ve);if($Ve[0]!="\\")break;}}}else{$Ib=false;$C=substr($D,0,$qe);$Xa++;$xe="<pre id='sql-$Xa'><code class='jush-$u'>".shorten_utf8(trim($C),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$xe;ob_flush();flush();}$kf=microtime();if($g->multi_query($C)&&is_object($h)&&preg_match("~^$if*USE\\b~isU",$C))$h->query($C);do{$E=$g->store_result();$Jb=microtime();$Gf=adminer_format_time($kf,$Jb).(strlen($C)<1000?" <a href='".h(ME)."sql=".urlencode(trim($C))."'>".lang(32)."</a>":"");if($g->error){echo($_POST["only_errors"]?$xe:""),"<p class='error'>".lang(120).": ".adminer_error()."\n";$Pb[]=$ed+(function_exists('error_line')?error_line():0);$Qb[]=" <a href='#sql-$Xa'>$Xa</a>";if($_POST["error_stops"])break
2;}elseif(is_object($E)){$Wd=select($E,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($E->num_rows?lang(121,$E->num_rows):"").$Gf;$q="export-$Xa";$Zb=", <a href='#$q' onclick=\"return !toggle('$q');\">".lang(113)."</a><span id='$q' class='hidden'>: ".html_select("output",$b->dumpOutput(),$qa["output"])." ".html_select("format",$Bb,$qa["format"])."<input type='hidden' name='query' value='".h($C)."'>"." <input type='submit' name='export' value='".lang(113)."'><input type='hidden' name='token' value='$Q'></span>\n";if($h&&preg_match("~^($if|\\()*SELECT\\b~isU",$C)&&($Yb=explain($h,$C))){$q="explain-$Xa";echo", <a href='#$q' onclick=\"return !toggle('$q');\">EXPLAIN</a>$Zb","<div id='$q' class='hidden'>\n";select($Yb,$h,($u=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""),$Wd);echo"</div>\n";}else
echo$Zb;echo"</form>\n";}}else{if(preg_match("~^$if*(CREATE|DROP|ALTER)$if+(DATABASE|SCHEMA)\\b~isU",$C)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(122,$g->affected_rows)."$Gf\n";}$kf=$Jb;}while($g->next_result());$ed+=substr_count($C.$oc,"\n");$D=substr($D,$A);$A=0;}}}}if($Ib)echo"<p class='message'>".lang(123)."\n";elseif($_POST["only_errors"])echo"<p class='message'>".lang(124,$Xa-count($Qb)).adminer_format_time($Nf,microtime())."\n";elseif($Qb&&$Xa>1)echo"<p class='error'>".lang(120).": ".implode("",$Qb)."\n";}else
echo"<p class='error'>".upload_error($D)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$C=$_GET["sql"];if($_POST)$C=$_POST["query"];elseif($_GET["history"]=="all")$C=$Ac;elseif($_GET["history"]!="")$C=$Ac[$_GET["history"]][0];textarea("query",$C,20,80,"query");echo($_POST?"":"<script type='text/javascript'>document.getElementById('query').focus();</script>\n"),"<p>".(ini_bool("file_uploads")?lang(125).': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':lang(126)),'<p>
<input type="submit" value="',lang(127),'" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$Q,'">
',checkbox("error_stops",1,$_POST["error_stops"],lang(128))."\n",checkbox("only_errors",1,$_POST["only_errors"],lang(129))."\n";print_fieldset("webfile",lang(130),$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$ab=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$v=>$W){if(extension_loaded($W))$ab[]=".$v";}echo
lang(131,"<code>adminer.sql".($ab?"[".implode("|",$ab)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(132).'">',"</div></fieldset>\n";if($Ac){print_fieldset("history",lang(133),$_GET["history"]!="");foreach($Ac
as$v=>$W){list($C,$Gf)=$W;echo'<a href="'.h(ME."sql=&history=$v").'">'.lang(32)."</a> <span class='time'>".@date("H:i:s",$Gf)."</span> <code class='jush-$u'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$C)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(134)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(135)."</a>\n","</div></fieldset>\n";}echo'
</form>

<script src="',$Ra,'/lib/codemirror.js"></script>
<script src="',"$Ra/mode/$Qa/$Qa.js";?>"></script>
<script type="text/javascript">
if (window.CodeMirror) {
	var codeMirror = CodeMirror.fromTextArea(document.getElementById('query'), { mode: 'text/x-<?php echo$Qa,'\' });
	';foreach($Pb
as$ed){echo'codeMirror.setLineClass(',$ed;?>, '', 'error');<?php }echo'}
</script>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$cg=(isset($_GET["select"])?$_POST["edit"]:$Z);$m=fields($a);foreach($m
as$_=>$l){if(!isset($l["privileges"][$cg?"update":"insert"])||$b->fieldName($l)=="")unset($m[$_]);}if($_POST&&!$k&&!isset($_GET["select"])){$gd=$_POST["referer"];if($_POST["insert"])$gd=($cg?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$gd))$gd=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $Z"),$gd,lang(136));else{$K=array();foreach($m
as$_=>$l){$W=process_input($l);if($W!==false&&$W!==null)$K[idf_escape($_)]=($cg?"\n".idf_escape($_)." = $W":$W);}if($cg){if(!$K)adminer_redirect($gd);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$K),"\nWHERE $Z"),$gd,lang(137));}else{$E=insert_into($a,$K);$Yc=($E?last_id():0);queries_redirect($gd,lang(138,($Yc?" $Yc":"")),$E);}}}$wf=$b->tableName(table_status($a));page_header(($cg?lang(32):lang(139)),$k,array("select"=>array($a,$wf)),$wf);$G=null;if($_POST["save"])$G=(array)$_POST["fields"];elseif($Z){$I=array();foreach($m
as$_=>$l){if(isset($l["privileges"]["select"]))$I[]=($_POST["clone"]&&$l["auto_increment"]?"'' AS ":(ereg("enum|set",$l["type"])?"1*".idf_escape($_)." AS ":"")).idf_escape($_);}$G=array();if($I){$H=get_rows("SELECT".limit(implode(", ",$I)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$G=(isset($_GET["select"])&&count($H)!=1?null:reset($H));}}if($G===false)echo"<p class='error'>".lang(83)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($m){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$_=>$l){echo"<tr><th>".$b->fieldName($l);$rb=$_GET["set"][bracket_escape($_)];$X=($G!==null?($G[$_]!=""&&ereg("enum|set",$l["type"])?(is_array($G[$_])?array_sum($G[$_]):+$G[$_]):$G[$_]):(!$cg&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($rb!==null?$rb:$l["default"]))));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$l);$o=($_POST["save"]?(string)$_POST["function"][$_]:($cg&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$X=="CURRENT_TIMESTAMP"){$X="";$o="now";}input($l,$X,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".lang(140)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($cg?lang(141):lang(142))."' title='Ctrl+Shift+Enter'>\n";}echo($cg?"<input type='submit' name='delete' value='".lang(143)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$ie=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Ie=referencable_primary($a);$mc=array();foreach($Ie
as$wf=>$l)$mc[str_replace("`","``",$wf)."`".str_replace("`","``",$l["field"])]=$wf;$Zd=array();$ae=array();if($a!=""){$Zd=fields($a);$ae=table_status($a);}if($_POST&&!$_POST["fields"])$_POST["fields"]=array();if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),lang(144));else{$m=array();$kc=array();ksort($_POST["fields"]);$Yd=reset($Zd);$ua="FIRST";foreach($_POST["fields"]as$v=>$l){$n=$mc[$l["type"]];$Tf=($n!==null?$Ie[$n]:$l);if($l["field"]!=""){if(!$l["has_default"])$l["default"]=null;$rb=eregi_replace(" *on update CURRENT_TIMESTAMP","",$l["default"]);if($rb!=$l["default"]){$l["on_update"]="CURRENT_TIMESTAMP";$l["default"]=$rb;}if($v==$_POST["auto_increment_col"])$l["auto_increment"]=true;$Be=process_field($l,$Tf);if($Be!=process_field($Yd,$Yd))$m[]=array($l["orig"],$Be,$ua);if($n!==null)$kc[idf_escape($l["field"])]=($a!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($l["field"]).") REFERENCES ".table($mc[$l["type"]])." (".idf_escape($Tf["field"]).")".(ereg("^($Ld)\$",$l["on_delete"])?" ON DELETE $l[on_delete]":"");$ua="AFTER ".idf_escape($l["field"]);}elseif($l["orig"]!="")$m[]=array($l["orig"]);if($l["orig"]!="")$Yd=next($Zd);}$ke="";if(in_array($_POST["partition_by"],$ie)){$le=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$v=>$W){$X=$_POST["partition_values"][$v];$le[]="\nPARTITION ".idf_escape($W)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$ke.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($le?" (".implode(",",$le)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($a!=""&&support("partitioning"))$ke.="\nREMOVE PARTITIONING";$rd=lang(145);if($a==""){cookie("adminer_engine",$_POST["Engine"]);$rd=lang(146);}$_=trim($_POST["name"]);queries_redirect(ME."table=".urlencode($_),$rd,alter_table($a,$_,$m,$kc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$ae["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$ae["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$ke));}}page_header(($a!=""?lang(29):lang(147)),$k,array("table"=>$a),$a);$G=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($T["int"])?"int":(isset($T["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$G=$_POST;if($G["auto_increment_col"])$G["fields"][$G["auto_increment_col"]]["auto_increment"]=true;process_fields($G["fields"]);}elseif($a!=""){$G=$ae;$G["name"]=$a;$G["fields"]=array();if(!$_GET["auto_increment"])$G["Auto_increment"]="";foreach($Zd
as$l){$l["has_default"]=isset($l["default"]);if($l["on_update"])$l["default"].=" ON UPDATE $l[on_update]";$G["fields"][]=$l;}if(support("partitioning")){$rc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$E=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $rc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($G["partition_by"],$G["partitions"],$G["partition"])=$E->fetch_row();$G["partition_names"]=array();$G["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $rc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Ue){$G["partition_names"][]=$Ue["PARTITION_NAME"];$G["partition_values"][]=$Ue["PARTITION_DESCRIPTION"];}$G["partition_names"][]="";}}$Ua=collations();$rf=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($rf&&count($G["fields"])>$rf)echo"<p class='error'>".h(lang(148,'suhosin.post.max_vars','suhosin.request.max_vars'))."\n";$Lb=engines();foreach($Lb
as$Kb){if(!strcasecmp($Kb,$G["Engine"])){$G["Engine"]=$Kb;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(149),': <input name="name" maxlength="64" value="',h($G["name"]),'">
';if($a==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Lb?html_select("Engine",array(""=>"(".lang(150).")")+$Lb,$G["Engine"]):""),' ',($Ua&&!ereg("sqlite|mssql",$u)?html_select("Collation",array(""=>"(".lang(86).")")+$Ua,$G["Collation"]):""),' <input type="submit" value="',lang(140),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Za=($_POST?$_POST["comments"]:$G["Comment"]!="");if(!$_POST&&!$Za){foreach($G["fields"]as$l){if($l["comment"]!=""){$Za=true;break;}}}edit_fields($G["fields"],$Ua,"TABLE",$rf,$mc,$Za);echo'</table>
<p>
',lang(93),': <input name="Auto_increment" size="6" value="',h($G["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">',lang(94),'</label>
',(support("comment")?checkbox("comments",1,$Za,lang(95),"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($G["Comment"]).'" maxlength="60"'.($Za?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(140),'">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Q,'">
';if(support("partitioning")){$je=ereg('RANGE|LIST',$G["partition_by"]);print_fieldset("partition",lang(151),$G["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$ie,$G["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($G["partition"]),'">)
',lang(152),': <input name="partitions" size="2" value="',h($G["partitions"]),'"',($je||!$G["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($je?"":" class='hidden'"),'>
<thead><tr><th>',lang(153),'<th>',lang(154),'</thead>
';foreach($G["partition_names"]as$v=>$W){echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'"'.($v==count($G["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($G["partition_values"][$v]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Hc=array("PRIMARY","UNIQUE","INDEX");$O=table_status($a);if(eregi("MyISAM|M?aria",$O["Engine"]))$Hc[]="FULLTEXT";$t=indexes($a);if($u=="sqlite"){unset($Hc[0]);unset($t[""]);}if($_POST&&!$k&&!$_POST["add"]){$c=array();foreach($_POST["indexes"]as$s){$_=$s["name"];if(in_array($s["type"],$Hc)){$f=array();$dd=array();$K=array();ksort($s["columns"]);foreach($s["columns"]as$v=>$e){if($e!=""){$w=$s["lengths"][$v];$K[]=idf_escape($e).($w?"(".(+$w).")":"");$f[]=$e;$dd[]=($w?$w:null);}}if($f){$Xb=$t[$_];if($Xb){ksort($Xb["columns"]);ksort($Xb["lengths"]);if($s["type"]==$Xb["type"]&&array_values($Xb["columns"])===$f&&(!$Xb["lengths"]||array_values($Xb["lengths"])===$dd)){unset($t[$_]);continue;}}$c[]=array($s["type"],$_,"(".implode(", ",$K).")");}}}foreach($t
as$_=>$Xb)$c[]=array($Xb["type"],$_,"DROP");if(!$c)adminer_redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(155),alter_indexes($a,$c));}page_header(lang(103),$k,array("table"=>$a),$a);$m=array_keys(fields($a));$G=array("indexes"=>$t);if($_POST){$G=$_POST;if($_POST["add"]){foreach($G["indexes"]as$v=>$s){if($s["columns"][count($s["columns"])]!="")$G["indexes"][$v]["columns"][]="";}$s=end($G["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen'))$G["indexes"][]=array("columns"=>array(1=>""));}}else{foreach($G["indexes"]as$v=>$s){$G["indexes"][$v]["name"]=$v;$G["indexes"][$v]["columns"][]="";}$G["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>',lang(156),'<th>',lang(157),'<th>',lang(158),'</thead>
';$Rc=1;foreach($G["indexes"]as$s){echo"<tr><td>".html_select("indexes[$Rc][type]",array(-1=>"")+$Hc,$s["type"],($Rc==count($G["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$p=1;foreach($s["columns"]as$v=>$e){echo"<span>".html_select("indexes[$Rc][columns][$p]",array(-1=>"")+$m,$e,($p==count($s["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($u=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$Rc][lengths][$p]' size='2' value='".h($s["lengths"][$v])."'> </span>";$p++;}echo"<td><input name='indexes[$Rc][name]' value='".h($s["name"])."'>\n";$Rc++;}echo'</table>
<p>
<input type="submit" value="',lang(140),'">
<noscript><p><input type="submit" name="add" value="',lang(96),'"></noscript>
<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$k&&!isset($_POST["add_x"])){restart_session();$_=trim($_POST["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(159),drop_databases(array(DB)));}elseif(DB!==$_){if(DB!=""){$_GET["db"]=$_;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_),lang(160),rename_database($_,$_POST["collation"]));}else{$i=explode("\n",str_replace("\r","",$_));$pf=true;$Xc="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,$_POST["collation"]))$pf=false;$Xc=$j;}}queries_redirect(ME."db=".urlencode($Xc),lang(161),$pf);}}else{if(!$_POST["collation"])adminer_redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($_).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),lang(162));}}page_header(DB!=""?lang(48):lang(163),$k,array(),DB);$Ua=collations();$_=DB;$Ta=null;if($_POST){$_=$_POST["name"];$Ta=$_POST["collation"];}elseif(DB!="")$Ta=db_collation(DB,$Ua);elseif($u=="sql"){foreach(get_vals("SHOW GRANTS")as$uc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$uc,$z)&&$z[1]){$_=stripcslashes(idf_unescape("`$z[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($_,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($_).'</textarea><br>':'<input id="name" name="name" value="'.h($_).'" maxlength="64">')."\n".($Ua?html_select("collation",array(""=>"(".lang(86).")")+$Ua,$Ta):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="<?php echo
lang(140),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.4.0-dev' alt='+' title='".lang(96)."'>\n";echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$k){$y=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$y,lang(164));else{$_=trim($_POST["name"]);$y.=urlencode($_);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($_),$y,lang(165));elseif($_GET["ns"]!=$_)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_),$y,lang(166));else
adminer_redirect($y);}}page_header($_GET["ns"]!=""?lang(49):lang(50),$k);$G=$_POST;if(!$G)$G=array("name"=>$_GET["ns"]);echo'
<form action="" method="post">
<p><input id="name" name="name" value="',h($G["name"]);?>">
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="<?php echo
lang(140),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(167).": ".h($da),$k);$Re=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Gc=array();$be=array();foreach($Re["fields"]as$p=>$l){if(substr($l["inout"],-3)=="OUT")$be[$p]="@".idf_escape($l["field"])." AS ".idf_escape($l["field"]);if(!$l["inout"]||substr($l["inout"],0,2)=="IN")$Gc[]=$p;}if(!$k&&$_POST){$Ka=array();foreach($Re["fields"]as$v=>$l){if(in_array($v,$Gc)){$W=process_input($l);if($W===false)$W="''";if(isset($be[$v]))$g->query("SET @".idf_escape($l["field"])." = $W");}$Ka[]=(isset($be[$v])?"@".idf_escape($l["field"]):$W);}$D=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ka).")";echo"<p><code class='jush-$u'>".h($D)."</code> <a href='".h(ME)."sql=".urlencode($D)."'>".lang(32)."</a>\n";if(!$g->multi_query($D))echo"<p class='error'>".adminer_error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$E=$g->store_result();if(is_object($E))select($E,$h);else
echo"<p class='message'>".lang(168,$g->affected_rows)."\n";}while($g->next_result());if($be)select($g->query("SELECT ".implode(", ",$be)));}}echo'
<form action="" method="post">
';if($Gc){echo"<table cellspacing='0'>\n";foreach($Gc
as$v){$l=$Re["fields"][$v];$_=$l["field"];echo"<tr><th>".$b->fieldName($l);$X=$_POST["fields"][$_];if($X!=""){if($l["type"]=="enum")$X=+$X;if($l["type"]=="set")$X=array_sum($X);}input($l,$X,(string)$_POST["function"][$_]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(167),'">
<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];if($_POST&&!$k&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($a),lang(169));else{$hf=array_filter($_POST["source"],'strlen');ksort($hf);$Cf=array();foreach($hf
as$v=>$W)$Cf[$v]=$_POST["target"][$v];query_redirect("ALTER TABLE ".table($a).($_GET["name"]!=""?"\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$hf)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Cf)).")".(ereg("^($Ld)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Ld)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($a),($_GET["name"]!=""?lang(170):lang(171)));$k=lang(172)."<br>$k";}}page_header(lang(173),$k,array("table"=>$a),$a);$G=array("table"=>$a,"source"=>array(""));if($_POST){$G=$_POST;ksort($G["source"]);if($_POST["add"])$G["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$G["target"]=array();}elseif($_GET["name"]!=""){$mc=foreign_keys($a);$G=$mc[$_GET["name"]];$G["source"][]="";}$hf=array_keys(fields($a));$Cf=($a===$G["table"]?$hf:array_keys(fields($G["table"])));$He=array();foreach(table_status()as$_=>$O){if(fk_support($O))$He[]=$_;}echo'
<form action="" method="post">
<p>
';if($G["db"]==""&&$G["ns"]==""){echo
lang(174),':
',html_select("table",$He,$G["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(175),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(105),'<th>',lang(106),'</thead>
';$Rc=0;foreach($G["source"]as$v=>$W){echo"<tr>","<td>".html_select("source[".(+$v)."]",array(-1=>"")+$hf,$W,($Rc==count($G["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$v)."]",$Cf,$G["target"][$v]);$Rc++;}echo'</table>
<p>
',lang(87),': ',html_select("on_delete",array(-1=>"")+explode("|",$Ld),$G["on_delete"]),' ',lang(107),': ',html_select("on_update",array(-1=>"")+explode("|",$Ld),$G["on_update"]),'<p>
<input type="submit" value="',lang(140),'">
<noscript><p><input type="submit" name="add" value="',lang(176),'"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$_b=false;if($_POST&&!$k){$_=trim($_POST["name"]);$_b=drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($_)." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_)),lang(177),lang(178),lang(179),$a);}page_header(($a!=""?lang(28):lang(180)),$k,array("table"=>$a),$a);$G=$_POST;if(!$G&&$a!=""){$G=view($a);$G["name"]=$a;}echo'
<form action="" method="post">
<p>',lang(158),': <input name="name" value="',h($G["name"]),'" maxlength="64">
<p>';textarea("select",$G["select"]);echo'<p>
';if($_b){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="',lang(140),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Oc=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$mf=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$k){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(181));elseif(in_array($_POST["INTERVAL_FIELD"],$Oc)&&isset($mf[$_POST["STATUS"]])){$We="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(182):lang(183)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$We.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$We)."\n".$mf[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(184).": ".h($aa):lang(185)),$k);$G=$_POST;if(!$G&&$aa!=""){$H=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$G=reset($H);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(158),'<td><input name="EVENT_NAME" value="',h($G["EVENT_NAME"]),'" maxlength="64">
<tr><th>',lang(186),'<td><input name="STARTS" value="',h("$G[EXECUTE_AT]$G[STARTS]"),'">
<tr><th>',lang(187),'<td><input name="ENDS" value="',h($G["ENDS"]),'">
<tr><th>',lang(188),'<td><input name="INTERVAL_VALUE" value="',h($G["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Oc,$G["INTERVAL_FIELD"]),'<tr><th>',lang(74),'<td>',html_select("STATUS",$mf,$G["STATUS"]),'<tr><th>',lang(95),'<td><input name="EVENT_COMMENT" value="',h($G["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$G["ON_COMPLETION"]=="PRESERVE",lang(189)),'</table>
<p>';textarea("EVENT_DEFINITION",$G["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(140),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Re=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Se=routine_languages();$_b=false;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$K=array();$m=(array)$_POST["fields"];ksort($m);foreach($m
as$l){if($l["field"]!="")$K[]=(ereg("^($Lc)\$",$l["inout"])?"$l[inout] ":"").idf_escape($l["field"]).process_type($l,"CHARACTER SET");}$_b=drop_create("DROP $Re ".idf_escape($da),"CREATE $Re ".idf_escape(trim($_POST["name"]))." (".implode(", ",$K).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$Se)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),lang(190),lang(191),lang(192),$da);}page_header(($da!=""?(isset($_GET["function"])?lang(193):lang(194)).": ".h($da):(isset($_GET["function"])?lang(195):lang(196))),$k);$Ua=get_vals("SHOW CHARACTER SET");sort($Ua);$G=array("fields"=>array());if($_POST){$G=$_POST;$G["fields"]=(array)$G["fields"];process_fields($G["fields"]);}elseif($da!=""){$G=routine($da,$Re);$G["name"]=$da;}echo'
<form action="" method="post" id="form">
<p>',lang(158),': <input name="name" value="',h($G["name"]),'" maxlength="64">
',($Se?lang(7).": ".html_select("language",$Se,$G["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($G["fields"],$Ua,$Re);if(isset($_GET["function"])){echo"<tr><td>".lang(197);edit_type("returns",$G["returns"],$Ua);}echo'</table>
<p>';textarea("definition",$G["definition"]);echo'<p>
<input type="submit" value="',lang(140),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}if($_b){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];if($_POST&&!$k){$y=substr(ME,0,-1);$_=trim($_POST["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$y,lang(198));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($_),$y,lang(199));elseif($fa!=$_)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($_),$y,lang(200));else
adminer_redirect($y);}page_header($fa!=""?lang(201).": ".h($fa):lang(202),$k);$G=$_POST;if(!$G)$G=array("name"=>$fa);echo'
<form action="" method="post">
<p><input name="name" value="',h($G["name"]),'">
<input type="submit" value="',lang(140),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];if($_POST&&!$k){$y=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$y,lang(203));else
query_redirect("CREATE TYPE ".idf_escape(trim($_POST["name"]))." $_POST[as]",$y,lang(204));}page_header($ga!=""?lang(205).": ".h($ga):lang(206),$k);$G=$_POST;if(!$G)$G=array("as"=>"AS ");echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";else{echo"<input name='name' value='".h($G['name'])."'>\n";textarea("as",$G["as"]);echo"<p><input type='submit' value='".lang(140)."'>\n";}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$Rf=trigger_options();$Qf=array("INSERT","UPDATE","DELETE");$_b=false;if($_POST&&!$k&&in_array($_POST["Timing"],$Rf["Timing"])&&in_array($_POST["Event"],$Qf)&&in_array($_POST["Type"],$Rf["Type"])){$Hf=" $_POST[Timing] $_POST[Event]";$Kd=" ON ".table($a);$_b=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($u=="pgsql"?$Kd:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($u=="mssql"?$Kd.$Hf:$Hf.$Kd).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($a),lang(207),lang(208),lang(209),$_GET["name"]);}page_header(($_GET["name"]!=""?lang(210).": ".h($_GET["name"]):lang(211)),$k,array("table"=>$a));$G=$_POST;if(!$G)$G=trigger($_GET["name"])+array("Trigger"=>$a."_bi");echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(212),'<td>',html_select("Timing",$Rf["Timing"],$G["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(213),'<td>',html_select("Event",$Qf,$G["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(90),'<td>',html_select("Type",$Rf["Type"],$G["Type"]),'</table>
<p>',lang(158),': <input name="Trigger" value="',h($G["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$G["Statement"]);echo'<p>
<input type="submit" value="',lang(140),'">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}if($_b){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$_e=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$G){foreach(explode(",",($G["Privilege"]=="Grant option"?"":$G["Context"]))as$eb)$_e[$eb][$G["Privilege"]]=$G["Comment"];}$_e["Server Admin"]+=$_e["File access on server"];$_e["Databases"]["Create routine"]=$_e["Procedures"]["Create routine"];unset($_e["Procedures"]["Create routine"]);$_e["Columns"]=array();foreach(array("Select","Insert","Update","References")as$W)$_e["Columns"][$W]=$_e["Tables"][$W];unset($_e["Server Admin"]["Usage"]);foreach($_e["Tables"]as$v=>$W)unset($_e["Databases"][$v]);$Cd=array();if($_POST){foreach($_POST["objects"]as$v=>$W)$Cd[$W]=(array)$Cd[$W]+(array)$_POST["grants"][$v];}$vc=array();$Id="";if(isset($_GET["host"])&&($E=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($G=$E->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$G[0],$z)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$z[1],$kd,PREG_SET_ORDER)){foreach($kd
as$W){if($W[1]!="USAGE")$vc["$z[2]$W[2]"][$W[1]]=true;if(ereg(' WITH GRANT OPTION',$G[0]))$vc["$z[2]$W[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$G[0],$z))$Id=$z[1];}}if($_POST&&!$k){$Jd=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");$Dd=q($_POST["user"])."@".q($_POST["host"]);$me=q($_POST["pass"]);if($_POST["drop"])query_redirect("DROP USER $Jd",ME."privileges=",lang(214));else{$jb=false;if($Jd!=$Dd){$jb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Dd IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $me");$k=!$jb;}elseif($_POST["pass"]!=$Id||!$_POST["hashed"])queries("SET PASSWORD FOR $Dd = ".($_POST["hashed"]?$me:"PASSWORD($me)"));if(!$k){$Oe=array();foreach($Cd
as$Gd=>$uc){if(isset($_GET["grant"]))$uc=array_filter($uc);$uc=array_keys($uc);if(isset($_GET["grant"]))$Oe=array_diff(array_keys(array_filter($Cd[$Gd],'strlen')),$uc);elseif($Jd==$Dd){$Hd=array_keys((array)$vc[$Gd]);$Oe=array_diff($Hd,$uc);$uc=array_diff($uc,$Hd);unset($vc[$Gd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Gd,$z)&&(!grant("REVOKE",$Oe,$z[2]," ON $z[1] FROM $Dd")||!grant("GRANT",$uc,$z[2]," ON $z[1] TO $Dd"))){$k=true;break;}}}if(!$k&&isset($_GET["host"])){if($Jd!=$Dd)queries("DROP USER $Jd");elseif(!isset($_GET["grant"])){foreach($vc
as$Gd=>$Oe){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Gd,$z))grant("REVOKE",array_keys($Oe),$z[2]," ON $z[1] FROM $Dd");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(215):lang(216)),!$k);if($jb)$g->query("DROP USER $Dd");}}page_header((isset($_GET["host"])?lang(21).": ".h("$ha@$_GET[host]"):lang(119)),$k,array("privileges"=>array('',lang(52))));if($_POST){$G=$_POST;$vc=$Cd;}else{$G=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$G["pass"]=$Id;if($Id!="")$G["hashed"]=true;$vc[(DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")):"").".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(20),'<td><input name="host" maxlength="60" value="',h($G["host"]),'">
<tr><th>',lang(21),'<td><input name="user" maxlength="16" value="',h($G["user"]),'">
<tr><th>',lang(22),'<td><input id="pass" name="pass" value="',h($G["pass"]),'">
';if(!$G["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$G["hashed"],lang(217),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".lang(52)."</a>";$p=0;foreach($vc
as$Gd=>$uc){echo'<th>'.($Gd!="*.*"?"<input name='objects[$p]' value='".h($Gd)."' size='10'>":"<input type='hidden' name='objects[$p]' value='*.*' size='10'>*.*");$p++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(20),"Databases"=>lang(23),"Tables"=>lang(101),"Columns"=>lang(102),"Procedures"=>lang(218),)as$eb=>$tb){foreach((array)$_e[$eb]as$ze=>$Ya){echo"<tr".odd()."><td".($tb?">$tb<td":" colspan='2'").' lang="en" title="'.h($Ya).'">'.h($ze);$p=0;foreach($vc
as$Gd=>$uc){$_="'grants[$p][".h(strtoupper($ze))."]'";$X=$uc[strtoupper($ze)];if($eb=="Server Admin"&&$Gd!=(isset($vc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$_><option><option value='1'".($X?" selected":"").">".lang(219)."<option value='0'".($X=="0"?" selected":"").">".lang(220)."</select>";else
echo"<td align='center'><input type='checkbox' name=$_ value='1'".($X?" checked":"").($ze=="All privileges"?" id='grants-$p-all'":($ze=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$p-all');\"")).">";$p++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(140),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$k){$Uc=0;foreach((array)$_POST["kill"]as$W){if(queries("KILL ".(+$W)))$Uc++;}queries_redirect(ME."processlist=",lang(221,$Uc),$Uc||!$_POST["kill"]);}page_header(lang(72),$k);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap checkable">
';$p=-1;foreach(process_list()as$p=>$G){if(!$p)echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($G))."</thead>\n";echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$G["Id"],0):"");foreach($G
as$v=>$W)echo"<td>".(($u=="sql"&&$v=="Info"&&$W!="")||($u=="pgsql"&&$v=="current_query"&&$W!="<IDLE>")||($u=="oracle"&&$v=="sql_text"&&$W!="")?"<code class='jush-$u'>".shorten_utf8($W,100,"</code>").' <a href="'.h(ME.($G["db"]!=""?"db=".urlencode($G["db"])."&":"")."sql=".urlencode($W)).'">'.lang(32).'</a>':nbsp($W));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($p+1)."/".lang(222,$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".lang(223)."'>\n";}echo'<input type="hidden" name="token" value="',$Q,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$O=table_status($a);$t=indexes($a);$m=fields($a);$mc=column_foreign_keys($a);if($O["Oid"]=="t")$t[]=array("type"=>"PRIMARY","columns"=>array("oid"));parse_str($_COOKIE["adminer_import"],$ra);$Pe=array();$f=array();$Ff=null;foreach($m
as$v=>$l){$_=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$_!=""){$f[$v]=html_entity_decode(strip_tags($_));if(ereg('text|lob',$l["type"]))$Ff=$b->selectLengthProcess();}$Pe+=$l["privileges"];}list($I,$wc)=$b->selectColumnsProcess($f,$t);$Z=$b->selectSearchProcess($m,$t);$Td=$b->selectOrderProcess($m,$t);$x=$b->selectLimitProcess();$rc=($I?implode(", ",$I):($O["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($a);$xc=($wc&&count($wc)<count($I)?"\nGROUP BY ".implode(", ",$wc):"").($Td?"\nORDER BY ".implode(", ",$Td):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Yf=>$G)echo$g->result("SELECT".limit(idf_escape(key($G))." FROM ".table($a)," WHERE ".where_check($Yf).($Z?" AND ".implode(" AND ",$Z):"").($Td?" ORDER BY ".implode(", ",$Td):""),1));exit;}if($_POST&&!$k){$ng="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$we=$ag=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$we=array_flip($s["columns"]);$ag=($I?$we:array());break;}}foreach((array)$ag
as$v=>$W){if(in_array(idf_escape($v),$I))unset($ag[$v]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ag===array()){$mg=$Z;if(is_array($_POST["check"]))$mg[]="($ng)";$D="SELECT $rc".($mg?"\nWHERE ".implode(" AND ",$mg):"").$xc;}else{$Wf=array();foreach($_POST["check"]as$W)$Wf[]="(SELECT".limit($rc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W).$xc,1).")";$D=implode(" UNION ALL ",$Wf);}$b->dumpData($a,"table",$D);exit;}if(!$b->selectEmailProcess($Z,$mc)){if($_POST["save"]||$_POST["delete"]){$E=true;$sa=0;$D=table($a);$K=array();if(!$_POST["delete"]){foreach($f
as$_=>$W){$W=process_input($m[$_]);if($W!==null){if($_POST["clone"])$K[idf_escape($_)]=($W!==false?$W:idf_escape($_));elseif($W!==false)$K[]=idf_escape($_)." = $W";}}$D.=($_POST["clone"]?" (".implode(", ",array_keys($K)).")\nSELECT ".implode(", ",$K)."\nFROM ".table($a):" SET\n".implode(",\n",$K));}if($_POST["delete"]||$K){$Wa="UPDATE";if($_POST["delete"]){$Wa="DELETE";$D="FROM $D";}if($_POST["clone"]){$Wa="INSERT";$D="INTO $D";}if($_POST["all"]||($ag===array()&&$_POST["check"])||count($wc)<count($I)){$E=queries($Wa." $D".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $ng"));$sa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$W){$E=queries($Wa.limit1($D,"\nWHERE ".where_check($W)));if(!$E)break;$sa+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(224,$sa),$E);}elseif(!$_POST["import"]){if(!$_POST["val"])$k=lang(225);else{$E=true;$sa=0;foreach($_POST["val"]as$Yf=>$G){$K=array();foreach($G
as$v=>$W){$v=bracket_escape($v,1);$K[]=idf_escape($v)." = ".(ereg('char|text',$m[$v]["type"])||$W!=""?$b->processInput($m[$v],$W):"NULL");}$D=table($a)." SET ".implode(", ",$K);$mg=" WHERE ".where_check($Yf).($Z?" AND ".implode(" AND ",$Z):"");$E=queries("UPDATE".(count($wc)<count($I)?" $D$mg":limit1($D,$mg)));if(!$E)break;$sa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(224,$sa),$E);}}elseif(is_string($fc=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ra["output"])."&format=".urlencode($_POST["separator"]));$E=true;$Va=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$fc,$kd);$sa=count($kd[0]);begin();$cf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($kd[0]as$v=>$W){preg_match_all("~((\"[^\"]*\")+|[^$cf]*)$cf~",$W.$cf,$ld);if(!$v&&!array_diff($ld[1],$Va)){$Va=$ld[1];$sa--;}else{$K=array();foreach($ld[1]as$p=>$Sa)$K[idf_escape($Va[$p])]=($Sa==""&&$m[$Va[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Sa))));$E=insert_update($a,$K,$we);if(!$E)break;}}if($E)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(226,$sa),$E);queries("ROLLBACK");}else$k=upload_error($fc);}}$wf=$b->tableName($O);page_header(lang(34).": $wf",$k);session_write_close();$K=null;if(isset($Pe["insert"])){$K="";foreach((array)$_GET["where"]as$W){if(count($mc[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"]))))$K.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($O,$K);if(!$f)echo"<p class='error'>".lang(227).($m?".":": ".adminer_error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($I,$f);$b->selectSearchPrint($Z,$f,$t);$b->selectOrderPrint($Td,$f,$t);$b->selectLimitPrint($x);$b->selectLengthPrint($Ff);$b->selectActionPrint($t);echo"</form>\n";$ee=$_GET["page"];if($ee=="last"){$pc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$ee=floor(max(0,$pc-1)/$x);}$D="SELECT".limit((+$x&&$wc&&count($wc)<count($I)&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$rc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$xc,($x!=""?+$x:null),($ee?$x*$ee:0),"\n");echo$b->selectQuery($D);$E=$g->query($D);if(!$E)echo"<p class='error'>".adminer_error()."\n";else{if($u=="mssql")$E->seek($x*$ee);$Hb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$H=array();while($G=$E->fetch_assoc()){if($ee&&$u=="oracle")unset($G["RNUM"]);$H[]=$G;}if($_GET["page"]!="last")$pc=(+$x&&$wc&&count($wc)<count($I)?($u=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($D) x")):count($H));if(!$H)echo"<p class='message'>".lang(83)."\n";else{$Ea=$b->backwardKeys($a,$wf);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$wc&&$I?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(228)."</a>");$Bd=array();$tc=array();reset($I);$Ee=1;foreach($H[0]as$v=>$W){if($O["Oid"]!="t"||$v!="oid"){$W=$_GET["columns"][key($I)];$l=$m[$I?($W?$W["col"]:current($I)):$v];$_=($l?$b->fieldName($l,$Ee):"*");if($_!=""){$Ee++;$Bd[$v]=$_;$e=idf_escape($v);$Dc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($v);echo'<th><a href="'.h($Dc).'">'.(!$I||$W?apply_sql_function($W["fun"],$_):h(current($I)))."</a>";echo"<a href='".h("$Dc&desc%5B0%5D=1")."' title='".lang(40)."' class='text'> ↓</a>";}$tc[$v]=$W["fun"];next($I);}}$dd=array();if($_GET["modify"]){foreach($H
as$G){foreach($G
as$v=>$W)$dd[$v]=max($dd[$v],min(40,strlen(utf8_decode($W))));}}echo($Ea?"<th>".lang(229):"")."</thead>\n";foreach($b->rowDescriptions($H,$mc)as$Ad=>$G){$Xf=unique_array($H[$Ad],$t);$Yf="";foreach($Xf
as$v=>$W)$Yf.="&".($W!==null?urlencode("where[".bracket_escape($v)."]")."=".urlencode($W):"null%5B%5D=".urlencode($v));echo"<tr".odd().">".(!$wc&&$I?"":"<td>".checkbox("check[]",substr($Yf,1),in_array(substr($Yf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($wc)<count($I)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Yf)."'>".lang(228)."</a>"));foreach($G
as$v=>$W){if(isset($Bd[$v])){$l=$m[$v];if($W!=""&&(!isset($Hb[$v])||$Hb[$v]!=""))$Hb[$v]=(is_mail($W)?$Bd[$v]:"");$y="";$W=$b->editVal($W,$l);if($W!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$W!="")$y=h(ME.'download='.urlencode($a).'&field='.urlencode($v).$Yf);if($W==="")$W="&nbsp;";elseif(is_utf8($W)){if($Ff!=""&&ereg('text|blob',$l["type"]))$W=shorten_utf8($W,max(0,+$Ff));else$W=h($W);}if(!$y){foreach((array)$mc[$v]as$n){if(count($mc[$v])==1||end($n["source"])==$v){$y="";foreach($n["source"]as$p=>$hf)$y.=where_link($p,$n["target"][$p],$H[$Ad][$hf]);$y=h(($n["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($n["db"]),ME):ME).'select='.urlencode($n["table"]).$y);if(count($n["source"])==1)break;}}}if($v=="COUNT(*)"){$y=h(ME."select=".urlencode($a));$p=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$Xf))$y.=h(where_link($p++,$V["col"],$V["val"],$V["op"]));}foreach($Xf
as$Tc=>$V)$y.=h(where_link($p++,$Tc,$V));}}if(!$y){if(is_mail($W))$y="mailto:$W";if($Ce=is_url($G[$v]))$y=($Ce=="http"&&$ba?$G[$v]:"$Ce://www.adminer.org/redirect/?url=".urlencode($G[$v]));}$q=h("val[$Yf][".bracket_escape($v)."]");$X=$_POST["val"][$Yf][bracket_escape($v)];$zc=h($X!==null?$X:$G[$v]);$id=strpos($W,"<i>...</i>");$Eb=is_utf8($W)&&$H[$Ad][$v]==$G[$v]&&!$tc[$v];$Ef=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$Eb)||$X!==null?"<td>".($Ef?"<textarea name='$q' cols='30' rows='".(substr_count($G[$v],"\n")+1)."'>$zc</textarea>":"<input name='$q' value='$zc' size='$dd[$v]'>"):"<td id='$q' ondblclick=\"".($Eb?"selectDblClick(this, event".($id?", 2":($Ef?", 1":"")).")":"alert('".h(lang(230))."')").";\">".$b->selectVal($W,$y,$l));}}if($Ea)echo"<td>";$b->backwardKeysPrint($Ea,$H[$Ad]);echo"</tr>\n";}echo"</table>\n",(!$wc&&$I?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($H||$ee){$Tb=true;if($_GET["page"]!="last"&&+$x&&count($wc)>=count($I)&&($pc>=$x||$ee)){$pc=found_rows($O,$Z);if($pc<max(1e4,2*($ee+1)*$x)){ob_flush();flush();$pc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));}else$Tb=false;}echo"<p class='pages'>";if(+$x&&$pc>$x){$nd=floor(($pc-1)/$x);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(231)."', '".($ee+1)."'), event); return false;\">".lang(231)."</a>:",pagination(0,$ee).($ee>5?" ...":"");for($p=max(1,$ee-4);$p<min($nd,$ee+5);$p++)echo
pagination($p,$ee);echo($ee+5<$nd?" ...":"").($Tb?pagination($nd,$ee):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(232)."</a>");}echo" (".($Tb?"":"~ ").lang(121,$pc).") ".checkbox("all",1,0,lang(233))."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>',lang(32),'</legend><div>
<input type="submit" value="',lang(140),'"',($_GET["modify"]?'':' title="'.lang(225).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(32),'">
<input type="submit" name="clone" value="',lang(234),'">
<input type="submit" name="delete" value="',lang(143),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$pc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$nc=$b->dumpFormat();if($nc){print_fieldset("export",lang(113));$ce=$b->dumpOutput();echo($ce?html_select("output",$ce,$ra["output"])." ":""),html_select("format",$nc,$ra["format"])," <input type='submit' name='export' value='".lang(113)."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",lang(235),!$H);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"],1);echo" <input type='submit' name='import' value='".lang(235)."'>","<input type='hidden' name='token' value='$Q'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Hb,'strlen'),$f);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$lf=isset($_GET["status"]);page_header($lf?lang(74):lang(73));$hg=($lf?show_status():show_variables());if(!$hg)echo"<p class='message'>".lang(83)."\n";else{echo"<table cellspacing='0'>\n";foreach($hg
as$v=>$W){echo"<tr>","<th><code class='jush-".$u.($lf?"status":"set")."'>".h($v)."</code>","<td>".nbsp($W);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$tf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$O){$q=js_escape($O["Name"]);json_row("Comment-$q",nbsp($O["Comment"]));if(!is_view($O)){foreach(array("Engine","Collation")as$v)json_row("$v-$q",nbsp($O[$v]));foreach($tf+array("Auto_increment"=>0,"Rows"=>0)as$v=>$W){if($O[$v]!=""){$W=number_format($O[$v],0,'.',lang(236));json_row("$v-$q",($v=="Rows"&&$W&&($O["Engine"]=="InnoDB"||$O["Engine"]=="table")?"~ $W":$W));if(isset($tf[$v]))$tf[$v]+=($O["Engine"]!="InnoDB"||$v!="Data_free"?$O[$v]:0);}elseif(array_key_exists($v,$O))json_row("$v-$q");}}}foreach($tf
as$v=>$W)json_row("sum-$v",number_format($W,0,'.',lang(236)));json_row("");}else{foreach(count_tables($b->databases())as$j=>$W)json_row("tables-".js_escape($j),$W);json_row("");}exit;}else{$Bf=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Bf&&!$k&&!$_POST["search"]){$E=true;$rd="";if($u=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$E=truncate_tables($_POST["tables"]);$rd=lang(237);}elseif($_POST["move"]){$E=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$rd=lang(238);}elseif($_POST["copy"]){$E=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$rd=lang(239);}elseif($_POST["drop"]){if($_POST["views"])$E=drop_views($_POST["views"]);if($E&&$_POST["tables"])$E=drop_tables($_POST["tables"]);$rd=lang(240);}elseif($u!="sql"){$E=($u=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$rd=lang(241);}elseif($_POST["tables"]&&($E=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($G=$E->fetch_assoc())$rd.="<b>".h($G["Table"])."</b>: ".h($G["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$rd,$E);}page_header(($_GET["ns"]==""?lang(23).": ".h(DB):lang(81).": ".h($_GET["ns"])),$k,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3>".lang(242)."</h3>\n";$Af=tables_list();if(!$Af)echo"<p class='message'>".lang(6)."\n";else{echo"<form action='' method='post'>\n","<p>".lang(243).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(37)."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.lang(101),'<td>'.lang(244),'<td>'.lang(77),'<td>'.lang(245),'<td>'.lang(246),'<td>'.lang(247),'<td>'.lang(93),'<td>'.lang(248),(support("comment")?'<td>'.lang(95):''),"</thead>\n";foreach($Af
as$_=>$S){$jg=($S!==null&&!eregi("table",$S));echo'<tr'.odd().'><td>'.checkbox(($jg?"views[]":"tables[]"),$_,in_array($_,$Bf,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($_).'" title="'.lang(27).'">'.h($_).'</a>';if($jg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($_).'" title="'.lang(28).'">'.lang(100).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($_).'" title="'.lang(26).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(29)),"Index_length"=>array("indexes",lang(104)),"Data_free"=>array("edit",lang(30)),"Auto_increment"=>array("auto_increment=1&create",lang(29)),"Rows"=>array("select",lang(26)),)as$v=>$y)echo($y?"<td align='right'><a href='".h(ME."$y[0]=").urlencode($_)."' id='$v-".h($_)."' title='$y[1]'>?</a>":"<td id='$v-".h($_)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($_)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(222,count($Af)),"<td>".nbsp($u=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$v)echo"<td align='right' id='sum-$v'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$u)?($u!="sqlite"?"<input type='submit' value='".lang(249)."'> ":"")."<input type='submit' name='optimize' value='".lang(250)."'> ":"").($u=="sql"?"<input type='submit' name='check' value='".lang(251)."'> <input type='submit' name='repair' value='".lang(252)."'> ":"")."<input type='submit' name='truncate' value='".lang(253)."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".lang(79)."'".confirm("formChecked(this, /tables|views/)").">\n";$i=(support("scheme")?schemas():$b->databases());if(count($i)!=1&&$u!="sqlite"){$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(254).": ",($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'">')," <input type='submit' name='move' value='".lang(255)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(256)."'>":""),"\n";}echo"<input type='hidden' name='token' value='$Q'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(147)."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.lang(180)."</a>\n";if(support("routine")){echo"<h3>".lang(116)."</h3>\n";$Te=routines();if($Te){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(158).'<td>'.lang(90).'<td>'.lang(197)."<td>&nbsp;</thead>\n";odd('');foreach($Te
as$G){echo'<tr'.odd().'>','<th><a href="'.h(ME).($G["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($G["ROUTINE_NAME"]).'">'.h($G["ROUTINE_NAME"]).'</a>','<td>'.h($G["ROUTINE_TYPE"]),'<td>'.h($G["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($G["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($G["ROUTINE_NAME"]).'">'.lang(108)."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(196).'</a> ':'').'<a href="'.h(ME).'function=">'.lang(195)."</a>\n";}if(support("sequence")){echo"<h3>".lang(257)."</h3>\n";$df=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($df){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(158)."</thead>\n";odd('');foreach($df
as$W)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".lang(202)."</a>\n";}if(support("type")){echo"<h3>".lang(11)."</h3>\n";$T=types();if($T){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(158)."</thead>\n";odd('');foreach($T
as$W)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".lang(206)."</a>\n";}if(support("event")){echo"<h3>".lang(117)."</h3>\n";$H=get_rows("SHOW EVENTS");if($H){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(158)."<td>".lang(258)."<td>".lang(186)."<td>".lang(187)."</thead>\n";foreach($H
as$G){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($G["Name"]).'">'.h($G["Name"])."</a>","<td>".($G["Execute at"]?lang(259)."<td>".$G["Execute at"]:lang(188)." ".$G["Interval value"]." ".$G["Interval field"]."<td>$G[Starts]"),"<td>$G[Ends]";}echo"</table>\n";$Sb=$g->result("SELECT @@event_scheduler");if($Sb&&$Sb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Sb)."\n";}echo'<p><a href="'.h(ME).'event=">'.lang(185)."</a>\n";}if($Af)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();