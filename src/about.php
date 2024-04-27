<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lightweight Panorama Viewer</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }
    .swiper {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .panorama-viewer {
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="panorama-viewer" id="panorama-viewer-1"></div>
      </div>
      <div class="swiper-slide">
        <div class="panorama-viewer" id="panorama-viewer-2"></div>
      </div>
      <!-- Add more slides as needed -->
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/three/build/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // Initialize panorama viewers
    function initPanoramaViewer(containerId, imageUrl) {
      const container = document.getElementById(containerId);
      const scene = new THREE.Scene();
      const camera = new THREE.PanoramaCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
      const renderer = new THREE.WebGLRenderer();
      renderer.setSize(container.offsetWidth, container.offsetHeight);
      container.appendChild(renderer.domElement);

      const geometry = new THREE.SphereGeometry(500, 60, 40);
      const material = new THREE.MeshBasicMaterial({
        map: new THREE.TextureLoader().load(imageUrl),
        side: THREE.BackSide
      });
      const sphere = new THREE.Mesh(geometry, material);
      scene.add(sphere);

      function animate() {
        requestAnimationFrame(animate);
        camera.rotation.y += 0.0005;
        renderer.render(scene, camera);
      }
      animate();
    }

    // Initialize panorama viewers for each slide
    initPanoramaViewer('panorama-viewer-1', './img/360view/pano_2.jpg');
    initPanoramaViewer('panorama-viewer-2', './img/360view/pano_3.jpg');
    // Add more panorama viewers as needed
  </script>
</body>
</html>