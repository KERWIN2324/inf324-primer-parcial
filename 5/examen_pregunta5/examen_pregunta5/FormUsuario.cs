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
    public partial class FormUsuario : Form
    {
        public FormUsuario(string xci)
        {
            ci = xci;

            InitializeComponent();
        }

        static string conexion = "SERVER=127.0.0.1;PORT=3306;DATABASE=bdkerwin;UID=root;PASSWORDS=;";
        MySqlConnection cn = new MySqlConnection(conexion);

        static public string ci = "";

        private void FormUsuario_Load(object sender, EventArgs e)
        {
            name.Text = ci;

            dataGridView1.DataSource = llenar_grid(name.Text);
            dataGridView2.DataSource = llenar_grid2(name.Text);
        }


        public DataTable llenar_grid(string ci)
        {
            cn.Open();
            DataTable dt = new DataTable();
            String llenar = "select * from persona where ci="+ci;
            MySqlCommand cmd = new MySqlCommand(llenar, cn);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(dt);
            cn.Close();
            return dt;
        }


        public DataTable llenar_grid2(string ci)
        {
            cn.Open();
            DataTable dt = new DataTable();
            String llenar = "select * from propiedad where propetario=" + ci;
            MySqlCommand cmd = new MySqlCommand(llenar, cn);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(dt);
            cn.Close();
            return dt;
        }

        public FormUsuario()
        {
            
        }

        private void volver_Click(object sender, EventArgs e)
        {
            FormLogin adminForm = new FormLogin();
            adminForm.Show();
            this.Hide();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
