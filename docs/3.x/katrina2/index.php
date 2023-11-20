<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katrina ORM - Solital Framework</title>
  <link rel="shortcut icon" href="../img/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styles/default.css">
  <link rel="stylesheet" href="../css/styles/atom-one-dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/highlight.pack.js"></script>
  <script src="../js/scripts.js"></script>
  <script>hljs.highlightAll();</script>

  
  

  
    <script src="../search/main.js"></script>
  

  

</head>

<body>
  <div class="dashboard">
    <div class="dashboard-nav">
      <header class="mb-4">
        <a href="#!" class="menu-toggle">
          <i class="fas fa-bars"></i>
        </a>

        <a href="#" class="brand-logo">
          <img src="../img/solital-logo-2-sm-trans-2.png" alt="Solital Framework">
        </a>
      </header>

      <nav class="dashboard-nav-list">
        
        
  <a href=".." class="dashboard-nav-item ">
    Starting
  </a>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle ">
    Upgrade
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../release-notes/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Release Notes
      </a>
    
      <a href="../upgrade/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Upgrade Guide
      </a>
    
  </div>
</div>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle ">
    Settings
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../installation/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Installing
      </a>
    
      <a href="../env/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Environment variables
      </a>
    
      <a href="../yaml-files/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> YAML Files
      </a>
    
      <a href="../helpers/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Helpers
      </a>
    
  </div>
</div>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle ">
    Routers
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../routes/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Routes
      </a>
    
      <a href="../middleware/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Middleware
      </a>
    
      <a href="../url/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> URL
      </a>
    
      <a href="../events/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Events
      </a>
    
      <a href="../input/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Input and params
      </a>
    
  </div>
</div>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle ">
    Components
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../vinci/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Vinci Console
      </a>
    
      <a href="../cache/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Cache
      </a>
    
      <a href="../container/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Dependency Container
      </a>
    
      <a href="../http-client/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> HTTP Client
      </a>
    
      <a href="../wolf/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Wolf Template
      </a>
    
  </div>
</div>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle ">
    Resources
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../date/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Date and time
      </a>
    
      <a href="../filesystem/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> File System
      </a>
    
      <a href="../json/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> JSON
      </a>
    
      <a href="../log/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Logger
      </a>
    
      <a href="../mail/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Mailer
      </a>
    
      <a href="../session-cookie/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Session and Cookie
      </a>
    
      <a href="../validate/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Validation
      </a>
    
      <a href="../messages/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Messages
      </a>
    
      <a href="../queue/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Queue
      </a>
    
  </div>
</div>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle ">
    Security
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../auth/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Authenticate
      </a>
    
      <a href="../crypt/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Cryptography
      </a>
    
      <a href="../csrf/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> CSRF Protection
      </a>
    
      <a href="../password/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Secure Password
      </a>
    
      <a href="../verify-domain/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Verify Domain
      </a>
    
      <a href="../forgot/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Recovery Password
      </a>
    
  </div>
</div>

        
        
<div class="dashboard-nav-dropdown">
  <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle active ">
    Database
  </a>

  <div class="dashboard-nav-dropdown-menu">
    
      <a href="../migrations/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Migrations
      </a>
    
      <a href="../seeders/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Seeders
      </a>
    
      <a href="../dump/" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Dump
      </a>
    
      <a href="./" class="dashboard-nav-dropdown-item text-black">
        <span class="text-danger" style="margin-right: 10px;">&#10140;</span> Katrina ORM
      </a>
    
  </div>
</div>

        
        
  <a href="../deploy/" class="dashboard-nav-item ">
    Deploy
  </a>

        
      </nav>
    </div>

    <div class="dashboard-app">
      <header class="dashboard-toolbar">
        <a href="#!" class="menu-toggle btn-menu"><i class="fas fa-bars"></i></a>
      </header>

      <div class="dashboard-content">
        <div class="container">

          <section class="container-fluid section">
            <div class="row">
              <div class="col-md-12 w-100">
                <h1 class="mt-4 font-weight-normal title-page">Katrina ORM</h1>
              </div>

              <div class="col-md-12 mt-3">
                

                <ul class="ml-5 mb-5">
                  
                    <li><a href="#version">Version</a></li>
                  
                  
                    <li><a href="#getting-started">Getting Started</a></li>
                  
                    <li><a href="#requirements">Requirements</a></li>
                  
                    <li><a href="#installation">Installation</a></li>
                  
                    <li><a href="#settings">Settings</a></li>
                  
                    <li><a href="#for-sqlite">For SQLite</a></li>
                  
                  
                    <li><a href="#initial-structure">Initial structure</a></li>
                  
                  
                    <li><a href="#changing-default-fields">Changing default fields</a></li>
                  
                  
                    <li><a href="#list">List</a></li>
                  
                    <li><a href="#using-inner-join">Using INNER JOIN</a></li>
                  
                    <li><a href="#custom-select">Custom SELECT</a></li>
                  
                    <li><a href="#select-inside-select">SELECT inside SELECT</a></li>
                  
                  
                    <li><a href="#functions">Functions</a></li>
                  
                    <li><a href="#insert">Insert</a></li>
                  
                    <li><a href="#update">Update</a></li>
                  
                    <li><a href="#delete">Delete</a></li>
                  
                  
                    <li><a href="#manipulating-tables">Manipulating tables</a></li>
                  
                    <li><a href="#create-a-new-table">Create a new table</a></li>
                  
                    <li><a href="#list-tables">List tables</a></li>
                  
                    <li><a href="#list-columns">List columns</a></li>
                  
                    <li><a href="#alter-table">Alter table</a></li>
                  
                    <li><a href="#adding-foreign-key">Adding foreign key</a></li>
                  
                    <li><a href="#truncate-table">Truncate table</a></li>
                  
                  
                    <li><a href="#procedure">Procedure</a></li>
                  
                  
                    <li><a href="#pagination">Pagination</a></li>
                  
                  
                    <li><a href="#custom-pagination">Custom Pagination</a></li>
                  
                  
                    <li><a href="#types-of-data">Types of data</a></li>
                  
                  
                </ul>

                
                <h2 id="version">Version</h2>
<p>Katrina ORM is currently at version <strong>2.x</strong>. To read documentation for previous versions choose one of the links below.</p>
<p><a href="http://localhost/Solital/documentation/website/docs/3.x/katrina1/">1.x</a></p>
<h2 id="getting-started">Getting Started</h2>
<p>Katrina ORM is a component that brings the object-oriented application development paradigm closer to the relational database paradigm. It helps to carry out common routines, such as the famous CRUD (create, read, edit and delete), in addition to having a data paging system.</p>
<p>Katrina ORM uses the Active Record standard to manipulate the data in the database.</p>
<h3 id="requirements">Requirements</h3>
<ul>
<li>PHP &gt;= 8.0</li>
<li>PDO extension enabled</li>
</ul>
<h3 id="installation">Installation</h3>
<p>Katrina ORM is already installed by default in Solital. But if you are going to install in another project, use the command below to download via Composer.</p>
<pre><code>composer require solital/katrina
</code></pre>
<h3 id="settings">Settings</h3>
<p>In Solital:</p>
<pre><code class="language-bash"># DATABASE CONFIG
DB_DRIVE=&quot;your_drive&quot;
DB_HOST=&quot;your_host&quot;
DB_NAME=&quot;your_database_name&quot;
DB_USER=&quot;your_user&quot;
DB_PASS=&quot;your_password&quot;
</code></pre>
<p>In another project:</p>
<pre><code class="language-php">define('DB_CONFIG', [
    'DRIVE' =&gt; 'your_drive',
    'HOST' =&gt; 'your_host',
    'DBNAME' =&gt; 'your_database_name',
    'USER' =&gt; 'your_user',
    'PASS' =&gt; 'your_password'
]);
</code></pre>
<h3 id="for-sqlite">For SQLite</h3>
<p>Some differences exist for connecting to an SQLite database. First, add an additional index called <code>SQLITE_DIR</code> in the <code>DB_CONFIG</code> constant. This constant must have the absolute path where the SQLite database file will be located.</p>
<p>Then, assign the value <code>sqlite</code> in the index <code>DRIVE</code>.</p>
<pre><code class="language-php">define('DB_CONFIG', [
    'DRIVE' =&gt; 'sqlite',
    'DBNAME' =&gt; 'your_database_name.db',
    'SQLITE_DIR' =&gt; '/path/to/file/'
]);
</code></pre>
<p>In Solital:</p>
<pre><code class="language-bash"># DATABASE CONFIG
DB_DRIVE=&quot;your_drive&quot;
DB_HOST=&quot;your_host&quot;
DB_NAME=&quot;your_database_name&quot;
DB_USER=&quot;your_user&quot;
DB_PASS=&quot;your_password&quot;
SQLITE_DIR=&quot;/path/to/file/&quot;
</code></pre>
<h2 id="initial-structure">Initial structure</h2>
<p>To initialize the Katrina ORM in your Model, just extend the <code>Katrina</code> class.</p>
<pre><code class="language-php">&lt;?php

namespace Solital\Components\Model;
use Katrina\Katrina;

class User extends Katrina
{

}
</code></pre>
<h2 id="changing-default-fields">Changing default fields</h2>
<p>By default, your class table name is the class name itself, and the primary key name is <code>id</code>.</p>
<p>You can change these settings using the <code>$table</code> and <code>$id</code> variables.</p>
<pre><code class="language-php">&lt;?php

namespace Solital\Components\Model;
use Katrina\Katrina;

class User extends Katrina
{
    /**
     *  @var null|string 
     */
    protected ?string $table = &quot;tb_user&quot;;

    /**
     *  @var null|string 
     */
    protected ?string $id = &quot;id_user&quot;;

    /**
     *  @var null|bool
     */
    protected bool $timestamp = false; 
}
</code></pre>
<h2 id="list">List</h2>
<p>To list all fields in the table, use <code>all()</code> as shown in the previous example.</p>
<pre><code class="language-php">User::all();
</code></pre>
<p>To list a single value, use <code>find()</code> method;</p>
<pre><code class="language-php">User::find(2);
</code></pre>
<p>Or, use the <code>select</code> method:</p>
<pre><code class="language-php">/** 
 * Fetch all
 */
User::select()-&gt;get();

/** 
 * Fetch only
 */
User::select(2)-&gt;get();

/** 
 * Fetch all with column name
 */
User::select(null, &quot;name&quot;)-&gt;get();
</code></pre>
<p><strong>WHERE</strong></p>
<p>If you need the <code>WHERE</code> clause, use <code>where()</code> method.</p>
<pre><code class="language-php">/** 
 * Katrina will look for a record that has `foo` in the table.
*/
User::select()-&gt;where(&quot;name&quot;, &quot;foo&quot;)-&gt;get();

/** 
 * Katrina will look for a record whose age is greater than 10.
*/
User::select()-&gt;where(&quot;age&quot;, 10, &quot;&gt;&quot;)-&gt;get();

/** 
 * Katrina will look for a record that is under the age of 10.
*/
User::select()-&gt;where(&quot;age&quot;, 10, &quot;&lt;&quot;)-&gt;get();
</code></pre>
<p><strong>LIKE and BETWEEN</strong></p>
<p>You can combine the <code>where</code> method with other search methods such as <code>like</code> and <code>between</code>.</p>
<pre><code class="language-php">/** 
 * With LIKE clause
*/
User::select()-&gt;where(&quot;name&quot;)-&gt;like(&quot;%foo%&quot;)-&gt;get();

/** 
 * With BETWEEN clause
*/
User::select()-&gt;where(&quot;age&quot;)-&gt;between(10, 22)-&gt;get();
</code></pre>
<p><strong>LIMIT</strong></p>
<pre><code class="language-php">User::select()-&gt;limit(0, 3)-&gt;get();
</code></pre>
<p><strong>ORDER BY</strong></p>
<pre><code class="language-php">User::select()-&gt;order(&quot;name&quot;)-&gt;get();
</code></pre>
<p>By default, the result will always return ascending. To return values descending, use <code>false</code> in the second parameter.</p>
<pre><code class="language-php">User::select()-&gt;order(&quot;name&quot;, false)-&gt;get();
</code></pre>
<p><strong>GROUP BY</strong></p>
<p>The <code>group by</code> SQL command requires the use of a function. Use the <code>group()</code> method together with the <code>Functions</code> class (see <a href="#functions">here</a>).</p>
<pre><code class="language-php">User::select(null, &quot;name, &quot; . Functions::count('*', 'qtd'))-&gt;group(&quot;name&quot;)-&gt;get();
</code></pre>
<h3 id="using-inner-join">Using INNER JOIN</h3>
<p>The <code>innerJoin()</code> method returns the values of two tables that have a foreign key.</p>
<p>The first parameter represents the table containing the foreign key. The second parameter represents the <code>id</code> of the foreign key.</p>
<pre><code class="language-php">User::select()
    -&gt;innerJoin(&quot;sobrenome&quot;, &quot;id_nome&quot;)
    -&gt;innerJoin(&quot;cpf&quot;, &quot;idUsu&quot;)
    -&gt;get();
</code></pre>
<p>If you need to use the <code>WHERE</code> clause, use the <code>where()</code> method.</p>
<pre><code class="language-php">User::select()
    -&gt;innerJoin(&quot;sobrenome&quot;, &quot;id_nome&quot;)
    -&gt;innerJoin(&quot;cpf&quot;, &quot;idUsu&quot;)
    -&gt;where(&quot;cpf_number&quot;, 123123123)
    -&gt;get();
</code></pre>
<h3 id="custom-select">Custom SELECT</h3>
<p>You can create a custom SELECT statement. To do this, use the function <code>customQuery</code>.</p>
<pre><code class="language-php">/** 
 * Fetch Only
 */
User::customQuery(&quot;SELECT * FROM users&quot;);

/** 
 * Fetch All
 */
User::customQuery(&quot;SELECT * FROM users&quot;, true);
</code></pre>
<h3 id="select-inside-select">SELECT inside SELECT</h3>
<p>Some SQL queries need to have multiple SELECTs, and sometimes those SELECTs are inside other SELECTs. If you need such a query, follow the example:</p>
<pre><code class="language-php">$sql = ORMTest::select(null, &quot;nome&quot;)-&gt;where(&quot;nome&quot;, &quot;brenno&quot;)-&gt;rawQuery();
$result =  ORMTest::select(null, &quot;nome, idade&quot;)-&gt;where(&quot;nome&quot;, Functions::subquery($sql))-&gt;get();

var_dump($result);
</code></pre>
<p>The <code>rawQuery()</code> function will return an SQL string (you can use a <code>var_dump()</code> to parse the returned string). Then, to use that SQL string inside another query, use the <code>subquery()</code> function.</p>
<h2 id="functions">Functions</h2>
<p>Katrina 2 supports SQL functions. You can use a function in an SQL query using the <code>Function</code> Method:</p>
<pre><code class="language-php">use Katrina\Functions\Functions;

User::select(null, &quot;name, &quot; . Functions::count('*', 'qtd'))-&gt;group(&quot;name&quot;)-&gt;get();
</code></pre>
<p>Below is a list of all the functions present in Katrina ORM:</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Aggregate Functions</th>
      <th scope="col">Date Functions</th>
      <th scope="col">Math Functions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span class="cmd-vinci">avg($value)</span></td>
      <td><span class="cmd-vinci">now()</span></td>
      <td><span class="cmd-vinci">abs($value)</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">count($expression = "*", $as = "")</span></td>
      <td><span class="cmd-vinci">curdate()</span></td>
      <td><span class="cmd-vinci">sum($value)</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">max($value)</span></td>
      <td><span class="cmd-vinci">date($value)</span></td>
      <td><span class="cmd-vinci">truncate($number, $decimal_places)</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">-</span></td>
      <td><span class="cmd-vinci">hour($value)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">-</span></td>
      <td><span class="cmd-vinci">month($value)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">-</span></td>
      <td><span class="cmd-vinci">datediff($first_date, $second_date)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">-</span></td>
      <td><span class="cmd-vinci">day($date = null)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">-</span></td>
      <td><span class="cmd-vinci">currentTimestamp()</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
  </tbody>
</table>

<h3 id="insert">Insert</h3>
<p>Katrina uses the ActiveRecord standard to insert and update database data. However, if you don't want to use the ActiveRecord pattern, you can use the <code>insert()</code> and <code>update()</code> methods.</p>
<p><strong>With ActiveRecord</strong></p>
<p>To insert data in the table, you must use the column name as a value. If your table has <code>name</code>, <code>age</code> and <code>email</code> columns, then the values should be used following that same sequence.</p>
<p>Note the code below:</p>
<pre><code class="language-php">$user = new User();
$user-&gt;name = &quot;Harvey Specter&quot;;
$user-&gt;age = 40;
$user-&gt;email = &quot;harvey@pearsonspecterlitt.com&quot;;
$user-&gt;save();
</code></pre>
<p><strong>With the <code>insert</code> method</strong></p>
<p>To save data, you must pass an array in which the keys will be the columns of the table. The values of these keys will be inserted into the database.</p>
<pre><code class="language-php">User::insert([
    'name' =&gt; 'Harvey Specter',
    'age' =&gt; 40,
    'email' =&gt; 'harvey@pearsonspecterlitt.com'
]);
</code></pre>
<p>If you want to retrieve the last ID entered, use the <code>lastId()</code> method.</p>
<pre><code class="language-php">$res = User::insert([
    'name' =&gt; 'Harvey Specter',
    'age' =&gt; 40,
    'email' =&gt; 'harvey@pearsonspecterlitt.com'
])-&gt;lastId();

var_dump($res);
</code></pre>
<h3 id="update">Update</h3>
<p><strong>With ActiveRecord</strong></p>
<p>The process for updating a record in the table is very similar to inserting a record. For that you must use the <code>find()</code> method. The <code>find()</code> method is to indicate which record you want to update.</p>
<pre><code class="language-php">$user = User::find(2);
$user-&gt;name = &quot;Harvey Specter&quot;;
$user-&gt;age = 42;
$user-&gt;email = &quot;harvey@specterlitt.com&quot;;
$user-&gt;save();
</code></pre>
<p><strong>With the <code>update</code> method</strong></p>
<p>The process for updating a value in the database using the <code>update</code> method is similar to using the <code>insert</code> method. The difference is that you will use the <code>where</code> method to define the values that will be updated. And to save those changes, the <code>saveUpdate</code> method must be present.</p>
<pre><code class="language-php">User::update([
    'name' =&gt; 'Harvey Specter',
    'age' =&gt; 42,
    'email' =&gt; 'harvey@pearsonspecterlitt.com'
])-&gt;where('id', 1)-&gt;saveUpdate();
</code></pre>
<h3 id="delete">Delete</h3>
<p>To delete a record from the table, use the <code>delete()</code> method.</p>
<pre><code class="language-php">User::delete(&quot;id = 2&quot;);
</code></pre>
<h2 id="manipulating-tables">Manipulating tables</h2>
<h3 id="create-a-new-table">Create a new table</h3>
<p>The <code>createTable()</code> method starts opening the table. After inserting the fields and data types that the tables will have, use <code>closeTable()</code> to close the table. For a better understanding see the syntax below.</p>
<pre><code class="language-php">User::createTable(&quot;your_table_name&quot;)
    /* Fields and table type */
    -&gt;int(&quot;id_user&quot;)-&gt;primary()-&gt;increment()
    -&gt;varchar(&quot;name&quot;, 20)-&gt;unique()-&gt;notNull()-&gt;default(&quot;specter&quot;)
    -&gt;int(&quot;age&quot;, 3)-&gt;unsigned()-&gt;notNull()
    -&gt;varchar(&quot;email&quot;, 30)-&gt;default(&quot;harvey.specter@gmail.com&quot;)-&gt;notNull()
    -&gt;varchar(&quot;profession&quot;, 40)
    -&gt;constraint(&quot;dev_cons_fk&quot;)-&gt;foreign(&quot;type&quot;)-&gt;references(&quot;dev&quot;, &quot;iddev&quot;)
    /* Close the command to create the table */
    -&gt;closeTable();
</code></pre>
<p><strong>For POSTGRESQL</strong></p>
<p>Postgresql doesn't natively support the <code>AUTO_INCREMENT</code> command. An alternative is to use the <code>SERIAL</code> command. So, if you are going to create a table using Postgresql as a database, use the <code>serial()</code> method.</p>
<pre><code class="language-php">User::createTable(&quot;your_table_name&quot;)
    -&gt;serial('id_user')-&gt;primary()
    # ...
</code></pre>
<h3 id="list-tables">List tables</h3>
<p>To have a list of all the tables in your database, use the <code>listTables()</code> method.</p>
<pre><code class="language-php">User::listTables();
</code></pre>
<h3 id="list-columns">List columns</h3>
<p>To list the columns of a table, use the <code>describeTable()</code> method passing as a parameter the name of your table.</p>
<pre><code class="language-php">User::describeTable('your_table');
</code></pre>
<h3 id="alter-table">Alter table</h3>
<p>The <code>alter()</code> method performs the procedures of adding, changing and deleting a field from the database table.</p>
<p><strong>Add new field</strong></p>
<p>Use <code>add()</code> method together with the data type to add a new field.</p>
<pre><code class="language-php">(new User)-&gt;alter(&quot;your_table&quot;)-&gt;varchar(&quot;username&quot;, 20)-&gt;add();
</code></pre>
<p><strong>Drop column</strong></p>
<p>Use the <code>drop()</code> method to delete a column from the table.</p>
<pre><code class="language-php">(new User)-&gt;alter(&quot;your_table&quot;)-&gt;drop(&quot;username&quot;);
</code></pre>
<p><strong>Modify column</strong></p>
<p>Use the modify SQL with the <code>modify()</code> method.</p>
<pre><code class="language-php">(new User)-&gt;alter(&quot;your_table&quot;)-&gt;varchar(&quot;name&quot;, 100)-&gt;modify();
</code></pre>
<p><strong>Rename table</strong></p>
<p>Use the <code>rename()</code> method to rename a database table.</p>
<pre><code class="language-php">(new User)-&gt;alter(&quot;your_table_name&quot;)-&gt;rename(&quot;new_table_name&quot;);
</code></pre>
<h3 id="adding-foreign-key">Adding foreign key</h3>
<p>To add a foreign key to an already created table, use the <code>constraint()</code> method to add a constraint; <code>foreign()</code> to inform the column and <code>references()</code> to refer to the table.</p>
<pre><code class="language-php">(new User)-&gt;alter(&quot;your_table&quot;)-&gt;constraint(&quot;dev_cons_fk&quot;)-&gt;foreign(&quot;type&quot;)-&gt;references(&quot;dev&quot;, &quot;iddev&quot;);
</code></pre>
<h3 id="truncate-table">Truncate table</h3>
<p>To use the sql truncate command, use the <code>truncate()</code> method.</p>
<pre><code class="language-php">(new User)-&gt;truncate(&quot;your_table&quot;);
</code></pre>
<p>By default, the database checks the table's foreign key and locks the truncate command. To disable foreign key verification, enter <code>true</code> as a parameter.</p>
<pre><code class="language-php">(new User)-&gt;truncate(&quot;your_table&quot;, true);
</code></pre>
<h2 id="procedure">Procedure</h2>
<p>To call a database procedure, use the <code>call()</code> method.</p>
<pre><code class="language-php">(new User)-&gt;call('procedure_name');
</code></pre>
<p>To use procedure parameters, pass the values in array format.</p>
<pre><code class="language-php">(new User)-&gt;call('procedure_name' , ['param_1, param_2, param_3']);
</code></pre>
<h2 id="pagination">Pagination</h2>
<p>The <code>pagination()</code> method creates a system for paging results. To initialize, the first parameter must be the table you want to use to start paging. The second parameter will list the amount of values that will be returned from the table as shown in the example below.</p>
<pre><code class="language-php">$values = (new User)-&gt;pagination('your_table', 3);
</code></pre>
<p>To retrieve the table values from the database, you can use the <code>getRows()</code> method. And to use pagination, use the <code>getArrows()</code> method.</p>
<pre><code class="language-php">/** Returns table data */
$values-&gt;getRows();

/** Returns commands to advance or return */
$values-&gt;getArrows()
</code></pre>
<p>To use pagination with relationship in another table, in the third parameter pass an array containing the name of the table that has a relationship with the current table, the column name of the current table that has the foreign key and the column name of the primary key of the another table.</p>
<pre><code class="language-php">$values = (new User)-&gt;pagination('your_table', 3, ['foreign_table', 'column_foreign_key', 'column_primary_key']);
</code></pre>
<p><strong>INNER JOIN</strong></p>
<p>If you want to use pagination with a table that has a foreign key, pass an array in the third parameter.</p>
<p>In the first index, insert the name of the table that is linked to the current table, in the second index the name of the column that contains the foreign key and in the third index the column name of the primary key of the table that references the current table</p>
<pre><code class="language-php">$values = (new User)-&gt;pagination('your_table', 3, ['foreign_table', 'column_foreign_key', 'column_primary_key'], &quot;status=true&quot;);
</code></pre>
<p><strong>WHERE clause</strong></p>
<p>To use the WHERE clause, use the fourth parameter as shown below.</p>
<pre><code class="language-php">$values = (new User)-&gt;pagination('your_table', 3, null, &quot;status=true&quot;);
</code></pre>
<p><strong>Wolf Template</strong></p>
<p>Data pagination is widely used in project templates. You can integrate pagination into Wolf Template as follows:</p>
<pre><code class="language-php">$values = (new User)-&gt;pagination('your_table', 3);

return view('home', [
    'values' =&gt; $values
]);
</code></pre>
<p>In your template, retrieve the data like this:</p>
<pre><code class="language-html">&lt;table&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Age&lt;/th&gt;
            &lt;th&gt;Gender&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;

    &lt;tbody&gt;
        {% foreach ($values-&gt;getRows() as $result): %}
            &lt;tr&gt;
                &lt;td&gt;{{ $result['name'] }}&lt;/td&gt;
                &lt;td&gt;{{ $result['age'] }}&lt;/td&gt;
                &lt;td&gt;{{ $result['gender'] }}&lt;/td&gt;
            &lt;/tr&gt;
        {% endforeach; %}
    &lt;/tbody&gt;
&lt;/table&gt;

{{ $values-&gt;getArrows(); }}
</code></pre>
<p>The result will be as follows:</p>
<table style="margin-bottom: 20px;">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sam</td>
      <td>47</td>
      <td>Male</td>
    </tr>
    <tr>
      <td>Dean</td>
      <td>49</td>
      <td>Male</td>
    </tr>
    <tr>
      <td>Marry</td>
      <td>52</td>
      <td>Female</td>
    </tr>
  </tbody>
</table>

<p><span class="katrina-pag">&lt;&lt; 1</span> 2 <span class="katrina-pag">3 &gt;&gt;</span></p>
<p>To change the arrows (<code>&lt;&lt;</code> and <code>&gt;&gt;</code>), use the parameters of the <code>getArrows()</code> method. The result will be:</p>
<pre><code class="language-html">{{ $values-&gt;getArrows('First', 'Last'); }}
</code></pre>
<table style="margin-bottom: 20px;">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sam</td>
      <td>47</td>
      <td>Male</td>
    </tr>
    <tr>
      <td>Dean</td>
      <td>49</td>
      <td>Male</td>
    </tr>
    <tr>
      <td>Marry</td>
      <td>52</td>
      <td>Female</td>
    </tr>
  </tbody>
</table>

<p><span class="katrina-pag">First</span> 2 <span class="katrina-pag">3 Last</span></p>
<h2 id="custom-pagination">Custom Pagination</h2>
<p>The <code>pagination()</code> method uses a basic SELECT statement. If you need to use a much more complex SELECT, consider using the <code>customPagination()</code> method.</p>
<pre><code class="language-php">$values = (new User)-&gt;customPagination(&quot;SELECT created_at, order_status, idSession, SUM(idOrder) AS idOrder FROM `tb_order` 
GROUP BY created_at, order_status, idSession&quot;, 3);
</code></pre>
<p><strong>Customizing arrows CSS</strong></p>
<p>You can customize the look of the arrows through the classes <code>pagination_first_item</code>, <code>pagination_atual_item</code>, <code>pagination_others_itens</code> and <code>pagination_last_item</code>.</p>
<p>Below is a customization to serve as an example:</p>
<pre><code class="language-html">.pagination_atual_item {
    background-color: #B5B5B5;
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    margin-top: 30px;
    transition: 0.2s;
}

.pagination_first_item, .pagination_others_itens, .pagination_last_item {
    background-color: #4682B4;
    color: #FFF;
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    margin-top: 30px;
    transition: 0.2s;
    text-decoration: none;
}

.pagination_first_item:hover, .pagination_others_itens:hover, .pagination_last_item:hover {
    background-color: #0071E3;
    color: #FFF !important;
    transition: 0.2s;
}
</code></pre>
<h2 id="types-of-data">Types of data</h2>
<p>Below is listed the attributes and data supported by Katrina ORM:</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">String data</th>
      <th scope="col">Numerical data</th>
      <th scope="col">Date and time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span class="cmd-vinci">varchar("column_name", size)</span></td>
      <td><span class="cmd-vinci">tinyint("column_name", size)</span></td>
      <td><span class="cmd-vinci">date("column_name")</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">char("column_name", size)</span></td>
      <td><span class="cmd-vinci">smallint("column_name", size)</span></td>
      <td><span class="cmd-vinci">year("column_name")</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">tinytext("column_name", size)</span></td>
      <td><span class="cmd-vinci">mediumint("column_name", size)</span></td>
      <td><span class="cmd-vinci">time("column_name")</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">mediumtext("column_name", size)</span></td>
      <td><span class="cmd-vinci">bigint("column_name", size)</span></td>
      <td><span class="cmd-vinci">datetime("column_name")</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">longtext("column_name", size)</span></td>
      <td><span class="cmd-vinci">int("column_name", size)</span></td>
      <td><span class="cmd-vinci">timestamp("column_name")</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">text("column_name")</span></td>
      <td><span class="cmd-vinci">decimal("column_name", value1, value2)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Attributes</th>
      <th scope="col">Boolean</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span class="cmd-vinci">boolean("column_name")</span></td>
      <td><span class="cmd-vinci">default("default_value")</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">unique()</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">unsigned()</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">incremet() (MYSQL)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">notNull()</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">primary()</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">after("column_name")</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">first()</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
    <tr>
      <td><span class="cmd-vinci">serial("id_table") (POSTGRESQL)</span></td>
      <td><span class="cmd-vinci">-</span></td>
    </tr>
  </tbody>
</table>
                

                <hr />

                
                <h3>What to see next?</h3>

                <section aria-label="breadcrumb" class="mt-4">
                  <ol class="breadcrumb">
                    
                      <li class="breadcrumb-item"><a href="../dump/">&#8592; Dump</a></li>
                    
                    
                      <li class="breadcrumb-item"><a href="../deploy/">Deploy &#8594;</a></li>
                    
                  </ol>
                </section>
                

              </div>

              <hr>

              <div class="row text-center mt-3">
                <div class="col-md-12 ml-2">
                  Built with <a href="https://www.mkdocs.org">MkDocs</a>.
                </div>
              </div>
            </div>

            <!--
              MkDocs version      : 1.1.2
              Docs Build Date UTC : 2022-05-10 12:26:19.090119+00:00
              -->

          </section>
        </div>
      </div>
    </div>
  </div>
</body>

</html>