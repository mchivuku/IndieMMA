<div class="contain-to-grid sticky">
<nav class="top-bar" data-topbar role="navigation">

   <ul class="title-area">
   <li class="name">
   <h1><a href="#">IndieMMA</a></h1>
   </li>

   <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
       <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>

   </ul>

    <section class="top-bar-section">
       <!-- Right Nav Section -->
       <ul class="right">
       <li class="has-form">
       <div class="row collapse">
       <form>
		<div class="large-4 columns">
      	       			<input type="text" id="email" placeholder="Email" />
                </div>

                <div class="large-4 columns">
                <input type="text" id="password" placeholder="Password" />
                  </div>

 <div class="large-3 columns">
      <a href="#" class="alert button expand">Sign In</a>
    </div>
       </form>
       </div>
       </li>
               </ul>
       <!-- Left Nav Section -->
       <ul class="left">

           <li><a href="{{ URL::to('/') }}">Home</a></li>
           <li class="divider"></li>
            <li><a href="{{ URL::to('about')}}">About</a></li>
             <li class="divider"></li>
          <li><a href="#">Logout</a></li>

       </ul>
     </section>


</nav>
</div>