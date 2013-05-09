def set_conf
  
  # => REF raw string > http://d.hatena.ne.jp/ancient-v/20081006/1223301594
  fpath = 'C:\WORKS\PROGRAMS\xampp\apache\conf\httpd.conf'
  
  #==============================
  #
  # Read file
  #
  #==============================

  
  f = open(fpath, "r")
  # f = open(fpath, "a")
  
  src_lines = f.readlines()
  
  f.close

  #debug
  puts "src_lines.length=" + src_lines.length.to_s
  
  
  #==============================
  #
  # Build new lines
  #
  #==============================
  #==============================
  #
  # 1. Get data
  #
  #==============================

  
  # => REF SEPARATOR http://fuwakukara.seesaa.net/article/307454974.html
  project_name = File.expand_path(__FILE__).split(File::SEPARATOR || File::ALT_SEPARATOR)[-2]
  project_path = File.dirname(File.expand_path(__FILE__))
  
  # project_name = File.expand_path(__FILE__).split(File::ALT_SEPARATOR || File::SEPARATOR)[-2]
  # project_name = File.expand_path(__FILE__).split(File.Separator)[-2]
  # project_name = File.expand_path(__FILE__).split(File.separator)[-2]
  # project_name = __FILE__.split("\\")[-2]
  # project_name = __FILE__.split("\\")[-1] # => project_name=set_apache_conf.rb
  
  #debug
  # puts File::ALT_SEPARATOR  # => "\"
  # puts File::SEPARATOR  # => "/"
  puts "project_name=" + project_name
  puts "project_path=" + project_path
  # puts __FILE__
  # puts File.expand_path(__FILE__)
  # puts File.dirname(__FILE__)

  #==============================
  #
  # 2. DocumentRoot
  #
  #==============================  

  r1 = /^DocumentRoot/
  
  s2 = '<Directory "C:/WORKS/WS/cakephp-2.3.1">'
  s2_new = "<Directory \"#{project_path}\">"
  
  r2 = /^#{s2}/
  
  
  w1 = "DocumentRoot"
  
  new_lines = []
  
  src_lines.each {|line|
    
      if r1 =~ line
          
          new_lines << w1 + " " + project_path
          # new_lines << w1 + " " + project_name
      
      elsif r2 =~ line
        
          new_lines << s2_new
        
      else
        
          new_lines << line
        
      end
  }  

  #==============================
  #
  # 3. Directory
  #
  #==============================  
    
  #==============================
  #
  # New file
  #
  #==============================
  f = open(fpath + "_new", "w")
  # f = open(fpath, "a")
  
  new_lines.each {|line|
      
      f.write(line)
      
  }
  
  f.close

  puts "Done"
  
end#def set_conf

set_conf()

