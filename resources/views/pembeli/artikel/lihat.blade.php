@extends('pembeli.layout_pembeli.main')

@section('container')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Berita Petto</title>
<link href="/berita_template/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_wrapper">

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="#" target="_parent">PETTO <strong>Artikel</strong><span>Artikel Hewan Peliharaan</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
            
            <div class="cleaner_h40"></div>
            
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
        
            <div class="post_section">
            
                <span class="comment"><a href="#">{{$artikel->id}}</a></span>
            
                <h2>{{$artikel->judul_artikel}}</h2>
    
                {{$artikel->created_at}}| <strong>dibuat oleh: admin</strong>
                
                <a href="#" target="_parent"><img src="{{asset($artikel->gambar_artikel)}}" alt="image" /></a>
                
              <p>{{$artikel->isi_artikel}}</p>
		  </div>
            
</html>
@endsection