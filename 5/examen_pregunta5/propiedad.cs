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
    public partial class propiedad : Form
    {
        static string conexion = "SERVER=127.0.0.1;PORT=3306;DATABASE=bdkerwin;UID=root;PASSWORDS=;";
        MySqlConnection cn = new MySqlConnection(conexion);

        public propiedad()
        {
            InitializeComponent();
        }



        public DataTable llenar_grid()
        {
            cn.Open();
            DataTable dt = new DataTable();
            String llenar = "select * from propiedad";
            MySqlCommand cmd = new MySqlCommand(llenar, cn);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(dt);
            cn.Close();
            return dt;
        }

        public void limpiar()
        {
            id.Clear();
            zona.Clear();
            xinicial.Clear();
            yinicial.Clear();
            xfinal.Clear();
            yfinal.Clear();
            superficie.Clear();
            propietario.Clear();
            distrito.Clear();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void btn_modificar_Click(object sender, EventArgs e)
        {
            cn.Open();

            try
            {
                string actualizar = "UPDATE propiedad SET id=@id , zona=@zona, xinicial=@xinicial,yinicial=@yinicial,xfinal=@xfinal,yfinal=@yfinal, superficie=@superficie, propetario=@propietario , distrito=@distrito WHERE id=@id";

                MySqlCommand cmd = new MySqlCommand(actualizar, cn);

                cmd.Parameters.AddWithValue("@id", id.Text);
                cmd.Parameters.AddWithValue("@zona", zona.Text);
                cmd.Parameters.AddWithValue("@xinicial", xinicial.Text);
                cmd.Parameters.AddWithValue("@yinicial", yinicial.Text);
                cmd.Parameters.AddWithValue("@xfinal", xfinal.Text);
                cmd.Parameters.AddWithValue("@yfinal", yfinal.Text);
                cmd.Parameters.AddWithValue("@superficie", superficie.Text);
                cmd.Parameters.AddWithValue("@propietario", propietario.Text);
                cmd.Parameters.AddWithValue("@distrito", distrito.Text);

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

        private void btn_volver_Click(object sender, EventArgs e)
        {
            FormLogin adminForm = new FormLogin();
            adminForm.Show();
            this.Hide();
        }

        private void propiedad_Load(object sender, EventArgs e)
        {
            dataGridView1.DataSource = llenar_grid();
        }

        private void btn_agregar_Click(object sender, EventArgs e)
        {
            cn.Open();

            try
            {
                string insertar = "INSERT INTO propiedad(id,zona,xinicial,yinicial,xfinal,yfinal,superficie,propetario,distrito) VALUES (@id,@zona,@xinicial,@yinicial,@xfinal,@yfinal,@superficie,@propietario,@distrito)";

                MySqlCommand cmd = new MySqlCommand(insertar, cn);


                cmd.Parameters.AddWithValue("@id", id.Text);
                cmd.Parameters.AddWithValue("@zona", zona.Text);
                cmd.Parameters.AddWithValue("@xinicial", xinicial.Text);
                cmd.Parameters.AddWithValue("@yinicial", yinicial.Text);
                cmd.Parameters.AddWithValue("@xfinal", xfinal.Text);
                cmd.Parameters.AddWithValue("@yfinal", yfinal.Text);
                cmd.Parameters.AddWithValue("@superficie", superficie.Text);
                cmd.Parameters.AddWithValue("@propietario", propietario.Text);
                cmd.Parameters.AddWithValue("@distrito", distrito.Text);


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

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            try
            {
                id.Text = dataGridView1.CurrentRow.Cells[0].Value.ToString();
                zona.Text = dataGridView1.CurrentRow.Cells[1].Value.ToString();
                xinicial.Text = dataGridView1.CurrentRow.Cells[2].Value.ToString();
                yinicial.Text = dataGridView1.CurrentRow.Cells[3].Value.ToString();
                xfinal.Text = dataGridView1.CurrentRow.Cells[4].Value.ToString();
                yfinal.Text = dataGridView1.CurrentRow.Cells[5].Value.ToString();
                superficie.Text = dataGridView1.CurrentRow.Cells[6].Value.ToString();
                propietario.Text = dataGridView1.CurrentRow.Cells[7].Value.ToString();
                distrito.Text = dataGridView1.CurrentRow.Cells[8].Value.ToString();

            }
            catch
            {
            }
        }

        private void btn_eliminar_Click(object sender, EventArgs e)
        {
            cn.Open();

            try
            {
                string insertar = "DELETE FROM propiedad WHERE id=@id";

                MySqlCommand cmd = new MySqlCommand(insertar, cn);


                cmd.Parameters.AddWithValue("@id", id.Text);


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

        private void button3_Click(object sender, EventArgs e)
        {
            limpiar();
        }
    }
}
