using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace App
{
    public partial class Inicio : Form

    {
        Introduccion introduccion = new Introduccion();
        Introduccion2 introduccion2 = new Introduccion2();
        Introduccion3 introduccion3 = new Introduccion3();
        Introduccion4 introduccion4 = new Introduccion4();
        Calendario calendario = new Calendario();
        Registro registro = new Registro();

        public Inicio()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Hide();
            registro.ShowDialog();
            introduccion.ShowDialog();
            introduccion2.ShowDialog();
            introduccion3.ShowDialog();
            introduccion4.ShowDialog();            
            Show();




        }

        private void button2_Click(object sender, EventArgs e)
        {
            
            Hide();
            calendario.ShowDialog();

        }
    }
}
