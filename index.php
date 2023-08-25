<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<?php

$Title = "World";
$controller = "StudentTwentyOneDaysController";
$model = "StudentTwentyOneDaysModel";
$parentfolder1 = "student";
$parentfolder2 = "home";
$parentfolder3 = "dev";
$parentfolder4 = "twentyonedays";
$parentfolder5 = "";
$final = "twentyonedays";

$sourcetable = "student_softskills_modules";
$sourcetablecolumnname = "softskills_unit_id";

$targettable = "student_softskills_units";
$targettablecolumnname = "softskills_unit_name";
$targettableid = "id";

$list=ucfirst($final)."List";
$Add=ucfirst($final)."Add";
$AddFormValue=ucfirst($final)."AddFormValue";
$Edit=ucfirst($final)."Edit";
$EditFormValue=ucfirst($final)."EditFormValue";
$Delete=ucfirst($final)."Delete";
$Detail=ucfirst($final)."Detail";

$db = "student_dev_twentyonedays";
$dbc = array( 
    "fos_name" => "Field of Study Name",
);

echo "<br>";

print "<h5> Joins </h5>";

echo "'$sourcetable.*', '$targettable.$targettablecolumnname as $sourcetablecolumnname')
->join('$targettable', '$targettable.$targettableid', '$sourcetable.$sourcetablecolumnname' </br></br>"; 

echo "'schools_class.*', 'schools.school_name as school_id')
->join('schools', 'schools.id', 'schools_class.school_id' </br></br>"; 


print "<h4> $Title </h4> <br>";

print "<h5> Route File  </h5>";

echo "Route::get('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-list', [ $controller::class, '$list' ]); </br>"; 
echo "Route::get('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-add', [ $controller::class, '$Add' ]); </br>"; 
echo "Route::post('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-add', [ $controller::class, '$AddFormValue' ]); </br>"; 
echo "Route::get('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-edit/{id}', [ $controller::class, '$Edit' ]); </br>"; 
echo "Route::post('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-edit/{id}', [ $controller::class, '$EditFormValue' ]); </br>"; 
echo "Route::get('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-delete/{id}', [ $controller::class, '$Delete' ]); </br>"; 
echo "Route::get('/$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-detail/{id}', [ $controller::class, '$Detail' ]); </br>"; 

echo "</br>";
print "<h5> // List Page </h5>";
echo "</br>";
print  "
public function $list() <br>
    {<br>
        \$data['getRecord$final'] = $model::getRecord$final();<br>
        \$data['header_title'] = \"List $final \";<br>
        return view('$parentfolder1.$parentfolder2.$parentfolder3.$parentfolder4.$parentfolder5.$final-list', \$data);<br>
    }<br>
";

echo "</br>";
print "<h5> // To Get Add Page </h5>";
echo "</br>";
print "
public function $Add()<br>
{ <br>
    \$data['header_title'] = \"Add New $final\"; <br>
    return view('$parentfolder1.$parentfolder2.$parentfolder3.$parentfolder4.$parentfolder5.$final-add', \$data); <br>
}
";

echo "</br></br>";
print "<h5> // New Addition - Form Value </h5>";
echo "</br>";
print "
public function $AddFormValue(Request \$request)<br>
{<br>
    \$save = new $model;<br>
    ";
    foreach ($dbc as $key => $value)
    {
        echo "\$save->"; echo "{$key}"." = \$request->{$key};<br>";
    }
    print " 
    \$save->save();<br>
    return redirect('$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-list')->with('success', \"New $final Created Successfully\" );<br>
}

";


echo "</br></br>";
print "<h5> // To get Edit Page </h5>";
echo "</br>";
print "
public function $Edit(\$id)<br>
{<br>
    \$data['getRecord$final'] = $model::getSingle(\$id);<br>

    if(!empty(\$data['getRecord$final']))<br>
    {<br>
        \$data['header_title'] = \"Edit $final\";<br>
        return view('$parentfolder1.$parentfolder2.$parentfolder3.$parentfolder4.$parentfolder5.$final-edit', \$data);<br>
    }<br>
    else{<br>
        abort(404);<br>
    }<br>
}<br>
";

echo "</br></br>";
print "<h5> // Edit Page - Form Value</h5>";
echo "</br>";
print "
public function $EditFormValue(\$id, Request \$request)<br>
{<br>
    \$save = $model::getSingle(\$id);<br>
    ";
    foreach ($dbc as $key => $value)
    {
        echo "\$save->"; echo "{$key}"." = \$request->{$key};<br>";
    }
    print "
    \$save->save();<br>
    return redirect('$parentfolder1/$parentfolder2/$parentfolder3/$parentfolder4/$parentfolder5/$final-list')->with('success', \" $final Updated Successfully\" );<br>
}<br>
";

echo "</br></br>";
print "<h5> // Delete Page </h5>";
echo "</br>";
print "
public function $Delete(\$id)<br>
{<br>
    \$save = $model::getSingle(\$id);<br>
    \$save->is_delete = 1;<br>
    \$save->save();<br>
    return redirect()->back()->with('success', \" $final Deleted Successfully\" );<br>
}<br>
";

echo "</br></br>";
print "<h5> // Detail Page </h5>";
echo "</br>";
print "
public function $Detail(\$id)<br>
{<br>
    \$data['getRecord$final'] = $model::getSingle(\$id);<br>

    if(!empty(\$data['getRecord$final']))<br>
    {<br>
        \$data['header_title'] = \"$final Detail\";<br>
        return view('$parentfolder1.$parentfolder2.$parentfolder3.$parentfolder4.$parentfolder5.$final-detail', \$data);<br>
    }<br>
    else{<br>
        abort(404);<br>
    }<br>

}<br>
";


echo "</br></br>";
print "<h5> Model </h5>";
echo "</br>";
print "
protected \$table = '$db';<br>

static public function getSingle(\$id)<br>
{<br>
    \$return = self::find(\$id);<br>
    return \$return;<br>
}<br>
<br>
static public function getRecord$final()<br>
{<br>
    \$return = $model::select('$db.*', 'users.ufirstname as created_by', 'college.collegename as event_college')<br>
                ->join('users', 'users.id', '$db.created_by')<br>
                ->join('college', 'college.id', '$db.event_college');<br>
                <br>
                if(!empty(Request::get('event_name')))<br>
                {<br>
                    \$return = \$return->where('$db.event_name','like', '%' . Request::get('event_name'). '%');<br>
                }<br>

                \$return = \$return->where('$db.is_delete', '=', 0)<br>
                ->orderBy('$db.event_start_date', 'desc')<br>
                ->paginate(50);<br>
                <br>
    return \$return;<br>
}<br>
";

echo "</br></br>";
print "<h5> View Blade - Add Page </h5>";
echo "</br>";

    foreach ($dbc as $key => $value)
    print "
    &lt!-- {$value} --&gt<br>
    &ltdiv class=\"col-md-6\"&gt<br>
    &ltlabel class=\"form-label\">{$value}&lt/label&gt<br>
    &ltinput class=\"form-control\" name=\"{$key}\" type=\"text\" placeholder=\"Enter {$value}\"&gt<br>
    &lt/div&gt<br>
    </br>
    ";

    echo "</br></br>";
    print "<h5> Edit Blade - Edit Page </h5>";
    echo "</br>";

        foreach ($dbc as $key => $value)
        print "
        &lt!-- {$value} --&gt<br>
        &ltdiv class=\"col-md-6\"&gt<br>
        &ltlabel class=\"form-label\">{$value}&lt/label&gt<br>
        &ltinput class=\"form-control\" name=\"{$key}\" type=\"text\" value=\"{{ \$getRecord$db->{$key} }}\" placeholder=\"Enter {$value}\"&gt<br>
        &lt/div&gt<br>
        </br>
        ";
    
    
?>


</div>
</body>
</html>