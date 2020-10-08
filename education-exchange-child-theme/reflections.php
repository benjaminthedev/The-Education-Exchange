<?php
/*
 * Template Name: Reflections Template
 * 
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<!-- Are you logged in?? -->
<?php
if ( !is_user_logged_in() ) {
   auth_redirect();
}
?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class=" clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>

				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

					// Start loop
					while ( have_posts() ) : the_post();

						get_template_part( 'partials/page/layout' );

					endwhile;

                } ?>
                
                


<div class="reflection">

                <!-- <h3>Reflections</h3> -->

                <style>
                    .btn{
                        padding: 10px;
                        background: #0c183a;
                        color: #fff;
                        text-transform: uppercase;
                        margin-top: 50px;
                        display: block;
                        width: 30%;
                        text-align: center;
                        border-radius: 5px;
                    }
                    .filter{
                        margin-top: 150px;
                    }
                    
                    input.btn {
                        margin-top: 20px;
                    }

                    li.collection-item {
                        list-style-type: none;
                        border-bottom: 2px solid #001035;
                        padding-bottom: 20px;
                        padding-top: 20px;

                    }

                    ul.collection {
                        padding: 20px 0px !important;
                        margin: 0px;
                    }        
                    
                    .reflection {
                        width: 56vw;
                        margin: 0 auto;
                        margin-bottom: 100px;
                    }
                    input#filter {
                        width: 100%;
                        border: 1px solid lightgray;
                        padding: 10px;
                        border-radius: 5px;
                    }
                </style>




                <section class="main">
    
        <form id="task-form">
            <div class="input-field">
                <label>Add A New Reflection</label>
                <textarea type="text" name="task" id="task" placeholder="Add A New Reflection"></textarea>
            </div>    

            <label for="themes">What Theme?</label>

            
             <select id="themes" name="theme" data-dropdown>
                <option value="0">What theme did you choose?</option>
                <option value="1">The purpose and vision of education</option>
                <option value="2">Connecting and expanding learning</option>
                <option value="3">Online and digital learning</option>
                <option value="4">Building learning independence</option>
                <option value="5">Professional learning for the 21st century</option>
            </select>        

            <input type="submit" value="Add A Reflection" class="btn">
        </form>
        </section>

  


<section class="tasks" id="showMe">


    <div class="input-field">
        <h2 class="filter">Filter Your Reflections</h2>
        <label for="filter">Filter Reflections</label><br />
        <br />
        <input type="text" name="filter" id="filter" placeholder="Search for your reflection">

        <br />
        <br />

           <label for="themes">What Theme?</label>

            
             <select id="themes" name="theme" data-dropdown>
                <option value="0">Please select a theme</option>
                <option value="1">The purpose and vision of education</option>
                <option value="2">Connecting and expanding learning</option>
                <option value="3">Online and digital learning</option>
                <option value="4">Building learning independence</option>
                <option value="5">Professional learning for the 21st century</option>
            </select>  
    </div>



        <ul class="collection">
            <h5>Your Reflections:</h5>
            <li class="collection-item">
            <hr />    
            </li>
            
        </ul>
        
        <a href="#" class="clear-tasks btn">Delete Reflections</a>
    </section>




        </div><!-- end reflections -->        

                <script>

                

                // Define UI Vars
const form = document.querySelector('#task-form');
const taskList = document.querySelector('.collection');
const clearBtn = document.querySelector('.clear-tasks');
const filter = document.querySelector('#filter');
const taskInput = document.querySelector('#task');
const showMe = document.getElementById('showMe');


// Load all event listeners
loadEventListeners();

// Load all event listeners
function loadEventListeners() {
    // DOM Load event
    document.addEventListener('DOMContentLoaded', getTasks);
    // Add task event
    form.addEventListener('submit', addTask);
    // Remove task event
    taskList.addEventListener('click', removeTask);
    // Clear task event
    clearBtn.addEventListener('click', clearTasks);
    // Filter tasks event
    filter.addEventListener('keyup', filterTasks);
}



// Get Tasks from LS
function getTasks() {
    let tasks;

        if (localStorage.getItem('tasks') === null) {
            tasks = [];
        } else {
            tasks = JSON.parse(localStorage.getItem('tasks'));
        }
    
   
   tasks.forEach(function (task) {
        // Create li element
        const li = document.createElement('li');
        // Add class
        li.className = 'collection-item';
        // Create text node and append to li
        li.appendChild(document.createTextNode(task));
        // Create new link element
        const link = document.createElement('a');
        // Add class
        link.className = 'delete-item secondary-content';
        // Add icon html
        link.innerHTML = '<i class="fa fa-remove"></i>';
        // Append the link to li
        li.appendChild(link);

        // Append li to ul
        taskList.appendChild(li);
    });
}


 //Timer Checker
  function check() {
        console.log('checking new')
        if (localStorage.getItem('tasks') === null) {
            showMe.style.display = "none";
        } else {
            showMe.style.display = "block";
        }
    }

    const timeCheck = setInterval(check, 1000);






// Add Task
function addTask(e) {
    if (taskInput.value === '') {
        alert('Add a task');
    }

    // Create li element
    const li = document.createElement('li');
    // Add class
    li.className = 'collection-item';
    // Create text node and append to li
    li.appendChild(document.createTextNode(taskInput.value));
    // Create new link element
    const link = document.createElement('a');
    // Add class
    link.className = 'delete-item secondary-content';
    // Add icon html
    link.innerHTML = '<i class="fa fa-remove"></i>';
    // Append the link to li
    li.appendChild(link);

    // Append li to ul
    taskList.appendChild(li);

    // Store in LS
    storeTaskInLocalStorage(taskInput.value);

    // Clear input
    taskInput.value = '';

    e.preventDefault();
}

// Store Task
function storeTaskInLocalStorage(task) {
    let tasks;
    if (localStorage.getItem('tasks') === null) {
        tasks = [];
    } else {
        tasks = JSON.parse(localStorage.getItem('tasks'));
    }

    tasks.push(task);

    localStorage.setItem('tasks', JSON.stringify(tasks));
}

// Remove Task
function removeTask(e) {
    if (e.target.parentElement.classList.contains('delete-item')) {
        if (confirm('Are You Sure?')) {
            e.target.parentElement.parentElement.remove();

            // Remove from LS
            removeTaskFromLocalStorage(e.target.parentElement.parentElement);
        }
    }
}

// Remove from LS
function removeTaskFromLocalStorage(taskItem) {
    let tasks;
    if (localStorage.getItem('tasks') === null) {
        tasks = [];
    } else {
        tasks = JSON.parse(localStorage.getItem('tasks'));
    }

    tasks.forEach(function (task, index) {
        if (taskItem.textContent === task) {
            tasks.splice(index, 1);
        }
    });

    localStorage.setItem('tasks', JSON.stringify(tasks));
}

// Clear Tasks
function clearTasks() {
    // taskList.innerHTML = '';

    // Faster
    while (taskList.firstChild) {
        taskList.removeChild(taskList.firstChild);
    }
    // Clear from LS
    clearTasksFromLocalStorage();
}

// Clear Tasks from LS
function clearTasksFromLocalStorage() {
    localStorage.clear();
}

// Filter Tasks
function filterTasks(e) {
    const text = e.target.value.toLowerCase();

    document.querySelectorAll('.collection-item').forEach(function (task) {
        const item = task.firstChild.textContent;
        if (item.toLowerCase().indexOf(text) != -1) {
            task.style.display = 'block';
        } else {
            task.style.display = 'none';
        }
    });
}




// New Dropdown filter
                


                
                </script>


				<?php //do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php //do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php //do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php //do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>