<template>

<!-- Nav Bar -->
<div class="home">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Web Zone</a> -->
        <img src="../../../public/dist/img/iTalk.png" style="width:50px;" alt="">
        <button
          class="navbar-toggler btn-dark"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item nav-link">
                <a href="/login"> 
                  <button class="btn btn-info">Sign In</button>
                </a>
            </li>
            <li class="nav-item nav-link">
                <a href="/register"> 
                  <button class="btn btn-light">Sign Up</button>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
    
</template>

<script>
export default {
    name: 'HomeHeader',
  components: {
  },
  methods: {
    login: function() {
      this.$router.push('/login');
    },
    register: function() {
      this.$router.push('/register');
    },
  },
}
</script>


<style scop>
.link-r{
  font-weight: 500;
  font-size: 1.1rem;
}
.navbar{
  background: #DAE0E6;
}
a{
    text-decoration: none;
}

.btn{
    border-radius: 40px;
    width: 120px;
}

</style>


