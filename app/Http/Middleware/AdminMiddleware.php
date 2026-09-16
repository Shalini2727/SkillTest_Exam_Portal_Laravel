<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class AdminMiddleware {
    public function handle(Request $request, Closure $next) {
        return session('admin_id') ? $next($request) : redirect()->route('admin.login');
    }
}
