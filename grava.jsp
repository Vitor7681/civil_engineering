<%@page language="java" import="java.sql.*"%>

<%
String vnome = request.getParameter("nome");
String vemail = request.getParameter("email");
String vtelefone = request.getParameter("telefone");
int vidade = Integer.parseInt (request.getParameter("idade") );
String vsexo = request.getParameter("genero");
Date vdataNasc = Date.valueOf(request.getParameter("dataNasc"));
String vcidade = request.getParameter("cidade");
String vestado = request.getParameter("estado");
String vbairro = request.getParameter("bairro");
String vlogradouro = request.getParameter("logradouro");

String banco = "formulario";
String endereco = "jdbc:mysql://localhost:3306/" + banco;
String usuario = "root";
String senha = "";

String driver = "com.mysql.jdbc.Driver";

Class.forName (driver);

Connection conexao ;

conexao = DriverManager.getConnection (endereco, usuario, senha);

String sql = "INSERT INTO clientes (nome, email, telefone, idade, sexo, dataNasc, cidade, estado, bairro, logradouro) values (?,?,?,?,?,?,?,?,?,?)";

PreparedStatement stn = conexao.prepareStatement(sql);
stn.setString(1, vnome);
stn.setString(2, vemail);
stn.setString(3, vtelefone);
stn.setInt(4, vidade);
stn.setString(5, vsexo);
stn.setDate(6, vdataNasc);
stn.setString(7, vcidade);
stn.setString(8, vestado);
stn.setString(9, vbairro);
stn.setString(10, vlogradouro);

stn.execute() ;
%>
<script>window.location.href = "obrigado.html" </script>








%>