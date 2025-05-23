<nav style="background-color: rgb(196, 83, 237)">
    <h3>¡Hola! esto es un navbar</h3>
<a href="{{ route('trainingcenter.create') }}" class="btn btn-warning btn-sm mb-4">Training center</a>
<a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">Computer</a>
<a href="{{ route('area.create') }}" class="btn btn-warning btn-sm mb-4">Areas</a>
</nav>
<style>
  h3{
    color: white;
    text-align: center;
    animation: color 3s infinite;
  }
  @keyframes color {
    0% { color: rgb(255, 0, 0); }
    25% { color: rgb(255, 153, 0); }
    50% { color: rgb(242, 255, 0); }
    75% { color: rgb(51, 255, 0); }
    90% { color: rgb(0, 72, 255); }
    100% { color: rgb(200, 0, 255); }
  }
</style>