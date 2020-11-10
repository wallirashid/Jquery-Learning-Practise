<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-aqua">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">To Do List</h3>
                </div>

                <div class="box-body">
                    <ul class="todo-list ui-sortable" id="first-ul">
                    	<!-- <button type="button" class="btn btn-primary mb-2" id="unsolve-badge">Unsolved Task<span class="badge" id="unsolved-badge">7</span></button> -->
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Design a nice theme</span>
                            <div class="tools">
                               <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o delete-li"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Make the theme responsive</span>
                            <div class="tools">
                               <i class="fa fa-edit"></i>
                               <i class="fa fa-trash-o delete-li"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o delete-li"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                               <i class="fa fa-trash-o delete-li"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Check your messages and notifications</span>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                               <i class="fa fa-trash-o delete-li"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
 
                            <div class="tools">
                                 <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o delete-li"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box-footer clearfix no-border">
                    <button type="button" class="btn btn-primary pull-right" id="click-me"><i class="fa fa-plus"></i> Add item</button>
                </div>
            </div>
        </div>


        
        <div class="col-md-12" id="destination">
        	<h2>Incomplete Task</h2>
        	<!-- button type="button" class="btn btn-primary mb-2" id="complete-task">Solved Task<span class="badge" id="update-badge">0</span></button> -->
        	<ul class="todo-list ui-sortable" id="put-li"></ul>
        </div>
    </div>
    <!--end of wrapp all data section-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	



</body>

</html>
