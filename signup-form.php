  <form id='demoform-1' class='store-data list-block' action="join.php" method="POST">
      <ul>
        <li>
          <div class='item-content'>
            <div class='item-media'><i class='icon material-icons'>person_outline</i></div>
            <div class='item-inner'> 
              <div class='item-title label'>Name</div>
              <div class='item-input'>
                <input type='text' placeholder='Your name' name='name'/>
              </div>
            </div>
          </div>
		            <div class='item-content'>
            <div class='item-media'><i class='icon material-icons'>person_outline</i></div>
            <div class='item-inner'> 
              <div class='item-title label'>Username</div>
              <div class='item-input'>
                <input type='text' placeholder='Username' name='username'/>
              </div>
            </div>
          </div>
        </li>
          <li>
          <div class='item-content'>
            <div class='item-media'><i class='icon material-icons'>call</i></div>
            <div class='item-inner'> 
              <div class='item-title label'>Phone or Email Address</div>
              <div class='item-input'>
                <input type='tel' placeholder='Phone' name='email'/>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class='item-content'>
            <div class='item-media'><i class='icon material-icons'>lock_outline</i></div>
            <div class='item-inner'> 
              <div class='item-title label'>Password</div>
              <div class='item-input'>
                <input type='password' placeholder='Password' name='password'/>
              </div>
            </div>
          </div>
        </li>
	
		 <li><a href='#' class='item-link smart-select'>
            <select name='type'>
                <option value='smartshopper'>Smart Shopper</option>
              <option value='shop'>Shop</option>
              <option value='other'>Other</option>
            
            </select>
            <div class='item-content'>
              <div class='item-inner'>
             <div class='item-title'>Choose Type Of User</div>
              </div>
            </div></a></li>
      </ul>
	       <div class="content-block">
		 	<?php	
	echo"<input name='image' type='hidden' value='userfiles/avatars/default.png' />	";

			$strings = ",";
		$u = array('pink','teal', 'blue','#0c56ac');

		$well = $u[rand(0,4)];

    echo" <p class='buttons-row'>	<input type='submit' class='button button-fill ' name='btn' value='Join' style='background-color:$well' ></p>";
	  
	   ?>
    </div>
	  
    </form>