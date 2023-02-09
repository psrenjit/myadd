@extends('layouts.app')
@section('content')
<style>
.loader {
  text-align: center;
  vertical-align: middle;
  position: fixed;
  display: flex;
  background: white;
  padding: 150px;
  box-shadow: 0px 40px 60px -20px rgba(0, 0, 0, 0.2);
}

.loader span {
  display: block;
  width: 20px;
  height: 20px;
  background: #eee;
  border-radius: 50%;
  margin: 0 5px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}

.loader span:nth-child(2) {
  background: #f07e6e;
}

.loader span:nth-child(3) {
  background: #84cdfa;
}

.loader span:nth-child(4) {
  background: #5ad1cd;
}

.loader span:not(:last-child) {
  animation: animate 1.5s linear infinite;
}

@keyframes animate {
  0% {
    transform: translateX(0);
  }

  100% {
    transform: translateX(30px);
  }
}

.loader span:last-child {
  animation: jump 1.5s ease-in-out infinite;
}

@keyframes jump {
  0% {
    transform: translate(0, 0);
  }
  10% {
    transform: translate(10px, -10px);
  }
  20% {
    transform: translate(20px, 10px);
  }
  30% {
    transform: translate(30px, -50px);
  }
  70% {
    transform: translate(-150px, -50px);
  }
  80% {
    transform: translate(-140px, 10px);
  }
  90% {
    transform: translate(-130px, -10px);
  }
  100% {
    transform: translate(-120px, 0);
  }
}

</style>
<div class="loader">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
</div>

<form action="havingsResult" method="get">
    @CSRF
    <div class="row">
        <div class="col"><input type="number" id="aad" class="form-control" name="num" placeholder="12 digit Aadhaar No"
                aria-label="First name" required ></div>
        <div class="col"><button type="submit" class="btn btn-primary">Primary</button></div>
    </div>
</form>
@stop
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".loader").css("display", "none");
        $(".btn").click(function () {
          var str = $("#aad").val();
          if(str!=''){
            $(".loader").css("display", "");
          }
        });
    });
</script>
