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

    GLint x,y,x1=50,x2=100,y1=100,y2=200;
    GLdouble xf,m,b;
    x=x1;y=y1;
    m=(y2-y1)/(x2-x1);
    b=y1-m*x1;
    glBegin(GL_POINTS);
    {
        glVertex2i(x,y);
    }
    glEnd();

    while(y<y2)
    {
        y++;
        xf=(y-b)/m;
        x=floor(xf+0.5);
        glBegin(GL_POINTS);
        {
            glVertex2i(x,y);
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
