Mini MVC
========
**โครงสร้างเว็บแบบ MVC (mini)**
+ มีแยกโมดูล
+ แยกธีม
+ แยก controller
+ แยก view


Config
------
```php
# connect db
define('host','localhost');
define('dbname','hospital_db');
define('username','root');
define('password','');

# theme
define('_theme','bs-siminta-admin');
```

Usage
-----
### ฐานข้อมูล
```php
# select 
$db->select('table')->one();

# select one record
$db->select('table',['field1','field2'])->where('id=1')->one();

# select all record
$db->select('table',['field1','field2'])->where('id=1')->all();

# Insert
$db->insert('table',['p_id'=>$_POST['p_id'],
		  'p_name'=>$_POST['p_name'],);

# Update
$res= $db->update('patient',['p_name'=>$_POST['p_name']],["p_id = '{$_GET['id']}'"]);

# Delete
if($db->delete('patient',["p_id = '{$_GET['id']}'"])){
        $db->redirect('patient/index');
      }

```
