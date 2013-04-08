/*------------------------------------------------------------------------------

Common Scripts
Version: 1.0
Copyright: (c) 2007 VEGA TECHNOLOGY GROUP
8th Floor,  V.E.T Building```
------------------------------------------------------------------------------*/

//This is javascript of Menu
var setTimeoutID;
var Timeout=100000;
function Mouseover(obj)
{
	nav = document.getElementById("navigation");
    if (!nav) 
    return false;
    navListItems = nav.getElementsByTagName("li");				           
    for (j = 0; j < navListItems.length; j++) 
    {		               
        var nodeOther = navListItems[j];
        if ((nodeOther.nodeName == "LI"))
        {    
           nodeOther.className = ""; 
           
        }            
    } 
	obj.className = "hover";
}

function ClearsetTimeout()
{
   clearTimeout(setTimeoutID); 
}	

function Mouseout()
{
     setTimeoutID= setTimeout("SetHover()", Timeout);
}
 
function SetHover()
{       
    nav = document.getElementById("navigation"); 
    
    if (!nav) 
    return false;
    
    navListItems = nav.getElementsByTagName("li");
    for (j = 0; j < navListItems.length; j++) 
    {		               
        var nodeOther = navListItems[j];
        if ((nodeOther.nodeName == "LI"))
        {    
           nodeOther.className = "";  
        }            
    }
    for(i=0;i<ChannelIDSelect.length;i++)
    {
        var ID =ChannelIDSelect[i];
        navItems=document.getElementById(ID);
        if(navItems!=null)
        {
          navItems.className="hover";
        }

    }
    if(ChannelIDSelect.length=1)
    {
       var IDS =ChannelIDSelect[0];
       navItems=document.getElementById(IDS);
       if(navItems==null)
       {
           var node= navListItems[0];
           node.className="hover";
       }
    }
    
    if(ChannelIDSelect.length<1)
    {  
       var node= navListItems[0];
       node.className="hover";
    }
    
}

// This is javascript of dropdowmenu
    
var menuwidth='165px' //default menu width
var menubgcolor='#f16dac'//'#3287c2'  //menu bgcolor
var disappeardelay=250  //menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick="yes" //hide menu when user clicks within menu?
var objHover;
/////No further editting needed

var ie4=document.all
var ns6=document.getElementById&&!document.all
function dropdownmenu(obj, e, menucontents, menuwidth)
{
      if((objHover!=null)&&(objHover.parentNode!=null))
      {
        objHover.parentNode.className="";
      }
      objHover=obj;
    if (menucontents.length <1)
      {
      return false;
      }
      for (var i = 0; i < menucontents.length; i++)
    {
        menucontents[i] = menucontents[i].replace(/SG24_/,"");
    }
    if (window.event) 
        event.cancelBubble=true;
    else if (e.stopPropagation) e.stopPropagation()
        clearhidemenu();
        
    dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv;
    document.body.appendChild(dropmenuobj);
    populatemenu(menucontents);

    if (ie4||ns6)
    {
        showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)
        dropmenuobj.x=getposOffset(obj, "left")
        dropmenuobj.y=getposOffset(obj, "top")
        dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px"
		dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+ 7 +"px"
		dropmenuobj.style.zIndex = 9999
    }

    return clickreturnvalue()
}

if (ie4||ns6)
document.write('<div id="dropmenudiv" style="z-index:9999;visibility:hidden;width:'+menuwidth+';background-color:'+menubgcolor+'" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')

function getposOffset(what, offsettype)
{
    var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
    var parentEl=what.offsetParent;
    
    while (parentEl!=null)
    {
        totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
        parentEl=parentEl.offsetParent;
    }
    
    return totaloffset;
}


function showhide(obj, e, visible, hidden, menuwidth)
{
    if (ie4||ns6)
        dropmenuobj.style.left=dropmenuobj.style.top="-500px"
        
    if (menuwidth!="")
    {
        dropmenuobj.widthobj=dropmenuobj.style
        dropmenuobj.widthobj.width=menuwidth
    }
    
    if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")
        obj.visibility=visible
    else if (e.type=="click")
        obj.visibility=hidden
}

function iecompattest()
{
    return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge)
{
    var edgeoffset=0
    if (whichedge=="rightedge")
    {
        var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15
        
        dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
        
        if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
            edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth
    }
    else
    {
        var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset
        var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
        dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
        
        if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure)
        {   //move up?
            edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight
            
            //up no good either?
            if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) 
                edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge
        }
    }
    
    return edgeoffset
}

function populatemenu(what)
{
    if (ie4||ns6)
    dropmenuobj.innerHTML=what.join("")
}

function clickreturnvalue()
{
    if (ie4||ns6) return false
    else return true
}

function contains_ns6(a, b)
{
    while (b.parentNode)
    if ((b = b.parentNode) == a)
    return true;
    return false;
}

function dynamichide(e)
{
    Mouseout()
    objHover.parentNode.className="";
    if (ie4&&!dropmenuobj.contains(e.toElement))
    delayhidemenu()
    else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
    delayhidemenu()
}

function hidemenu(e)
{
   if (typeof dropmenuobj!="undefined")
        {
        if (ie4||ns6)
        dropmenuobj.style.visibility="hidden"
        }
}

function delayhidemenu()
{
    if (ie4||ns6)
    delayhide=setTimeout("hidemenu()",disappeardelay)
}

function clearhidemenu()
{  
    clearTimeout(setTimeoutID);
    if (typeof delayhide!="undefined")
    clearTimeout(delayhide)
    objHover.parentNode.className="hover";
}
     


