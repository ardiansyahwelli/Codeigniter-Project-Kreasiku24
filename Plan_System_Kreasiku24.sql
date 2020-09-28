-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 03:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'administrator', 'admin', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_fields` (
`field_id` int(11) NOT NULL,
  `link_table` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `required` tinyint(11) NOT NULL,
  `show_on_table` tinyint(4) NOT NULL DEFAULT '1',
  `field_column` tinyint(4) NOT NULL DEFAULT '1',
  `field_row` tinyint(4) NOT NULL,
  `chain_table` varchar(255) NOT NULL,
  `chain_table_field` varchar(255) NOT NULL,
  `ajax_table` varchar(255) NOT NULL,
  `ajax_field` varchar(255) NOT NULL,
  `ajax_call_id` varchar(255) NOT NULL,
  `ajax_type` varchar(255) NOT NULL,
  `sorting` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=latin1 COMMENT='tbl_students_field';

--
-- Dumping data for table `tbl_fields`
--

INSERT INTO `tbl_fields` (`field_id`, `link_table`, `label`, `field`, `type`, `required`, `show_on_table`, `field_column`, `field_row`, `chain_table`, `chain_table_field`, `ajax_table`, `ajax_field`, `ajax_call_id`, `ajax_type`, `sorting`, `status`) VALUES
(8, 'tbl_user', 'User Name', 'username', 'text', 1, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(10, 'tbl_user', 'Password', 'password', 'text', 1, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(11, 'tbl_user', 'Age', 'age', 'text', 0, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(68, 'tbl_modules', 'Add Top Menu', 'left_menu', 'date', 0, 0, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(60, 'tbl_user', 'Access Module', 'access_module', 'multiple-select', 0, 1, 1, 0, 'tbl_modules', 'module', '', '', '', 'onchange', 0, 1),
(61, 'tbl_modules', 'Module', 'module', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(62, 'tbl_modules', 'Controller', 'controller', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(63, 'tbl_modules', 'Module Table', 'table_name', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(64, 'tbl_modules', 'Table Primary Key', 'table_id', 'text', 0, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(65, 'tbl_modules', 'Sorting', 'sorting', 'text', 0, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(93, 'tbl_employee', 'name', 'name', 'text', 0, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(80, 'tbl_modules', 'Column', 'column', 'number', 1, 0, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(111, 'tbl_project', 'City', 'city', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(109, 'tbl_project', 'Fullname', 'fullname', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(110, 'tbl_project', 'Address', 'address', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(112, 'tbl_inventory', 'Name', 'name', 'text', 1, 0, 1, 0, '', '', '', '', '', 'onchange', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields_copy`
--

CREATE TABLE IF NOT EXISTS `tbl_fields_copy` (
`field_id` int(11) NOT NULL,
  `link_table` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `required` tinyint(11) NOT NULL,
  `show_on_table` tinyint(4) NOT NULL DEFAULT '1',
  `field_column` tinyint(4) NOT NULL DEFAULT '1',
  `field_row` tinyint(4) NOT NULL,
  `chain_table` varchar(255) NOT NULL,
  `chain_table_field` varchar(255) NOT NULL,
  `ajax_table` varchar(255) NOT NULL,
  `ajax_field` varchar(255) NOT NULL,
  `ajax_call_id` varchar(255) NOT NULL,
  `ajax_type` varchar(255) NOT NULL,
  `sorting` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1 COMMENT='tbl_students_field';

--
-- Dumping data for table `tbl_fields_copy`
--

INSERT INTO `tbl_fields_copy` (`field_id`, `link_table`, `label`, `field`, `type`, `required`, `show_on_table`, `field_column`, `field_row`, `chain_table`, `chain_table_field`, `ajax_table`, `ajax_field`, `ajax_call_id`, `ajax_type`, `sorting`, `status`) VALUES
(8, 'tbl_user', 'User Name', 'username', 'text', 1, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(10, 'tbl_user', 'Password', 'password', 'text', 1, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(11, 'tbl_user', 'Age', 'age', 'text', 0, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(68, 'tbl_modules', 'Add To Left Menu', 'left_menu', 'select', 0, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(60, 'tbl_user', 'Access Module', 'access_module', 'multiple-select', 0, 1, 1, 0, 'tbl_modules', 'module', '', '', '', 'onchange', 0, 1),
(61, 'tbl_modules', 'Module', 'module', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(62, 'tbl_modules', 'Controller', 'controller', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(63, 'tbl_modules', 'Module Table', 'table_name', 'text', 1, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(64, 'tbl_modules', 'Table Primary Key', 'table_id', 'text', 0, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(65, 'tbl_modules', 'Sorting', 'sorting', 'text', 0, 1, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(91, 'tbl_wages', 'Wage Items', 'wage_item', 'text', 0, 1, 3, 0, '', '', '', '', '', 'onchange', 0, 1),
(92, 'tbl_wages', 'Wages Time', 'wage_time', 'time', 1, 1, 1, 1, '', '', '', '', '', 'onchange', 0, 1),
(93, 'tbl_employee', 'name', 'name', 'text', 0, 1, 1, 0, '', '', '', '', '', '', 0, 1),
(89, 'tbl_wages', 'wages name', 'wage_name', 'text', 1, 1, 1, 2, '', '', '', '', '', 'onchange', 0, 1),
(90, 'tbl_wages', 'Wage Desc', 'wage_desc', 'text', 0, 1, 2, 0, '', '', '', '', '', 'onchange', 0, 1),
(80, 'tbl_modules', 'Column', 'column', 'number', 0, 0, 1, 0, '', '', '', '', '', 'onchange', 0, 1),
(94, 'tbl_client', 'Client Name', 'client_name', 'text', 0, 1, 1, 2, '', '', '', '', '', 'onchange', 0, 1),
(95, 'tbl_client', 'Client Email', 'client_email', 'text', 0, 1, 1, 1, '', '', '', '', '', 'onchange', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_option`
--

CREATE TABLE IF NOT EXISTS `tbl_field_option` (
`field_option_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_option`
--

INSERT INTO `tbl_field_option` (`field_option_id`, `field_id`, `value`, `status`) VALUES
(35, 74, 'Female', 0),
(34, 74, 'Male', 0),
(30, 41, 'yes', 0),
(31, 41, 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE IF NOT EXISTS `tbl_inventory` (
`id` bigint(20) NOT NULL,
  `last_modified_date` datetime NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `last_modified_date`, `create_date`, `status`, `name`) VALUES
(1, '0000-00-00 00:00:00', '2020-09-27 10:12:36', 1, 'Bike Cycle');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modules`
--

CREATE TABLE IF NOT EXISTS `tbl_modules` (
`module_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `module` text NOT NULL,
  `controller` text NOT NULL,
  `table_name` text NOT NULL,
  `table_id` text NOT NULL,
  `sorting` text NOT NULL,
  `left_menu` text NOT NULL,
  `column` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_modules`
--

INSERT INTO `tbl_modules` (`module_id`, `status`, `module`, `controller`, `table_name`, `table_id`, `sorting`, `left_menu`, `column`) VALUES
(41, 0, 'Project_modul', 'Project_controller', 'tbl_project', 'id', 'id', 'Project', 1),
(42, 0, 'Inventory', 'Inventory', 'tbl_inventory', 'id', 'id', 'Inventory', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_creator`
--

CREATE TABLE IF NOT EXISTS `tbl_module_creator` (
`creator_id` int(11) NOT NULL,
  `controller_code` text NOT NULL,
  `model_code` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_module_creator`
--

INSERT INTO `tbl_module_creator` (`creator_id`, `controller_code`, `model_code`, `status`) VALUES
(1, '<?php if ( ! defined(''BASEPATH'')) exit(''No direct script access allowed'');class Sample_c extends CI_Controller {   public $dataSet=array(''module''=>''Sample_c'',''model''=>''Sample_c_model'',''fieldTable''=>''tbl_fields'',''valueTable''=>''put_table_name'',''optionTable''=>''tbl_field_option'',''unique_id''=>''put_table_id'');    public function index(){     $data = $this->dataSet;    $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';     $data[''title'']       = ''Sample_t List'';    $data[''subtitle'']    = ''Enter Sample_t Information'';    $data[''add_button'']  = ''Add New Sample_t'';    $data[''add_title'']   = ''Add New Sample_t'';    $data[''edit_title'']  = ''Edit Sample_t'';    $data[''delete_msg'']  = ''Sample_t has been deleted successfully!'';    $data[''active_msg'']  = ''Sample_t has been activated successfully!'';    $data[''deactive_msg'']= ''Sample_t has been de-activated successfully!'';        $this->load->view(''section/header.php'',$data);    $this->load->view(''section/menu.php'',$data);    $this->load->model($this->dataSet[''model'']);    $model = $this->dataSet[''model''];    $this->$model->index($data);    $this->load->view($this->dataSet[''module''].''/index'',$data);    $this->load->view(''section/footer.php'');  }  public function add(){      $data = $this->dataSet;    $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';      $data[''title'']= ''Add New Sample_t'';    $data[''subtitle'']= ''Enter Sample_t Information'';    $data[''message'']= ''New Sample_t has been created successfully!'';    $this->load->model($this->dataSet[''module''].''_model'');      $this->load->view(''section/header.php'',$data);      $this->load->view(''section/menu.php'',$data);    $model = $this->dataSet[''model''];    $this->$model->add($data);    $this->load->view($this->dataSet[''module''].''/add-student.php'');    $this->load->view(''section/footer.php'');  }  public function edit(){ $args = func_get_args();      if(count($args[0])==0){ show_404(''log_error'');}else{      $data = $this->dataSet;    $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';      $data[''edit_id'']=$args[0];      $data[''title'']= ''Edit Sample_t'';    $data[''subtitle'']= ''Update Sample_t Information'';    $data[''message'']= ''Sample_t has been updated successfully!'';    $this->load->model($this->dataSet[''module''].''_model'');      $this->load->view(''section/header.php'',$data);      $this->load->view(''section/menu.php'',$data);    $model = $this->dataSet[''model''];    $this->$model->update($data);    $this->load->view($this->dataSet[''module''].''/edit-student.php'');    $this->load->view(''section/footer.php'');    }  }  public function field_sort(){    if(isset($_REQUEST[''argument''])){      unset($_REQUEST[''argument''][0]);      $arguments = $_REQUEST[''argument''];      foreach($arguments as $column=>$argument){          $field_ids = explode(",",$argument);          foreach($field_ids as $key=>$field_id){ $sort = $key+1;            $this->db->query("UPDATE `tbl_fields` SET `field_column`=".$column.",`field_row`=".$sort." WHERE `field_id`=".$field_id);          }      }    }  }  public function setting(){      $data = $this->dataSet;       $args = func_get_args();    $data[''add_title''] = ''Add Sample_t Admission Field'';    $data[''edit_title''] = ''Edit Sample_t Admission Field'';      $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';      $data[''title'']= ucfirst($this->dataSet[''module'']).'' Controls'';      $this->load->view(''section/header.php'',$data);      $this->load->view(''section/menu.php'',$data);    $this->load->view($this->dataSet[''module''].''/controls/setting.php'');    $this->load->view(''section/footer.php'');  }  public function chain_table_fields(){      $data = $this->dataSet;       $args = func_get_args();      $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';    $this->load->view($this->dataSet[''module''].''/controls/chain_table_fields.php'');  }  public function control_type(){      $data = $this->dataSet;       $args = func_get_args();      $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';    $this->load->view($this->dataSet[''module''].''/controls/control_type.php'');  }  public function control_type1(){      $data = $this->dataSet;       $args = func_get_args();      $data[''base_url''] = $this->config->base_url().''index.php/''.$this->dataSet[''module''].''/'';    $this->load->view($this->dataSet[''module''].''/controls/control_type1.php'');  }}/* End of file welcome.php *//* Location: ./application/controllers/welcome.php */', '<?php\r\nclass Sample_model extends CI_Model{\r\n	public function index($datas){ extract($datas);\r\n			if(isset($_POST[''delete_id''])){\r\n			  mysql_query("DELETE FROM $valueTable WHERE $unique_id=".$_POST[''delete_id'']);\r\n			  $_SESSION[''msg''] = success($delete_msg);\r\n			}\r\n			if(isset($_POST[''active_id''])){\r\n			  mysql_query("UPDATE $valueTable SET status=1 WHERE $unique_id=".$_POST[''active_id'']);\r\n			  $_SESSION[''msg''] = success($active_msg);\r\n			}\r\n			if(isset($_POST[''inactive_id''])){\r\n			  mysql_query("UPDATE $valueTable SET status=0 WHERE $unique_id=".$_POST[''inactive_id'']);\r\n			  $_SESSION[''msg''] = success($deactive_msg);\r\n			}\r\n	}\r\n	 public function add($datas){ extract($datas);\r\n		 	$msg='''';\r\n			$fields = $types = array();\r\n			$select = mysql_query("SELECT * FROM $fieldTable WHERE link_table=''".$valueTable."'' and status=1"); while($fet = mysql_fetch_object($select)){ $fields[] = $fet->field; $types[] = $fet->type;}\r\n			if(isset($_POST[''SaveStudent''])){ $fieldsVal=array();\r\n			   foreach($fields as $key=>$field){\r\n				   if($types[$key]==''file''){  \r\n					if($_FILES[$field][''name'']!=''''){\r\n					$file = rand(100,10).time().$_FILES[$field][''name''];\r\n					move_uploaded_file($_FILES[$field][''tmp_name''],''upload/''.$file);\r\n					$fieldsVal[] = "$field=''".mysql_real_escape_string($file)."''";\r\n					}\r\n				   }elseif($types[$key]==''radio''){  \r\n					$fieldsVal[] = "$field=''".implode('','',$_POST[$field])."''";\r\n					\r\n				   }elseif($types[$key]==''checkbox''){\r\n					$fieldsVal[] = "$field=''".implode('','',$_POST[$field])."''";\r\n					\r\n				   }else{\r\n					$fieldsVal[] = "$field=''".mysql_real_escape_string($_POST[$field])."''";\r\n				   }\r\n			   }\r\n			   mysql_query("INSERT INTO $valueTable set ".implode('','',$fieldsVal));\r\n			   $_SESSION[''msg''] = success($message);\r\n			   header("location:".$base_url);\r\n			} \r\n	 }\r\n	 public function update($datas){ extract($datas);\r\n		    $msg='''';\r\n			$fields = $types = array();\r\n			$select = mysql_query("SELECT * FROM $fieldTable WHERE link_table=''".$valueTable."'' and status=1"); while($fet = mysql_fetch_object($select)){ $fields[] = $fet->field; $types[] = $fet->type;}\r\n			if(isset($_POST[''UpdateStudent''])){ $fieldsVal=array();\r\n			   foreach($fields as $key=>$field){\r\n				   if($types[$key]==''file''){  \r\n					if($_FILES[$field][''name'']!=''''){\r\n					$file = rand(100,10).time().$_FILES[$field][''name''];\r\n					move_uploaded_file($_FILES[$field][''tmp_name''],''upload/''.$file);\r\n					$fieldsVal[] = "$field=''".mysql_real_escape_string($file)."''";\r\n					}else{\r\n					 $file = $_POST[''_''.$field];\r\n					 $fieldsVal[] = "$field=''".mysql_real_escape_string($file)."''";\r\n					}\r\n				   }elseif($types[$key]==''radio''){  \r\n					$fieldsVal[] = "$field=''".implode('','',$_POST[$field])."''";\r\n					\r\n				   }elseif($types[$key]==''checkbox''){\r\n					$fieldsVal[] = "$field=''".implode('','',$_POST[$field])."''";\r\n					\r\n				   }else{\r\n					$fieldsVal[] = "$field=''".mysql_real_escape_string($_POST[$field])."''";\r\n				   }\r\n			   }\r\n			   mysql_query("UPDATE $valueTable SET ".implode('','',$fieldsVal)." WHERE $unique_id=".$edit_id);\r\n			   $_SESSION[''msg''] = success($message);\r\n			   header("location:".$base_url);\r\n			}\r\n	 }\r\n}\r\n?>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
`id` bigint(20) NOT NULL,
  `last_modified_date` datetime NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `last_modified_date`, `create_date`, `status`, `fullname`, `address`, `city`) VALUES
(6, '0000-00-00 00:00:00', '2020-09-27 10:05:06', 1, 'Indri Safitri', 'Jl. KP Utan Jaya No 26', 'Depok'),
(7, '0000-00-00 00:00:00', '2020-09-27 11:06:29', 1, 'Ardianysah Welli', 'Perumahan Parung permata indah', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `age` text NOT NULL,
  `access_module` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `status`, `username`, `password`, `age`, `access_module`) VALUES
(1, 1, 'sambath', 'sambath', '25', 'Projects');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_privilege`
--

CREATE TABLE IF NOT EXISTS `tbl_user_privilege` (
`privilege_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitors`
--

CREATE TABLE IF NOT EXISTS `tbl_visitors` (
`visitor_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `visitorid` text NOT NULL,
  `name` text NOT NULL,
  `id_proof_name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `coming_from` text NOT NULL,
  `purpose_of_visit` text NOT NULL,
  `to_whom_meet` text NOT NULL,
  `vihicle_no` text NOT NULL,
  `time_in` text NOT NULL,
  `time_out` text NOT NULL,
  `security_sign` text NOT NULL,
  `others` text NOT NULL,
  `photo` text NOT NULL,
  `thumb` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visitors`
--

INSERT INTO `tbl_visitors` (`visitor_id`, `status`, `visitorid`, `name`, `id_proof_name`, `address`, `email`, `phone`, `coming_from`, `purpose_of_visit`, `to_whom_meet`, `vihicle_no`, `time_in`, `time_out`, `security_sign`, `others`, `photo`, `thumb`, `create_date`) VALUES
(1, 1, '201', 'bala', 'voter id', 'chennai', '32deva@gmail.com', '933495849545', 'Andimadam', 'join', 'Correspondance', '32', '10:00', '5:00', 'bala', 'test', '', '', '2015-01-31 18:30:00'),
(4, 1, '2', 'karthikeyan', 'voter id', 'Hyderabad', 'karthick.ap@gmail.com', '8015368910', 'Bangalore', 'Admission', 'HM', 'AP56', '9:00AM', '6:PM', 'Ram', '', 'upload/original/5d17443bcc27e6774b0b796595449bfc.jpg', 'upload/thumbs/5d17443bcc27e6774b0b796595449bfc.jpg', '2015-02-06 03:41:02'),
(5, 0, '3', 'shilpa', 'drivinglicence', '', 'shilpask100@gmail.com', '984553163890', 'Nelmangala', 'enqiry', 'principal', 'KA-52 4441', '10.02AM', '11.03AM', 'shilpa', '', '', '', '2015-02-06 04:33:49'),
(6, 1, '123', 'name', 'firstname secondname', 'koramangala', 'firstname@gmail.com', '987654321', 'bangalore', 'enquiry', 'Rajan', '4567', '10.30', '', 'kumar', '', '', '', '2015-02-06 16:26:32'),
(7, 0, '4477', 'sundhar', 'pancnard', 'chennai', 'sundharmc@gmail.com', '8675834502', 'USA', 'client visit', 'surya', '447644', '8.am', '8 pm', 'bharat', 'bala', 'upload/original/b821f9dfe27a7a7d9b71ab3967d2c31d.jpg', 'upload/thumbs/b821f9dfe27a7a7d9b71ab3967d2c31d.jpg', '2015-02-08 17:48:08'),
(8, 1, '789', 'bbbb', '2020', 'koramangala', 'email@email.com', '8907896780', 'Pondy', 'Enquiry', 'Kumar', '7654 KA 01', '10:30', '', 'Mani', '', '', '', '2015-02-11 14:34:02'),
(9, 0, '001', 'Xerox', 'Passport', '#224/4,5th A main,16th Cross \nJ.P.Nagar 4th phase Bangalore', 'abpalanikarthik@gmail.com', '9994784068', 'Bangalore', 'Enquiry', 'Principal ', 'KA0345', '10:00AM', '12:30PM', 'Kumar', '', 'upload/original/a7010f9c3f8ffc165cafb90da49dccae.jpg', 'upload/thumbs/a7010f9c3f8ffc165cafb90da49dccae.jpg', '2015-02-16 16:40:23'),
(10, 0, '', 'ramya', 'voterid', 'nelmangala', 'ramya123@gmail.com', '9845531693', 'nelmangala', 'enquiry', 'principal', 'KA523125', '10:10am', '', 'ramya', '', '', '', '2015-02-20 04:40:26'),
(11, 0, '', 'ramya', 'voterid', 'nelmangala', 'ramya123@gmail.com', '9845531693', 'nelmangala', 'enquiry', 'principal', 'KA523125', '10:10am', '', 'ramya', '', '', '', '2015-02-20 04:41:43'),
(12, 0, '', '123', 'bre', 'koramangala', 'bre@gmail.com', '98765423', 'chennai', 'to meet kumar', 'kumar', '4534', '09:30', '', 'stalin', '', '', '', '2015-02-20 14:48:34'),
(13, 0, '', 'test1', 'test', '123 south street ', 'test11@gmail.com', '987867889', 'bangalore', 'enquiry', 'principal', 'KA523125', '10:10am', '', 'ramya', '123', '', '', '2015-02-25 14:59:52'),
(14, 0, '', 'test1', 'test', '123 south', 'test12@gmail.com', '987867889', 'bangalore', 'enquiry', 'principal', 'KA523125', '10:10am', '', 'test', '', '', '', '2015-03-04 16:46:04'),
(15, 0, '', 'karthee', 'PAN', '', 'karthee@', '9902084004', 'chennai', 'training', 'HR', 'TN89', '13:30', '', 'pop', '', '', '', '2015-03-24 08:02:46'),
(16, 0, '', 'srinivas', '123', '1923 south end c main 9th blk jayanagar east bangalore', 'srinivas.5189@gmail.com', '8026591098', 'chennai', 'enquiry', 'principal', 'KA523125', '22:46', '', 'ramya', ' visitor', 'upload/original/7cf99f99914e927d86b01838f9efdfbb.jpg', 'upload/thumbs/7cf99f99914e927d86b01838f9efdfbb.jpg', '2015-03-29 17:17:31'),
(17, 0, '', 'Ram', 'PAN', 'chennai', 'ravielanji@yahoo.com', '9990909012', 'Bangalore', 'Admission', 'HeadMaster', 'NIL', '19:07', '', 'x123', '', '', '', '2015-04-06 13:38:44'),
(18, 0, '', 'test1', 'test', '1923 sou', 'test117@gmail.com', '9878678899', 'bangalore', 'enquiry', 'principal', 'KA523125', '23:17', '', 'ramya', ' visitor', '', '', '2015-04-07 17:48:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
 ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `tbl_fields_copy`
--
ALTER TABLE `tbl_fields_copy`
 ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `tbl_field_option`
--
ALTER TABLE `tbl_field_option`
 ADD PRIMARY KEY (`field_option_id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_modules`
--
ALTER TABLE `tbl_modules`
 ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `tbl_module_creator`
--
ALTER TABLE `tbl_module_creator`
 ADD PRIMARY KEY (`creator_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_privilege`
--
ALTER TABLE `tbl_user_privilege`
 ADD PRIMARY KEY (`privilege_id`);

--
-- Indexes for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
 ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `tbl_fields_copy`
--
ALTER TABLE `tbl_fields_copy`
MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `tbl_field_option`
--
ALTER TABLE `tbl_field_option`
MODIFY `field_option_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_modules`
--
ALTER TABLE `tbl_modules`
MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_module_creator`
--
ALTER TABLE `tbl_module_creator`
MODIFY `creator_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user_privilege`
--
ALTER TABLE `tbl_user_privilege`
MODIFY `privilege_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
