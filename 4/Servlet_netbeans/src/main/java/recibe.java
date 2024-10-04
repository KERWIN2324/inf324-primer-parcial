import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/recibe")
public class recibe extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        // Recuperar el ID enviado desde el formulario PHP
        String idPropiedad = request.getParameter("id");

        String tipoImpuesto = obtenerTipoImpuesto(idPropiedad);
        String color = ObtenerColor(idPropiedad);

        response.setContentType("text/html;charset=UTF-8");
        response.getWriter().println("<html><head>"+"<title>HAM-LP</title>\n" +"<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />\n" +"    </head><body>\n");
        response.getWriter().println("</br></br></br></br>");
        response.getWriter().println("<h1 class=\"fw-bolder\" style=\"text-align: center; padding: 40px;\">EL IMPUESTO DE LA PROPIEDAD CON ID: " + idPropiedad);
        response.getWriter().println("<h1 class=\"fw-bolder\" style=\"text-align: center; padding: 40px; background-color: "+color +";\">ES " + tipoImpuesto +"</h1>");
        response.getWriter().println("</br></br></br> <h1 style=\"  padding: 30px;\"> <a class=\"navbar-brand\" href=\"http://localhost:8080/examen/6/admin.php\">VOLVER</a>  </h1>");
        response.getWriter().println("</body></html>");
    }

    private String obtenerTipoImpuesto(String idPropiedad) {
        if (idPropiedad.startsWith("1")) {
            return "IMPUESTO ALTO";
        } else if (idPropiedad.startsWith("2")) {
            return "IMPUESTO MEDIO";
        } else if (idPropiedad.startsWith("3")) {
            return "IMPUESTO BAJO";
        } else {
            return "IMPUESTO DESCONOCIDO";
        }
    }
    
    private String ObtenerColor(String idPropiedad) {
        if (idPropiedad.startsWith("1")) {
            return "#dc3a1e";
        } else if (idPropiedad.startsWith("2")) {
            return "#fff224";
        } else if (idPropiedad.startsWith("3")) {
            return "lightgreen";
        } else {
            return "lightblue";
        }
    }
}
