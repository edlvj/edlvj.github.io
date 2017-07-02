<html>
  <head>
    <title>CV</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aframe/0.6.0/aframe-master.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@3.2.1/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-particle-system-component@1.0.x/dist/aframe-particle-system-component.min.js"></script>
  </head>
 <body>
    <a-scene>
      
      
      <a-entity text="value: Work Expirience; color: #333; width: 8; height: auto" position="3 3 -9">
        <a-image src="#tr" position="0 -1 0"  style="z-index: 100;" static-body></a-image>
        <a-image src="#nv" position="-5 -1 0" ></a-image>
        <a-entity text="value: Backend developer; color: #333; width: 6; height: auto" position="2 -2 0"></a-entity>
        <a-entity text="value: Web developer; color: #333; width: 6; height: auto" position="-3 -2 0"></a-entity>
      </a-entity>
      
      <a-entity text="value: Education; color: #333; width: 8; height: auto" position="5 3 -1"  rotation="0 -90 0"> 
         <a-image src="#dkrkm" position="-6 -1 0" ></a-image>
        <a-image src="#nmu" position="-1 -1 0" ></a-image>
        <a-entity text="value: National Mining University; color: #333; width: 8; height: auto" position="1 -2 0"></a-entity>
        <a-entity text="value: DKR KM DNU of О. Gonchar; color: #333; width: 6; height: auto" position="-4 -2 0"></a-entity>
      </a-entity>
              
      <a-entity text="value: Skills; color: #333; width: 8; height: auto" position="-4 3 1" rotation="0 -180 0">
         <a-image src="#js" position="-2 -2 0" ></a-image>
         <a-image src="#php" position="-4 -2 0" ></a-image>
         <a-image src="#ruby" position="-6 -2 0" ></a-image>
         <a-image src="#angular" position="0 0 0" ></a-image>
         <a-image src="#pg" position="-8 0 0"></a-image>
         <a-image src="#react" position="-2 0 0"></a-image>
         <a-image src="#ror" position="-6 0 0"></a-image>
         <a-image src="#vue" position="0 -2 0"></a-image>
      </a-entity>
      
      <a-entity text="value: Projects; color: #333; width: 8; height: auto" position="-5 3 -7" rotation="0 -270 0">
        <a-image src="#bi" width="2"  height="1.5" position="0 -1 0"></a-image>
        <a-image src="#bs" width="2"  height="1.5" position="-3 -1 0"></a-image>
        <a-image src="#siw"  width="2"  height="1.5" position="-6 -1 0"></a-image>
        <a-entity text="value: https://github.com/edlvj; color: #333; width: 6; height: auto"   position="1 0 0"></a-entity>
        
      </a-entity>
      
      <a-entity text="value: gorachedik96@gmail.com; color: #333; width: 4; height: auto" position="4 3 -9"></a-entity>
      
      <a-plane position="0 0 -4" rotation="-90 0 0" width="10" height="10" src="#floor"></a-plane>
      <a-plane position="0 2 -9" rotation="0 0 0" width="10" height="4" src="#wall"></a-plane>
      <a-plane position="0 2 1" rotation="0 -180 0" width="10" height="4" src="#wall"></a-plane>
      <a-plane position="0 2 1" rotation="0 0 0" width="10" height="4" src="#wall"></a-plane>
      <a-plane position="5 2 -4" rotation="0 -90 0" width="10" height="4" src="#wall"></a-plane>
      <a-plane position="-5 2 -4" rotation="0 -270 0" width="10" height="4" src="#wall"></a-plane>
      <a-sky color="#64b5f6"></a-sky>
    
      <a-assets>
        <img id="floor" src="sprites/floor.jpg">
        <img id="wall" src="sprites/wall.jpg">
        <!-- works -->
        <img id="tr" src="work/tr.png">
        <img id="nv" src="work/nv.png">
        <!--edu -->
        <img id="dkrkm" src="edu/dkrkm.png">
        <img id="nmu" src="edu/nmu.png">
         
        <!-- skills -->
        
        <img id="js" src="skills/js.png">
        <img id="php" src="skills/php.png">
        <img id="ruby" src="skills/ruby.png">
        
        <img id="angular" src="skills/angular.png">
        <img id="pg" src="skills/pg.png">
        <img id="react" src="skills/react.png">
        <img id="ror" src="skills/ror.png">
        <img id="vue" src="skills/vue.png">
        <!-- projects -->
        
        <img id="bi" src="projects/bl.png">
        <img id="bs" src="projects/bs.png">
        <img id="siw" src="projects/siw.png">
        
      </a-assets>
    
    
    </a-scene>
	
</body>
</html>