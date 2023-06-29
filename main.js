import * as THREE from "/node_modules/three";
import * as TWEEN from "TWEEN";
import { InteractionManager} from 'InteractionManager'
import { OrbitControls } from 'OrbitControls';
import { GLTFLoader } from 'GLTFLoader';
// import { DirectionalLightHelper } from 'three';

//                                                      SCENE

const scene = new THREE.Scene();

//                                                      CAMERA

const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight , 0.1, 1000);
camera.position.set(60,60,60);

// DO NOT MESS

const renderer = new THREE.WebGLRenderer({
  canvas: document.querySelector('#bg'),
});
renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(window.innerWidth, window.innerHeight) ;
renderer.render( scene, camera);

renderer.outputEncoding = THREE.sRGBEncoding;
renderer.outputEncoding = THREE.sRGBEncoding;

// Interaction Manager

const interactionManager = new InteractionManager(
  renderer,
  camera,
  renderer.domElement
);

//                                                        Torii

const geometry = new THREE.TorusGeometry(16, 4, 160, 4);
geometry.scale(0.5,1,0.5)
const material = new THREE.MeshPhysicalMaterial({color:0xfffdd0, metalness: 0, roughness: 0.5, transmission: 0.99, thickness: 1, attenuationColor:0xff0000 });
const torus = new THREE.Mesh(geometry, material);
function clicked(){
  clicked.stopPropagation;
  console.log("Clicked");
  camera.lookAt(torus);
  const coords = { x: camera.position.x, y: camera.position.y, z: camera.position.z };
  new TWEEN.Tween(coords)
      .to({ x: torus.position.x + 20 , y: torus.position.y , z: torus.position.z + 20})
      .onUpdate(() =>
        camera.position.set(coords.x, coords.y, coords.z)
      )
      .start();
}
torus.addEventListener( "click", clicked)
torus.position.set(30, 0,30);
interactionManager.add(torus);
scene.add(torus);

const torus2 =  new THREE.Mesh(geometry, material)
function clicked2(){
  clicked2.stopPropagation;
  console.log("Clicked2");
  camera.lookAt(torus2);
  const coords2 = { x: camera.position.x, y: camera.position.y, z: camera.position.z };
  new TWEEN.Tween(coords2)
      .to({ x: torus2.position.x - 20 , y: torus2.position.y , z: torus2.position.z + 20})
      .onUpdate(() =>
        camera.position.set(coords2.x, coords2.y, coords2.z)
      )
      .start();
}
torus2.addEventListener( "click", clicked2)
torus2.position.set(-30, 0,30);
torus2.rotation.y+=90;
interactionManager.add(torus2);
scene.add(torus2);

const torus3 =  new THREE.Mesh(geometry, material)
function clicked3(){
  clicked3.stopPropagation;
  console.log("Clicked3");
  camera.lookAt(torus3);
  const coords3 = { x: camera.position.x, y: camera.position.y, z: camera.position.z };
  new TWEEN.Tween(coords3)
      .to({ x: torus3.position.x - 20 , y: torus3.position.y , z: torus3.position.z - 20})
      .onUpdate(() =>
        camera.position.set(coords3.x, coords3.y, coords3.z)
      )
      .start();
}
torus3.addEventListener( "click", clicked3)
torus3.position.set(-30, 0,-30);
torus3.rotation.y+=180;
interactionManager.add(torus3);
scene.add(torus3);

const torus4 =  new THREE.Mesh(geometry, material)
function clicked4(){
  clicked4.stopPropagation;
  console.log("Clicked4");
  camera.lookAt(torus4);
  const coords4 = { x: camera.position.x, y: camera.position.y, z: camera.position.z };
  new TWEEN.Tween(coords4)
      .to({ x: torus4.position.x + 20 , y: torus4.position.y , z: torus4.position.z - 20})
      .onUpdate(() =>
        camera.position.set(coords4.x, coords4.y, coords4.z)
      )
      .start();
}
torus4.addEventListener( "click", clicked4)
torus4.position.set(30, 0,-30);
torus4.rotation.y+=270;
interactionManager.add(torus4);
scene.add(torus4);

//                                            Background

const spheregeo = new THREE.CylinderGeometry(50, 10, 30, 8, 1);
const spheremat = new THREE.MeshPhysicalMaterial({metalness: 0, roughness: 0, transmission: 0.9, thickness: 2 });
const sphere = new THREE.Mesh(spheregeo, spheremat);
sphere.position.y=-40
function clicked5(){
  clicked5.stopPropagation;
  console.log("Clicked5");
  document.getElementById('Page1').style.display='block';
  document.getElementById('movingscreen').style.display='none';
}
sphere.addEventListener( "click", clicked5)
interactionManager.add(sphere);
scene.add(sphere);

// Cube

const loader = new GLTFLoader();

loader.load( 'assets/3dassets/ShipFrontEnd1.gltf', function ( gltf ) {
        scene.add(gltf.scene);
})

// loader.load(  'assets/3dassets/ShipGlassLeft.gltf', function ( gltf ) {
    
//     const geometry = new THREE.FileLoader(gltf)
//     const material = new THREE.MeshPhysicalMaterial({metalness: 0, roughness: 0, transmission: 0, thickness: 0.5});
//     const glassLeft = new THREE.Mesh(geometry ,material);
//     scene.add(glassLeft.scene);
// });

const objpos = new THREE.BoxHelper()
//  Point Light

// const pointLight = new THREE.PointLight(0xffffff)
// pointLight.position.set(400,5,5)
// scene.add(pointLight);

//Spot Light

const directionalLight = new THREE.DirectionalLight( 0xffffff, 0.2 );
directionalLight.position.set( 100, 100, 60 );
// directionalLight.target.set(0,0,60);
scene.add( directionalLight );
// const directionalHelper = new THREE.DirectionalLightHelper(directionalLight);
// scene.add(directionalHelper);
const directionalLight1 = new THREE.DirectionalLight( 0xffffff, 0.2 );
directionalLight1.position.set( -100, 100, 60 );
scene.add( directionalLight1 );
// const directionalHelper1 = new THREE.DirectionalLightHelper(directionalLight1);
// scene.add(directionalHelper1);

//   Helpers

// const lightHelper = new THREE.PointLightHelper(pointLight)
// const gridHelper = new THREE.GridHelper(100, 5, 0x0000aa, 0x0000ff);

// scene.add(lightHelper, gridHelper)

//   Ambient Light

// const ambientLight = new THREE.AmbientLight(0xffffff)
// scene.add(ambientLight);

const controls = new OrbitControls(camera, renderer.domElement);
controls.minDistance = 30;
controls.maxDistance = 100;

//                                                    Stars

function addStar(){
  
  const geometry = new THREE.SphereGeometry(1, 24, 24);
  const material = new THREE.MeshStandardMaterial({color: 0xffffff})
  const star = new THREE.Mesh(geometry, material);

  const [x, y, z] = Array(3).fill().map(() => THREE.MathUtils.randFloatSpread(2000));

  star.position.set(x,y,z);
  scene.add(star);

}

for (let i = 0; i < 2000; i++) {
  addStar();
}




function animate(){
  requestAnimationFrame(animate);
  torus.rotation.y += 0.02;
  torus2.rotation.y += 0.02;
  torus3.rotation.y += 0.02;
  torus4.rotation.y += 0.02;
//   gltf.rotation.z += 0.01;
  camera.position.x += 0.005;
  controls.update();
  interactionManager.update();
  TWEEN.update();
  renderer.render(scene, camera);
}

animate()
console.log("something")
