<div class="container-fliud">
    <div class="row">
        <div class="wrapperClass">
            <div class="d-flex flex-row justify-content-between">
                <div class="p2" style="padding-left: 5px;">
                   <h1><b><i style="color: #227ad8">ESE <i class="fa fa-star"></i>H</i></b></h1>
                </div>
                <div class="p2" id="lgv">
                    <ul class="d-flex flex-row justify-content-around" id="dnav">
                        <li><a id="topAnchor" href="/">Home</a></li>
                        <li><a id="topAnchor" href="/about_us/">About Us</a></li>
                        <li><a id="topAnchor" href="/our_services/">Our Services</a></li>
                        {{-- <li><a id="topAnchor" href="/blog/">Blogs</a></li> --}}
                        <li><a id="topAnchor" href="/contact_us/">Contact Us</a></li>
                        <li><a id="topAnchor" href="/login/">Login</a></li>
                    </ul>
                </div>
                <div class="p2" id="menu">
                    <i class="fa fa-bars" style="font-size: 2.5em;cursor: pointer;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #close
    {
        font-size: 2.2em;
        text-align: right;
    }
    h1
    {
        font-weight: 900;
    }
    .wrapperClass
    {
        /* background-color: #227ad8; */
        background-color: white;
        color: black;
        font-weight: 900;
        padding: 10px;
        border-bottom: 20px solid #227ad8;
        width: 100%;
    }
    #topAnchor
    {
        text-decoration: none;
        color: black;
        padding: 5px;
        margin: 10px;
    }
    
    #topAnchor:hover
    {
        background-color: #227ad8;
        padding: 10px;
        color: white;
        font-weight: bolder;
    }
    #dnav
    {
        list-style-type: none;
        padding: 10px;
    }
    /* dropdown menus */
.dropdown 
{
    position: relative;
    display: inline-block;
}



.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: white;
    width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

li
{
    list-style-type: none;
}

.dropdown:hover .dropdown-content 
{
    display: block;
}
#menu
{
    padding: 5px;
    display: none;
}
#mobNav
{
    display: none;
}

@media screen and (max-width: 700px) 
{
    #lgv
    {
        display: none;
    }
    #menu
    {
        display: block;
    }
    #mobNav
    {
        height: 100%;
        width: 100%;
        background-color: white;
        margin: 5px;
    }
    .mobNavLinks
    {
        list-style-type: none;
        font-size: larger;
    }
    .mobNavLinks li a 
    {
        padding: 10px;
    }
    .dropdown-content
    {
        left: 0;
        background-color: #227ad8;
        flex-wrap: wrap;
        width: 170px;
    }
    #close
    {
        cursor: pointer;
    }
}

</style>
<script>
$(document).ready(function()
{
    let menuBtn = $("#menu");
    let mobNav = $("#mobNav");
    const menu = $('.wrapperClass');
    const close = $('#close');
    menuBtn.click(function()
    {
        mobNav.toggle();
        menu.hide();
    });

    close.click(()=>{
        mobNav.hide();
        menu.show();
    });
});
</script>