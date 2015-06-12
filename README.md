# CodeIgniter Base Model
Its very easy. No need to change anything in Codeigniter. Here is the base model that I use on all of my CodeIgniter projects. Paste My_Model.php file in core folder in application This provides all of the basic CRUD functionality I need just by extending my models to the MY_Model class and defining a few variables:
```php
class Company_model extends MY_Model {
    
    protected $table_name = 'my0_company';
  	protected $primary_key = 'id';

  }
```
* __table_name__  -The _name_ of the table the model should execute queries on.
* __primary_key__  -The _primary key_ of the table __id__.

