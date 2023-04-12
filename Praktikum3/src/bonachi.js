function fibonacci(n) {
    if (n <= 1) {
      return [0, 1].slice(0, n + 1);
    } else {
      var fib = fibonacci(n - 1);
      fib.push(fib[fib.length - 1] + fib[fib.length - 2]);
      return fib;
    }
  }
  
  console.log(fibonacci(10)); // mencetak deret Fibonacci dari 0 hingga 10