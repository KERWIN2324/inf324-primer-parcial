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
    public partial class FormAdmin : Form
    {
        public FormAdmin()
        {
            InitializeComponent();
        }

        static string conexion = "SERVER=127.0.0.1;PORT=3306;DATABASE=bdkerwin;UID=root;PASSWORDS=;";
        MySqlConnection cn = new MySqlConnection(conexion);

        private void FormAdmin_Load(object sender, EventArgs e)
        {
            dataGridView1.DataSource = llenar_grid();
        }

        public DataTable llenar_grid()
        {
            cn.Open();
            DataTable dt = new DataTable();
            String llenar = "select * from persona";
            MySqlCommand cmd = new MySqlCommand(llenar, cn);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(dt);
            cn.Close();
            return dt;
        }

        public void limpiar(){
            tci.Clear();
            tpaterno.Clear();
            tmaterno.Clear();
            tname.Clear();
            ttelefono.Clear();
        }

        private void btn_agregar_Click(object sender, EventArgs e)
        {
            cn.Open();

            try
            {
                string insertar = "INSERT INTO persona(ci, paterno, materno, nombre, telefono) VALUES (@ci, @paterno, @materno, @nombre, @telefono)";

                MySqlCommand cmd = new MySqlCommand(insertar, cn);


                cmd.Parameters.AddWithValue("@ci", tci.Text);
                cmd.Parameters.AddWithValue("@paterno", tpaterno.Text);
                cmd.Parameters.AddWithValue("@materno", tmaterno.Text);
                cmd.Parameters.AddWithValue("@nombre", tname.Text);
                cmd.Parameters.AddWithValue("@telefono", ttelefono.Text);

                int rowsAffected = cmd.ExecuteNonQuery();

                if (rowsAffected > 0)
                {
                    MessageBox.Show("Datos insertados correctamente.");
                }
                else
                {
                    MessageBox.Show("No se insertaron los datos.");
                }
                limpiar();
            }
            catch (MySqlException)
            {
                
            }
            catch (Exception)
            {
               
            }

            cn.Close();

            dataGridView1.DataSource = llenar_grid();
        }

        private void btn_volver_Click(object sender, EventArgs e)
        {
            FormLogin adminForm = new FormLogin();
            adminForm.Show();
            this.Hide();
        }

        private void btn_modificar_Click(object sender, EventArgs e)
        {
            cn.Open();

            try
            {
                string actualizar = "UPDATE persona SET ci=@ci , paterno=@paterno, materno=@materno, nombre=@nombre, telefono=@telefono WHERE ci=@ci";

                MySqlCommand cmd = new MySqlCommand(actualizar, cn);

                cmd.Parameters.AddWithValue("@ci", tci.Text);  
                cmd.Parameters.AddWithValue("@paterno", tpaterno.Text); 
                cmd.Parameters.AddWithValue("@materno", tmaterno.Text);  
                cmd.Parameters.AddWithValue("@nombre", tname.Text);
                cmd.Parameters.AddWithValue("@telefono", ttelefono.Text);  

                int rowsAffected = cmd.ExecuteNonQuery();

                if (rowsAffected > 0)
                {
                    MessageBox.Show("Datos actualizados correctamente.");
                }
                else
                {
                    MessageBox.Show("No se actualizaron los datos.");
                }
                limpiar();
            }
            catch (MySqlException)
            {
                
            }
            catch (Exception)
            {
                
            }

            cn.Close();

            dataGridView1.DataSource = llenar_grid();

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            try
            {
                tci.Text = dataGridView1.CurrentRow.Cells[0].Value.ToString();
                tpaterno.Text = dataGridView1.CurrentRow.Cells[1].Value.ToString();
                tmaterno.Text = dataGridView1.CurrentRow.Cells[2].Value.ToString();
                tname.Text = dataGridView1.CurrentRow.Cells[3].Value.ToString();
                ttelefono.Text = dataGridView1.CurrentRow.Cells[4].Value.ToString();
               
            }
            catch { 
            }
        }

        private void btn_eliminar_Click(object sender, EventArgs e)
        {
            cn.Open();

            try
            {
                string insertar = "DELETE FROM persona WHERE ci=@ci";

                MySqlCommand cmd = new MySqlCommand(insertar, cn);


                cmd.Parameters.AddWithValue("@ci", tci.Text);


                int rowsAffected = cmd.ExecuteNonQuery();


                if (rowsAffected > 0)
                {
                    MessageBox.Show("Datos eliminados correctamente.");
                }
                else
                {
                    MessageBox.Show("No se eliminados los datos.");
                }
                limpiar();
            }
            catch (MySqlException)
            {

            }
            catch (Exception)
            {

            }

            cn.Close();

            dataGridView1.DataSource = llenar_grid();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            FormAdmin userForm = new FormAdmin();
            userForm.Show();
            this.Hide(); 
        }

        private void button2_Click(object sender, EventArgs e)
        {
            propiedad userForm = new propiedad();
            userForm.Show();
            this.Hide(); 
        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void ttelefono_TextChanged(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            limpiar();
        }
    }
}
