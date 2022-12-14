#include<windows.h>
#include<math.h>
#include<GL/glut.h>

void myInit()
{
    glClearColor(1.0,1.0,1.0,1.0);
    glColor3f(0.0f,0.0f,0.0f);

    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0,640.0,0.0,480.0);
}

void myDisplay()
{
    glClear(GL_COLOR_BUFFER_BIT);
    glPointSize(2.0);

    GLint h=300,k=300,x,x2,y,i=1,a=250,b=40;
    x2=a;

    for(x=1;x<=x2;x++)
    {
        y=b*sqrt(1-(pow(x,2)/pow(a,2)));

        glBegin(GL_POINTS);
        {
            glVertex2i(x+h,y+k);
            glVertex2i(-x+h,-y+k);
            glVertex2i(-x+h,y+k);
            glVertex2i(x+h,-y+k);
        }

        glEnd();
    }

    glFlush();
}

int main(int argc,char** argv)
{
    glutInit(&argc,argv);
    glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
    glutInitWindowSize(640,480);
    glutInitWindowPosition(100,150);
    glutCreateWindow("Line draw using line equation\n");
    glutDisplayFunc(myDisplay);
    myInit();
    glutMainLoop();
    return 1;
}
