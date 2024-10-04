using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace pregunta5
{
    public partial class FormLogin : Form
    {
        public FormLogin()
        {
            InitializeComponent();
        }

        public class User
        {
            public string Username { get; set; }
            public string Password { get; set; }
            public string Role { get; set; }
        }

        List<User> users = new List<User>
        {
            new User { Username = "admin", Password = "admin", Role = "admin" },
            new User { Username = "roman", Password = "10072756", Role = "user" },
            new User { Username = "karla", Password = "10072762", Role = "user" }
        };


        private void btn_Click(object sender, EventArgs e)
        {
            string username = name.Text;
            string password = contra.Text;

            User authenticatedUser = AuthenticateUser(username, password);

            if (authenticatedUser != null)
            {
                if (authenticatedUser.Role == "admin")
                {
                    FormAdmin adminForm = new FormAdmin();
                    adminForm.Show();
                }
                else if (authenticatedUser.Role == "user")
                {
                    FormUsuario userForm = new FormUsuario(password);
                    userForm.Show();
                }
                this.Hide(); 
            }
            else
            {
                MessageBox.Show("Usuario o Contraseña Incorrecta");
            }
        }

        private User AuthenticateUser(string username, string password)
        {
            return users.FirstOrDefault(u => u.Username == username && u.Password == password);
        }



    }
}
