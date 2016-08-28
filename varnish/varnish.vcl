# This is a basic VCL configuration file for varnish.  See the vcl(7)
# man page for details on VCL syntax and semantics.
# 
# Default backend definition.  Set this to point to your content
# server.
# 
backend default {
    .host = "127.0.0.1";
    .port = "8080";
}

sub vcl_recv {
    unset req.http.cookie;
}

sub vcl_fetch {
    unset beresp.http.set-cookie;
}

sub vcl_deliver {
 unset resp.http.set-cookie;
}